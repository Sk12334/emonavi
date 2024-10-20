<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Word Game</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Stack buttons vertically */
            height: 100vh;
            background-color: #f0f8ff; /* Light background color */
            font-family: 'Arial', sans-serif;
            margin: 0; /* Remove default margin */
        }

        a {
            text-decoration: none; /* Remove underline from link */
            color: #ffffff; /* Text color */
            padding: 30px 60px; /* Padding for button */
            border-radius: 10px; /* Rounded corners */
            transition: background-color 0.3s, transform 0.3s; /* Transition effects */
            display: inline-block; /* Make the link behave like a button */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Shadow effect */
            margin: 15px 0; /* Margin for spacing */
            font-size: 1.8em; /* Increase font size */
        }

        /* Pastel colors for buttons */
        a:nth-child(1) { background-color: #ffadad; } /* Light Red */
        a:nth-child(2) { background-color: #ffd6a5; } /* Light Orange */
        a:nth-child(3) { background-color: #fdffb6; } /* Light Yellow */
        a:nth-child(4) { background-color: #caffbf; } /* Light Green */
        a:nth-child(5) { background-color: #9bfbc0; } /* Light Teal */
        a:nth-child(6) { background-color: #a0c4ff; } /* Light Blue */
        a:nth-child(7) { background-color: #b9a0ff; } /* Light Purple */
        a:nth-child(8) { background-color: #ffc3a0; } /* Light Coral */

        a:hover {
            filter: brightness(85%); /* Darker on hover */
            transform: translateY(-2px); /* Slight lift on hover */
        }

        h1 {
            margin: 0; /* Remove default margin */
        }

        /* Center the text */
        .center {
            text-align: center; /* Center the text */
        }
    </style>
</head>
<body>
    <a href="search.php" class="center">
        <h1>SEARCH WORD GAME</h1>
    </a>
    
    <a href="track.php" class="center">
        <h1>TRACK PATH GAME</h1>
    </a>

    <a href="counseling.php" class="center">
        <h1>COUNSELLING CORNER</h1>
    </a>

    <a href="meditation.php" class="center">
        <h1>MEDITATION CORNER</h1>
    </a>

    <a href="uplifting.php" class="center">
        <h1>IDEAS FOR LIFE</h1>
    </a>

    <a href="scribble_tool.php" class="center">
        <h1>SCRIBBLE AND CREATIVITY TOOL</h1>
    </a>

    <a href="stress videos.php" class="center">
        <h1>ANIMATED VIDEOS</h1>
    </a>
</body>
</html>
