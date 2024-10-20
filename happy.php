<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Mood Activities</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8; /* Light pastel blue */
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }
        header {
            background-color: #a8dadc; /* Pastel teal */
            color: white;
            padding: 30px;
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 4em;
        }
        h2 {
            font-size: 7em;
            margin-top: 20px;
            color: #457b9d; /* Soft blue */
        }
        h3 {
            font-size: 2.5em;
            color: #f1faee; /* Off-white */
        }
        nav {
            margin: 20px 0;
        }
        nav a {
            margin: 0 20px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.8em;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 30px;
        }
        .activity {
            background-color: #ffe8d6; /* Pastel peach */
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 40px;
            transition: transform 0.2s;
        }
        .activity:hover {
            transform: scale(1.02);
        }
        button {
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.8em;
            margin-top: 10px;
            display: inline-block;
            text-align: center;
        }
        .button1 { background-color: #ff6f61; } /* Soft coral */
        .button2 { background-color: #ffb74d; } /* Pastel yellow */
        .button3 { background-color: #ffcccb; } /* Light blush */
        .button4 { background-color: #ffe0a0; } /* Soft lemon */
        .button5 { background-color: #ff6f61; } /* Light gray */
        textarea {
            width: 100%;
            font-size: 1.5em;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 10px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 15px;
            font-size: 1.5em;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        footer {
            background-color: #a8dadc; /* Pastel teal */
            color: white;
            text-align: center;
            padding: 15px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .suggestion {
            font-size: 3.5em;
            font-weight: bold;
            color: #457b9d; /* Soft blue */
        }
        .activity p {
            font-size: 2.8em;
            margin: 10px 0;
        }
        .poem {
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            background: #ffe8d6; /* Light pastel peach */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .poem p {
            font-size: 2.5em; /* Increased font size */
            margin: 10px 0;
        }
        .poem .line1 { color: #ff6f61; font-family: 'Georgia', serif; }
        .poem .line2 { color: #ffb74d; font-family: 'Courier New', monospace; }
        .poem .line3 { color: #ffcccb; font-family: 'Arial Black', sans-serif; }
        .poem .line4 { color: #ffe0a0; font-family: 'Times New Roman', serif; }
    </style>
</head>
<body>
    <header>
        <h1>Happy Mood Activities</h1>
        <nav>
            <a href="#activities">Activities</a>
            <a href="#resources">Resources</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <div class="container">
        <!-- Poem Section -->
        <div class="poem">
            <p class="line1">Shine Bright</p>
            <p class="line2">Embrace the day with a heart full of light,<br>
            For joy is within you, shining so bright.<br>
            Each step that you take, with courage and cheer,<br>
            Brings dreams to life and wipes away fear.</p>

            <p class="line3">The sky's full of promise, the world’s on your side,<br>
            Let hope be your wings, let love be your guide.<br>
            With laughter and grace, you rise above all,<br>
            No challenge too great, no dream too small.</p>

            <p class="line4">So dance through the moments, cherish the now,<br>
            Wear a smile on your face, lift your head and bow.<br>
            For life is a gift, a beautiful flight,<br>
            Keep soaring higher, and shine with all your might.</p>
        </div>

        <section id="activities">
            <h2>SUGGESTIONS THAT WILL HELP YOU STAY HAPPY</h2>

            <!-- Gratitude Journaling -->
            <div class="activity">
                <h3 class="suggestion">Gratitude Journaling</h3>
                <p>Take a few minutes each day to write down at least three things you’re grateful for. Whether it's a sunny day, a good meal, or a kind gesture, acknowledging these moments can significantly boost your mood. Consider elaborating on why each item brings you joy.</p>
                <textarea rows="5" placeholder="Write what you're grateful for..."></textarea>
                <button class="button1" onclick="saveGratitude()">Save Gratitude</button>
                <script>
                    function saveGratitude() {
                        const gratitudeContent = document.querySelector('textarea').value;
                        localStorage.setItem('gratitude', gratitudeContent);
                        alert('Gratitude saved!');
                    }
                </script>
            </div>

            <!-- Dance Break -->
            <div class="activity">
                <h3 class="suggestion">Dance Break</h3>
                <p>Put on your favorite upbeat song and dance like nobody's watching! Feel free to mix it up with different genres. Set a timer for 10 minutes, and let loose. Dance is a fantastic way to release endorphins and elevate your mood!</p>
                <button class="button2">Start Dancing</button>
            </div>

            <!-- Creative Drawing -->
            <div class="activity">
                <h3 class="suggestion">Creative Drawing</h3>
                <p>Express yourself through art! Grab some paper or use the canvas below to draw anything that makes you happy. You could doodle, sketch your favorite place, or even create a whimsical character. Don't worry about the end result; just enjoy the process!</p>
                <canvas id="drawingCanvas" width="400" height="200"></canvas>
                <button class="button3" onclick="clearCanvas()">Clear Canvas</button>
                <script>
                    const canvas = document.getElementById('drawingCanvas');
                    const ctx = canvas.getContext('2d');
                    let drawing = false;

                    // Mouse event handlers
                    canvas.addEventListener('mousedown', () => drawing = true);
                    canvas.addEventListener('mouseup', () => drawing = false);
                    canvas.addEventListener('mousemove', draw);

                    function draw(e) {
                        if (!drawing) return;
                        ctx.lineWidth = 5;
                        ctx.lineCap = 'round';
                        ctx.strokeStyle = '#457b9d'; // Soft blue

                        ctx.lineTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
                        ctx.stroke();
                        ctx.beginPath();
                        ctx.moveTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
                    }

                    function clearCanvas() {
                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                    }
                </script>
            </div>

            <!-- Baking Treats -->
            <div class="activity">
                <h3 class="suggestion">Baking Treats</h3>
                <p>Try baking your favorite cookies or cakes! The smell of fresh treats can brighten your day. Invite a friend or family member to join you for some fun. Don’t forget to share your creations with someone special or keep them all for yourself!</p>
                <button class="button4">Get Baking</button>
            </div>

            <!-- Reading a Happy Book -->
            <div class="activity">
                <h3 class="suggestion">Reading a Happy Book</h3>
                <p>Find a light-hearted book or an inspiring story that makes you smile. Create a cozy reading nook with blankets and your favorite drink. Whether it's fiction or non-fiction, immersing yourself in a good book can transport you to another world!</p>
                <button class="button3">Find a Book</button>
            </div>

            <!-- Connecting with Friends -->
            <div class="activity">
                <h3 class="suggestion">Connecting with Friends</h3>
                <p>Reach out to a friend you haven’t talked to in a while. A simple text, call, or video chat can make both of you feel more connected and happy. Share stories, laugh together, and enjoy each other's company, even if it’s virtual!</p>
                <button class="button1">Make a Call</button>
            </div>

            <!-- Exploring Nature -->
            <div class="activity">
                <h3 class="suggestion">Exploring Nature</h3>
                <p>Take a walk in your nearest park or hike a scenic trail. Bring a camera and capture the beauty around you. Observing nature can help clear your mind and bring a sense of peace and joy. Maybe even pack a picnic!</p>
                <button class="button2">Go for a Walk</button>
            </div>

            <!-- Listening to Uplifting Music -->
            <div class="activity">
                <h3 class="suggestion">Listening to Uplifting Music</h3>
                <p>Create a playlist of your favorite feel-good songs that lift your spirits. Whether it's pop, jazz, or classical, let the music wash over you. Sing along or just enjoy the rhythm—music is a powerful mood booster!</p>
                <audio controls>
                    <source src="uplifting_music.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <button class="button4">Create Playlist</button>
            </div>
        </section>

        <div class="activity" style="background-color:#d8e2dc; padding: 60px; border-radius: 30px; box-shadow: 0 4px 30px rgba(0,0,0,0.2); margin-bottom: 40px;">
            <h3 class="suggestion" style="font-size: 3em;">Explore More Happy Solutions</h3>
            <p style="font-size: 2.8em;">If you’d like to discover additional strategies and resources for maintaining a happy mood, click the button below:</p>
            <a href="happy_resources.php">
                <button class="button5" style="font-size: 2.5em; padding: 40px 60px;">Click Me for More Solutions</button>
            </a>
        </div>
    </div>

    <footer>
        <h2>Created with ❤️ for happiness.</h2>
    </footer>

</body>
</html>
