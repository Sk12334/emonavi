<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stress Relief Activities</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa; /* Light pastel aqua */
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }
        header {
            background-color: #ffccbc; /* Pastel coral */
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
            color: #ffab40; /* Soft orange */
        }
        h3 {
            font-size: 2.5em;
            color: #ffe0b2; /* Light beige */
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
            background-color: #fff3e0; /* Pastel cream */
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
        .button1 { background-color: #ff7043; } /* Coral */
        .button2 { background-color: #ffb74d; } /* Pastel yellow */
        .button3 { background-color: #81d4fa; } /* Light blue */
        .button4 { background-color: #ffe0b2; } /* Soft lemon */
        .button5 { background-color: #ffcc80; } /* Light peach */
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
            background-color: #ffccbc; /* Pastel coral */
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
            color: #ffab40; /* Soft orange */
        }
        .activity p {
            font-size: 2.8em;
            margin: 10px 0;
        }
        .poem {
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            background: #fff3e0; /* Light pastel cream */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .poem p {
            font-size: 2.5em; /* Increased font size */
            margin: 10px 0;
        }
        .poem .line1 { color: #ff6f61; font-family: 'Georgia', serif; }
        .poem .line2 { color: #ffab40; font-family: 'Courier New', monospace; }
        .poem .line3 { color: #ffccbc; font-family: 'Arial Black', sans-serif; }
        .poem .line4 { color: #ffe0b2; font-family: 'Times New Roman', serif; }
    </style>
</head>
<body>
    <header>
        <h1>Stress Relief Activities</h1>
        <nav>
            <a href="#activities">Activities</a>
            <a href="#resources">Resources</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <div class="container">
        <!-- Poem Section -->
        <div class="poem">
            <p class="line1">Rise Again</p>
            <p class="line2">When the weight of the world feels too hard to bear,<br>
            And you're lost in the dark, consumed by despair,<br>
            Remember the sun, though hidden from view,<br>
            Will rise once again, and so will you.</p>

            <p class="line3">The mountains you climb, the valleys you face,<br>
            Are shaping your spirit, building your grace.<br>
            Each step that you take, each trial you meet,<br>
            Is one more victory beneath your feet.</p>

            <p class="line4">So hold to your dreams, let hope be your guide,<br>
            The strength you seek is deep inside.<br>
            Through storm and struggle, you'll stand tall,<br>
            For after the rain, you’ll conquer it all.</p>
        </div>

        <section id="activities">
            <h2>SUGGESTIONS TO RELIEVE STRESS</h2>

            <!-- Deep Breathing Exercises -->
            <div class="activity">
                <h3 class="suggestion">Deep Breathing Exercises</h3>
                <p>Take a moment to focus on your breath. Inhale deeply for a count of four, hold for four, and exhale for six. Repeat this for several minutes to calm your mind and body.</p>
                <button class="button1">Start Breathing</button>
            </div>

            <!-- Mindfulness Meditation -->
            <div class="activity">
                <h3 class="suggestion">Mindfulness Meditation</h3>
                <p>Find a quiet place to sit comfortably. Close your eyes and focus on the present moment. Acknowledge your thoughts, but let them pass without judgment. Try this for 10 minutes to center yourself.</p>
                <button class="button2">Meditate Now</button>
            </div>

            <!-- Progressive Muscle Relaxation -->
            <div class="activity">
                <h3 class="suggestion">Progressive Muscle Relaxation</h3>
                <p>Lie down comfortably and tense each muscle group for five seconds, then relax. Start from your toes and work your way up to your head. This can help release tension from your body.</p>
                <button class="button3">Try Relaxation</button>
            </div>

            <!-- Journaling Your Thoughts -->
            <div class="activity">
                <h3 class="suggestion">Journaling Your Thoughts</h3>
                <p>Take some time to write down what’s on your mind. Expressing your feelings can provide clarity and reduce stress. Use a notebook or a digital platform—whatever feels comfortable.</p>
                <textarea rows="5" placeholder="Write your thoughts..."></textarea>
                <button class="button4">Save Journal</button>
                <script>
                    function saveJournal() {
                        const journalContent = document.querySelector('textarea').value;
                        localStorage.setItem('journal', journalContent);
                        alert('Journal entry saved!');
                    }
                </script>
            </div>

            <!-- Nature Walk -->
            <div class="activity">
                <h3 class="suggestion">Nature Walk</h3>
                <p>Take a stroll in a park or natural setting. Pay attention to the sights, sounds, and smells around you. Nature has a calming effect and can help clear your mind.</p>
                <button class="button1">Go for a Walk</button>
            </div>

            <!-- Gentle Yoga -->
            <div class="activity">
                <h3 class="suggestion">Gentle Yoga</h3>
                <p>Engage in gentle yoga stretches to relieve tension. Focus on your breath as you move through each pose. Consider following a guided yoga video for relaxation.</p>
                <button class="button2">Start Yoga</button>
            </div>

            <!-- Listening to Soothing Music -->
            <div class="activity">
                <h3 class="suggestion">Listening to Soothing Music</h3>
                <p>Create a playlist of calming music that helps you unwind. Instrumental or nature sounds can provide a peaceful backdrop to your day.</p>
                <audio controls>
                    <source src="soothing_music.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <button class="button3">Create Playlist</button>
            </div>

            <!-- Aromatherapy -->
            <div class="activity">
                <h3 class="suggestion">Aromatherapy</h3>
                <p>Utilize essential oils or scented candles to create a calming atmosphere. Scents like lavender or chamomile are known to help reduce stress and anxiety.</p>
                <button class="button4">Try Aromatherapy</button>
            </div>
        </section>

        <div class="activity" style="background-color:#ffe0b2; padding: 60px; border-radius: 30px; box-shadow: 0 4px 30px rgba(0,0,0,0.2); margin-bottom: 40px;">
            <h3 class="suggestion" style="font-size: 3em;">Explore More Stress Relief Solutions</h3>
            <p style="font-size: 2.8em;">For additional strategies and resources to help with stress management, click the button below:</p>
            <a href="stressed_resources.php">
                <button class="button5" style="font-size: 2.5em; padding: 40px 60px;">Click for More Solutions</button>
            </a>
        </div>
    </div>

    <footer>
        <h2>Created with ❤️ for your peace of mind.</h2>
    </footer>

</body>
</html>
