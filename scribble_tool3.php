<?php
$imageName = isset($_GET['img']) ? $_GET['img'] : null;
$imagePath = 'uploads/' . $imageName;
?>

<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>चित्रावर स्क्रिबल करा</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #e8f0f2; /* हलका पाश्चिम */
            font-family: 'Arial', sans-serif;
            text-align: center;
            color: #333;
        }
        h1 {
            font-size: 2.5rem;
            color: #5b7f8d; /* हलका टील */
            margin: 20px 0;
        }
        h2 {
            font-size: 1.8rem;
            color: #4a4e69; /* गडद ग्रे */
            margin-bottom: 20px;
            padding: 10px;
            border-left: 5px solid #f09a9d; /* हलका गुलाबी */
            background-color: #fce6e6; /* हलका गुलाबी पृष्ठभूमी */
            display: inline-block;
            border-radius: 5px;
        }
        #controls {
            margin-bottom: 20px;
        }
        canvas {
            border: 2px solid #d4d6d8;
            cursor: crosshair;
            background-color: #ffffff; /* कॅनव्हससाठी पांढरा पृष्ठभूमी */
            width: 900px;  /* वाढवलेली चौडाई */
            height: 700px; /* वाढवलेली उंची */
            max-width: 100%;
        }
        button {
            margin: 5px;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background-color: #f09a9d; /* हलका गुलाबी */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 1rem;
        }
        button:hover {
            background-color: #d37a7e; /* गडद हलका गुलाबी */
        }
        select, input[type="color"] {
            padding: 10px;
            border-radius: 5px;
            margin-left: 5px;
            font-size: 1rem;
        }
    </style>
</head>
<body>

<h1>तुमच्या ताण, चिंता आणि निराशा कमी करा</h1>
<h2>“सृजनशीलतेला धैर्याची आवश्यकता असते.” – हेन्री मातिस्से</h2>

<div id="controls">
    <select id="shapeSelector">
        <option value="none">आकार निवडा</option>
        <option value="rectangle">आयत</option>
        <option value="circle">गोल</option>
    </select>
    <input type="color" id="colorPicker" value="#ff0000">
    <button id="clearButton">स्क्रिबल स्पष्ट करा</button>
</div>

<canvas id="canvas" width="900" height="700"></canvas>
<script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    let drawing = false;
    let shape = 'none';
    let startX, startY;
    let img = new Image();
    let strokeColor = document.getElementById('colorPicker').value;

    img.src = '<?php echo $imagePath; ?>';
    img.onload = function() {
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
    };

    document.getElementById('shapeSelector').addEventListener('change', function() {
        shape = this.value;
    });

    document.getElementById('colorPicker').addEventListener('input', function() {
        strokeColor = this.value; // वापरकर्त्याच्या निवडीच्या आधारे रंग अपडेट करा
    });

    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('touchstart', startDrawing);
    canvas.addEventListener('touchend', stopDrawing);
    canvas.addEventListener('touchmove', draw);

    function startDrawing(e) {
        drawing = true;
        const rect = canvas.getBoundingClientRect();
        startX = (e.clientX || e.touches[0].clientX) - rect.left;
        startY = (e.clientY || e.touches[0].clientY) - rect.top;

        if (shape !== 'none') {
            drawShape(startX, startY, 0, 0);
        }
    }

    function stopDrawing() {
        drawing = false;
        ctx.beginPath();
    }

    function draw(e) {
        if (!drawing) return;

        const rect = canvas.getBoundingClientRect();
        const x = (e.clientX || e.touches[0].clientX) - rect.left;
        const y = (e.clientY || e.touches[0].clientY) - rect.top;

        ctx.lineWidth = 5;
        ctx.lineCap = 'round';
        ctx.strokeStyle = strokeColor; // निवडलेला रंग वापरा

        if (shape === 'none') {
            ctx.lineTo(x, y);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(x, y);
        } else {
            drawShape(startX, startY, x - startX, y - startY);
        }
    }

    function drawShape(x, y, width, height) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

        ctx.beginPath();
        if (shape === 'rectangle') {
            ctx.rect(x, y, width, height);
        } else if (shape === 'circle') {
            const radius = Math.sqrt(width * width + height * height);
            ctx.arc(x + width / 2, y + height / 2, radius, 0, Math.PI * 2);
        }
        ctx.strokeStyle = strokeColor; // निवडलेला रंग वापरा
        ctx.stroke();
    }

    document.getElementById('clearButton').addEventListener('click', () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height); // चित्र पुन्हा काढा
        shape = 'none'; // आकार रीसेट करा
    });
</script>

</body>
</html>
