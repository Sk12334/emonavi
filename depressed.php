<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lift Your Mood</title>
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
            background-color: #ffb6b9; /* Pastel pink */
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
            color: #b2e6e0; /* Soft cream */
        }
        h3 {
            font-size: 2.5em;
            color: #ffb6b9; /* Coral */
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
        .poem {
            background-color: #fefbd8; /* Light pastel yellow */
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .poem h3 {
            font-size: 3.5em;
            color: #ff6f61; /* Soft coral */
            text-align: center;
        }
        .poem p {
            font-size: 2em;
            margin: 10px 0;
            line-height: 1.5;
            color: #457b9d; /* Soft blue */
        }
        .activity {
            background-color: #ffe4e1; /* Light pastel pink */
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
        footer {
            background-color: #ffb6b9; /* Pastel pink */
            color: white;
            text-align: center;
            padding: 15px 0; /* Reduced padding for smaller footer */
            position: relative;
            bottom: 0;
            width: 100%;
            font-size: 1.4em; /* Slightly smaller text for footer */
        }
        .suggestion {
            font-size: 3.5em;
            font-weight: bold;
            color: #ff6f61; /* Soft coral */
        }
        .activity p {
            font-size: 2.8em;
            margin: 10px 0;
            color: #457b9d; /* Soft blue */
        }
    </style>
</head>
<body>
    <header>
        <h1>Lift Your Mood</h1>
        <nav>
            <a href="#activities">Activities</a>
            <a href="#resources">Resources</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <div class="container">
        <!-- Poem Section -->
        <div class="poem">
            <h3>Light in the Darkness</h3>
            <p>When shadows surround and hope feels far,<br>
            Remember, you are stronger than you think you are.<br>
            Though the weight of the world may press you down,<br>
            In the depths of the dark, you'll wear your crown.</p>

            <p>Each day you rise, though it feels so tough,<br>
            Is proof that your spirit is more than enough.<br>
            The light you can't see is still burning bright,<br>
            And soon it will chase away the night.</p>

            <p>So hold on tight, let time do its part,<br>
            You’ll heal, you’ll grow, with your resilient heart.<br>
            Through every tear and every fight,<br>
            You are the spark, and you’ll find your light.</p>
        </div>

        <section id="activities">
            <h2>ACTIVITIES TO LIFT YOUR MOOD</h2>

            <!-- Connecting with Loved Ones -->
            <div class="activity" style="background-color: #ffe4b5;"> <!-- Lemon Chiffon -->
                <h3 class="suggestion">Connect with Loved Ones</h3>
                <p>Reach out to a friend or family member. A simple chat or video call can brighten your day and remind you of your support system.</p>
                <button class="button1">Start Chat</button>
            </div>

            <!-- Creative Writing -->
            <div class="activity" style="background-color: #f5f5dc;"> <!-- Beige -->
                <h3 class="suggestion">Creative Writing</h3>
                <p>Write a short story or poem. Let your imagination flow and express your feelings on paper. Writing can be a wonderful escape.</p>
                <textarea rows="5" placeholder="Write your thoughts here..."></textarea>
                <button class="button2" onclick="saveJournaling()">Save Journal</button>
                <script>
                    function saveJournaling() {
                        const journalContent = document.querySelector('textarea').value;
                        localStorage.setItem('journal', journalContent);
                        alert('Journal entry saved!');
                    }
                </script>
            </div>

            <!-- Cooking a Favorite Meal -->
            <div class="activity" style="background-color: #e0ffff;"> <!-- Light Cyan -->
                <h3 class="suggestion">Cook a Favorite Meal</h3>
                <p>Prepare your favorite dish. Cooking can be therapeutic and enjoyable, plus you'll have a delicious reward at the end!</p>
                <button class="button3">Get Cooking</button>
            </div>

            <!-- Mindful Walking -->
            <div class="activity" style="background-color: #faf0e6;"> <!-- Linen -->
                <h3 class="suggestion">Mindful Walking</h3>
                <p>Take a walk in your neighborhood or a nearby park. Pay attention to your surroundings, the colors, and the sounds around you. Let nature lift your spirits.</p>
                <button class="button4">Go for a Walk</button>
            </div>

            <!-- Listening to Uplifting Music -->
            <div class="activity" style="background-color: #ffe4e1;"> <!-- Misty Rose -->
                <h3 class="suggestion">Listening to Uplifting Music</h3>
                <p>Create a playlist of your favorite upbeat songs. Music has the power to change your mood and energize your spirit.</p>
                <button class="button5">Create Playlist</button>
            </div>

            <!-- Practicing Gratitude -->
            <div class="activity" style="background-color: #d3f3d3;"> <!-- Light Green -->
                <h3 class="suggestion">Practice Gratitude</h3>
                <p>Take a moment to list three things you're grateful for. Reflecting on the positive aspects of your life can help shift your mindset.</p>
                <button class="button1">Write Gratitude</button>
            </div>

            <!-- Engaging in a Hobby -->
            <div class="activity" style="background-color: #d8e2dc;"> <!-- Light Pastel Gray -->
                <h3 class="suggestion">Engage in a Hobby</h3>
                <p>Dedicate time to a hobby you enjoy, whether it's painting, gardening, or crafting. Focusing on something you love can boost your mood.</p>
                <button class="button2">Start Your Hobby</button>
            </div>
        </section>

        <div class="activity" style="background-color:#d8e2dc; padding: 60px; border-radius: 30px; box-shadow: 0 4px 30px rgba(0,0,0,0.2); margin-bottom: 40px;">
            <h3 class="suggestion" style="font-size: 3em;">Explore More Mood-Lifting Solutions</h3>
            <p style="font-size: 2.8em;">If you’d like to discover additional strategies and resources for uplifting your mood, click the button below:</p>
            <a href="depressed_resources.php">
                <button class="button5" style="font-size: 2.5em; padding: 40px 60px;">Click Me for More Solutions</button>
            </a>
        </div>
    </div>

    <footer>
        <h2>Created with ❤️ for peace and joy.</h2>
    </footer>
</body>
</html>
