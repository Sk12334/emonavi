<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>भ्रमणकारी चित्रित करें!</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2.5em; /* Increased font size */
        }
        canvas {
            border: 2px solid #333;
            cursor: pointer; /* हाथ का पॉइंटर चित्रित करने के लिए */
        }
        #controls {
            margin: 20px;
        }
        button {
            padding: 15px 30px; /* बटन का आकार बढ़ा दिया */
            margin: 0 10px;
            cursor: pointer;
            background-color: #FF5733;
            color: white;
            border: none;
            border-radius: 10px; /* गोल कोने */
            font-size: 1.2em; /* फॉन्ट का आकार बढ़ा दिया */
            transition: background-color 0.3s, transform 0.2s; /* होवर प्रभाव के लिए संक्रमण जोड़ा */
        }
        button:hover {
            background-color: #C70039;
            transform: scale(1.05); /* होवर पर बटन का थोड़ा बड़ा होना */
        }
        button:active {
            transform: scale(0.95); /* क्लिक करते समय बटन छोटा होना */
        }
    </style>
</head>
<body>

    <h1>भ्रमणकारी के माध्यम से अपना रास्ता चित्रित करें!</h1>
    <canvas id="mazeCanvas" width="800" height="600"></canvas> <!-- कैनवास का आकार -->
    
    <div id="controls">
        <button onclick="clearCanvas()">स्पष्ट करें</button>
        <button onclick="nextMaze()">अगला भ्रमणकारी</button>
    </div>

    <script>
        const canvas = document.getElementById('mazeCanvas');
        const ctx = canvas.getContext('2d');

        let isDrawing = false;
        let mazeIndex = 0;

        const mazes = [
            'https://images.contentstack.io/v3/assets/blt822c60c126c92e3a/bltc1bb27ed0e73e93d/6493577450d8ed3f0e2f3207/BeeMaze_game_en_prev.jpg',
            'https://i.pinimg.com/236x/28/58/4c/28584c20c1fd3bd7c3c3f67c74fd9362.jpg', // दूसरी भूलभुलैया छवि
            'https://i.pinimg.com/474x/53/94/1c/53941c722d39488ca6ec16b21ff59388.jpg',  // तीसरी भूलभुलैया छवि
            'https://i.pinimg.com/236x/64/94/27/649427acbcd5139046b0a8de6c8164f8.jpg',
            'https://i.pinimg.com/736x/37/36/aa/3736aa7614b8a3ec4c434e1147515d62.jpg',
            'https://i.pinimg.com/236x/e4/5a/bb/e45abb91c1255672b2ff3596f639b197.jpg',
            'https://i.pinimg.com/236x/24/e7/12/24e712d233826d2a5d5cce1b96c829fa.jpg',
            'https://i.pinimg.com/236x/9e/af/92/9eaf92c3fa62205f83787dfc37c59cef.jpg',
            'https://i.pinimg.com/236x/78/e6/bf/78e6bf6789097c0c7244b751c36a7d78.jpg',
            'https://i.pinimg.com/236x/b0/e9/fa/b0e9faf75d534632d50a6cad8fa91d25.jpg',
            'https://i.pinimg.com/236x/99/a0/06/99a006e896fdc3be4bb86817357d85cc.jpg',
            'https://i.pinimg.com/236x/8d/73/cf/8d73cfaa05b429e7eab795a19af7fb3e.jpg',
            'https://i.pinimg.com/236x/a8/b3/bc/a8b3bcdd7336ff4ad3547779e0700e9b.jpg',
            'https://i.pinimg.com/236x/28/2d/41/282d41bbec06456edbc8e698271f0e7e.jpg'
        ];

        function loadMaze() {
            const image = new Image();
            image.src = mazes[mazeIndex];
            image.onload = () => {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
            };
        }

        canvas.addEventListener('mousedown', (e) => {
            isDrawing = true;
            ctx.beginPath();
            ctx.moveTo(e.offsetX, e.offsetY);
        });

        canvas.addEventListener('mousemove', (e) => {
            if (isDrawing) {
                ctx.lineTo(e.offsetX, e.offsetY);
                ctx.strokeStyle = 'red'; // चित्रण पथ का रंग
                ctx.lineWidth = 5; // चित्रण पथ की चौड़ाई
                ctx.stroke();
            }
        });

        canvas.addEventListener('mouseup', () => {
            isDrawing = false;
            ctx.closePath();
        });

        canvas.addEventListener('mouseleave', () => {
            isDrawing = false;
            ctx.closePath();
        });

        function clearCanvas() {
            loadMaze(); // वर्तमान भूलभुलैया छवि को फिर से लोड करें
        }

        function nextMaze() {
            mazeIndex = (mazeIndex + 1) % mazes.length; // भूलभुलैया के माध्यम से चक्र
            loadMaze(); // अगली भूलभुलैया छवि को लोड करें
        }

        // प्रारंभिक भूलभुलैया को लोड करें
        loadMaze();
    </script>

</body>
</html>
