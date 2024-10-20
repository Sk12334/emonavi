<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>शब्दावर चित्रित करा!</title>
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
            text-align: center;
        }
        canvas {
            border: 2px solid #333;
            margin-bottom: 20px;
            cursor: pointer; /* हाताचा पॉइंटर चित्रित करण्यासाठी */
        }
        #controls {
            margin: 20px;
        }
        button {
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
            background-color: #FF5733;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            font-size: 1.1em;
        }
        button:hover {
            background-color: #C70039;
        }
    </style>
</head>
<body>

<h1>दिलेले शब्द शोधा</h1><hr width=50% size=10% color="teal" align=center>
    <canvas id="drawingCanvas" width="800" height="700"></canvas>
    
    <div id="controls">
        <button onclick="clearCanvas()">स्पष्ट करा</button>
        <button onclick="nextWord()">अगला पझल</button>
    </div>

    <script>
        const canvas = document.getElementById('drawingCanvas');
        const ctx = canvas.getContext('2d');

        let isDrawing = false;
        let lastX = 0;
        let lastY = 0;

        // शब्द पझलसाठी चित्रांचे URL
        const images = [
            'https://i.pinimg.com/564x/8a/13/7e/8a137e8a5827a738605d054563e00bb6.jpg',
            'https://i.pinimg.com/736x/b1/db/b5/b1dbb56bdbcdc987521310c68bdc2b5a.jpg',
            'https://i.pinimg.com/564x/81/85/50/818550b18195dd189b6eb18e9e4de6f5.jpg',
            'https://i.pinimg.com/564x/19/3f/30/193f307590626ec9612975c4a617a70c.jpg', // उदाहरण म्हणून दुसरी छबी
            'https://i.pinimg.com/564x/3e/00/47/3e0047fc8fabae7c2cc26b2250954970.jpg', // उदाहरण म्हणून तिसरी छबी
            'https://i.pinimg.com/564x/bb/2d/93/bb2d939c784c5b027cd7fbcc3f6adf75.jpg',
            'https://i.pinimg.com/564x/9b/73/66/9b7366ccc6961993c23fa93326defbd2.jpg',
            'https://i.pinimg.com/564x/0f/ff/a2/0fffa27a06430f0b8efc93759c8ca2d5.jpg',
            'https://i.pinimg.com/564x/19/3f/30/193f307590626ec9612975c4a617a70c.jpg',
            'https://i.pinimg.com/564x/4b/4e/72/4b4e72c8e258bce2a2abfc320126a1ee.jpg',
            'https://i.pinimg.com/736x/8d/36/1d/8d361d726358b841589b022fafa55959.jpg'
        ];
        let currentImageIndex = 0;

        // प्रारंभिक चित्र लोड करा
        const loadImage = () => {
            const image = new Image();
            image.src = images[currentImageIndex];
            image.onload = () => {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
            };
        };
        loadImage();

        canvas.addEventListener('mousedown', (e) => {
            isDrawing = true;
            lastX = e.offsetX;
            lastY = e.offsetY;
        });

        canvas.addEventListener('mousemove', (e) => {
            if (isDrawing) {
                ctx.strokeStyle = 'black'; // चित्रणाचा रंग
                ctx.lineWidth = 5; // चित्रणाची रुंदी
                ctx.lineJoin = 'round';
                ctx.beginPath();
                ctx.moveTo(lastX, lastY);
                ctx.lineTo(e.offsetX, e.offsetY);
                ctx.stroke();
                lastX = e.offsetX;
                lastY = e.offsetY;
            }
        });

        canvas.addEventListener('mouseup', () => {
            isDrawing = false;
        });

        canvas.addEventListener('mouseleave', () => {
            isDrawing = false;
        });

        function clearCanvas() {
            loadImage(); // सध्याचे चित्र पुन्हा लोड करा
        }

        function nextWord() {
            currentImageIndex = (currentImageIndex + 1) % images.length; // चित्रांमध्ये चक्र करा
            loadImage(); // पुढील चित्र लोड करा
        }
    </script>

</body>
</html>
