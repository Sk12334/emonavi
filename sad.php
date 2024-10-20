<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lift Your Mood</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e6f7f9; /* Soft light blue */
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }
        header {
            background-color: #f7c6c7; /* Light pastel pink */
            color: white;
            padding: 40px;
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 4em;
            font-weight: bold;
        }
        h2 {
            font-size: 6em;
            margin-top: 20px;
            color: #c8e0e8; /* Soft cream */
        }
        h3 {
            font-size: 2.5em;
            color: #f7c6c7; /* Coral */
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
            background-color: #fff3e3; /* Light pastel peach */
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
            font-size: 3em;
            margin: 10px 0;
            line-height: 1.5;
        }
        .line1 { color: #ff6f61; } /* Soft coral */
        .line2 { color: #f9b7a0; } /* Light pastel red */
        .line3 { color: #f3d5b5; } /* Light pastel orange */
        .line4 { color: #ffcccb; } /* Light blush */
        .line5 { color: #a2d5e0; } /* Light pastel blue */
        .line6 { color: #f7d2f3; } /* Light pastel purple */
        .line7 { color: #f0e68c; } /* Light pastel yellow */
        .line8 { color: #b2e6e0; } /* Soft mint */

        .activity {
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 40px;
            transition: transform 0.2s;
        }
        .activity1 { background-color: #ffe4e1; } /* Misty Rose */
        .activity2 { background-color: #d1e7dd; } /* Light pastel green */
        .activity3 { background-color: #fff3e3; } /* Light pastel peach */
        .activity4 { background-color: #e3f2fd; } /* Light pastel blue */
        .activity5 { background-color: #f0f4c3; } /* Light pastel yellow */
        .activity6 { background-color: #f8d7da; } /* Light pastel red */

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
        .button2 { background-color: #ffb74d; } /* Soft pastel yellow */
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
            background-color: #f7c6c7; /* Light pastel pink */
            color: white;
            text-align: center;
            padding: 15px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            font-size: 1.4em;
        }
        .suggestion {
            font-size: 3.5em;
            font-weight: bold;
            color: #ff6f61; /* Soft coral */
        }
        .activity p {
            font-size: 2.2em;
            margin: 10px 0;
            color: #5d6d7e; /* Dark pastel blue */
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
            <h3>Hope in the Shadows</h3>
            <p class="line1">When the clouds are heavy, and skies turn gray,<br></p>
            <p class="line2">Know that the darkness will not stay.<br></p>
            <p class="line3">The light you seek is just out of sight,<br></p>
            <p class="line4">But hold on tight, you'll find your fight.</p>

            <p class="line5">In every tear, there’s strength to gain,<br></p>
            <p class="line6">Through every storm, there’s peace in the rain.<br></p>
            <p class="line7">Keep moving forward, though the path seems long,<br></p>
            <p class="line8">For deep within, you’re always strong.</p>

            <p class="line1">The sun will return, the clouds will part,<br></p>
            <p class="line2">Bringing warmth and joy back to your heart.<br></p>
            <p class="line3">So trust in the journey, rise from the fall,<br></p>
            <p class="line4">In every setback, you'll stand tall.</p>
        </div>

        <section id="activities">
            <h2>ACTIVITIES FOR A SAD MOOD</h2>

            <!-- Journaling -->
            <div class="activity activity1">
                <h3 class="suggestion">Journal Your Thoughts</h3>
                <p>Write down how you're feeling. Putting your emotions on paper can provide clarity and relief.</p>
                <textarea rows="5" placeholder="Express your feelings here..."></textarea>
                <button class="button1" onclick="saveJournaling()">Save Journal</button>
                <script>
                    function saveJournaling() {
                        const journalContent = document.querySelector('textarea').value;
                        localStorage.setItem('journal', journalContent);
                        alert('Journal entry saved!');
                    }
                </script>
            </div>

            <!-- Mindful Breathing -->
            <div class="activity activity2">
                <h3 class="suggestion">Practice Mindful Breathing</h3>
                <p>Take a few minutes to focus on your breath. Inhale deeply through your nose, hold, and exhale slowly.</p>
                <button class="button2">Start Breathing Exercise</button>
            </div>

            <!-- Nature Walk -->
            <div class="activity activity3">
                <h3 class="suggestion">Take a Nature Walk</h3>
                <p>Spend some time outdoors. A change of scenery can help clear your mind and lift your spirits.</p>
                <button class="button3">Go for a Walk</button>
            </div>

            <!-- Listen to Music -->
            <div class="activity activity4">
                <h3 class="suggestion">Listen to Calming Music</h3>
                <p>Find a playlist of soothing music. Let the melodies wash over you and bring peace to your mind.</p>
                <button class="button4">Create Playlist</button>
            </div>

            <!-- Art Therapy -->
            <div class="activity activity5">
                <h3 class="suggestion">Engage in Art Therapy</h3>
                <p>Draw, paint, or color. Expressing yourself creatively can be therapeutic and calming.</p>
                <button class="button5">Start Creating</button>
            </div>

            <!-- Call a Friend -->
            <div class="activity activity6">
                <h3 class="suggestion">Reach Out to a Friend</h3>
                <p>Contact someone you trust. Sharing your feelings with a friend can provide comfort and support.</p>
                <button class="button1">Make a Call</button>
            </div>
        </section>

        <div class="activity" style="background-color:#d8e2dc; padding: 60px; border-radius: 30px; box-shadow: 0 4px 30px rgba(0,0,0,0.2); margin-bottom: 40px;">
            <h3 class="suggestion" style="font-size: 3em;">Explore More Mood-Lifting Solutions</h3>
            <p style="font-size: 2.8em;">If you’d like to discover additional strategies and resources for uplifting your mood, click the button below:</p>
            <a href="Sad_resources.php">
                <button class="button5" style="font-size: 2.5em; padding: 40px 60px;">Click Me for More Solutions</button>
            </a>
        </div>
    </div>

    <footer>
        <h2>Created with ❤️ for peace and joy.</h2>
    </footer>
</body>
</html>
