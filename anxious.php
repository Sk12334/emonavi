<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Word Game</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f9fc; /* Light pastel background */
            font-family: 'Arial', sans-serif;
            margin: 0; /* Remove default margin */
        }

        .button {
            text-decoration: none; /* Remove underline from link */
            color: #ffffff; /* Text color */
            padding: 20px 50px; /* Increased padding for button */
            border-radius: 15px; /* More rounded corners */
            transition: background-color 0.3s, transform 0.3s; /* Transition effects */
            display: inline-block; /* Make the link behave like a button */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Shadow effect */
            font-size: 1.5em; /* Larger font size for buttons */
            margin: 15px 0; /* Space between buttons */
        }

        /* Different pastel colors for buttons */
        .button1 { background-color: #a0d5e6; } /* Pastel Blue */
        .button2 { background-color: #f6a1b7; } /* Pastel Pink */
        .button3 { background-color: #ffd1a1; } /* Pastel Orange */
        .button4 { background-color: #c1e1c1; } /* Pastel Green */
        .button5 { background-color: #e6b3ff; } /* Pastel Purple */
        .button6 { background-color: #fff9b1; } /* Pastel Yellow */

        .button:hover {
            opacity: 0.9; /* Slightly darken on hover */
            transform: translateY(-5px); /* Slight lift on hover */
        }

        h1 {
            font-size: 3em; /* Larger font size */
            margin: 0; /* Remove default margin */
            color: #5c8a97; /* Darker pastel color for text */
        }

        /* Center the text */
        .center {
            text-align: center; /* Center the text */
        }
    </style>
</head>
<body>

    <a href="search.php" class="button button1 center">
        <h1>SEARCH WORD GAME</h1>
    </a>
    
    <a href="track.php" class="button button2 center">
        <h1>TRACK PATH GAME</h1>
    </a>

    <a href="counseling.php" class="button button3 center">
        <h1>COUNSELLING CORNER</h1>
    </a>

    <a href="meditation.php" class="button button4 center">
        <h1>MEDITATION CORNER</h1>
    </a>

    <a href="uplifting.php" class="button button5 center">
        <h1>IDEAS FOR LIFE</h1>
    </a>

    <a href="anxious videos.php" class="button button6 center">
        <h1>ANIMATED VIDEOS</h1>
    </a>

    <a href="scribble_tool.php" class="button button1 center">
        <h1>SCRIBBLE AND CREATIVITY TOOL</h1>
    </a>

</body>
</html>
