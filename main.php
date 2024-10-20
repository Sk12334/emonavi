<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box Example</title>
    <link rel="stylesheet" href="style.css"> 
    <style>
        body {
            background-color: #e6f7ff; /* Updated background color */
            font-family: Arial, sans-serif;
        }

        h2 {
            font-size: 4em; /* Makes the font bigger */
            color: #4A148C; /* Main color */
            background: linear-gradient(90deg, #FF5733, #33FF57, #3357FF); /* Color gradient */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent; /* Makes text fill transparent to show gradient */
            text-align: center;
            cursor: pointer; /* Changes cursor to pointer */
        }

        h1 {
            font-family: 'Comic Sans MS', cursive, sans-serif; /* Different font for title */
            color:black; /* Deep purple */
            text-align: center;
        }

        h1:hover {
            opacity: 0.8; /* Adds hover effect */
        }

        .box {
            text-align: center;
            margin: 20px 0;
        }

        .quote-box {
            border: 2px solid #FF5733; /* Border color */
            border-radius: 10px;
            background-color: #fff3e6; /* Light background for the quote box */
            padding: 30px; /* Increased padding */
            margin: 20px auto;
            text-align: center;
            font-size: 2.5em; /* Larger font size for the quote */
            color: #333;
            width: 80%; /* Center the quote box */
            font-family: 'Georgia', serif; /* Different font for the quote */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Add shadow for depth */
        }

        .feelings-statement {
            font-size: 1.8em; /* Larger font size for the statement */
            color: #4A148C; /* Deep purple */
            background-color: #e1bee7; /* Light purple background */
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            width: 80%; /* Center the statement */
            text-align: center;
            font-weight: bold; /* Bold text for emphasis */
        }

        .emotion-container {
            border: 2px solid #FF5733; /* Border color */
            border-radius: 10px;
            background-color: #fce4ec; /* Soft pink background */
            padding: 30px;
            margin: 20px auto;
            text-align: center;
            width: 80%; /* Center the container */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Add shadow for depth */
        }

        .emoji-container {
            margin-top: 20px;
            font-size: 3em; /* Larger emoji size */
        }

        .emoji-item {
            display: inline-block;
            text-align: center;
            margin: 10px;
        }

        .emoji-label {
            font-size: 1.2em; /* Label font size */
            color: #333; /* Label color */
            margin-top: 5px; /* Space above labels */
        }
    </style>
</head>
<body>
    
    <center>
        <hr width="47%" size="7" color=#FFD6FF align=left>
        <hr width="43%" size="7" color=#E7C6FF align=left>
        <hr width="41%" size="7" color=#C8B6FF align=left>
        <hr width="45%" size="7" color=#B9C0FF align=left>
        <hr width="42%" size="7" color=#BBCFFF align=left>
        <h1 style="font-size: 70px;">EMONAVI</h1>
    </center>
    <hr width="41%" size="7" color=#FFD6FF align=right>
    <hr width="45%" size="7" color=#E7C6FF align=right>
    <hr width="42%" size="7" color=#C8B6FF align=right>
    <hr width="43%" size="7" color=#B9C0FF align=right>
    <hr width="47%" size="7" color=#BBCFFF align=right>
   
    <center>
        <div class="box">
            <img src="https://i.pinimg.com/originals/2d/f2/de/2df2de28ba271e52eca7ce519e6fac0a.png" width="500px" height="500px">
        </div>
    </center>

    <div class="emotion-container">
        <div class="quote-box">
            "Positive vibes only" isn't a thing. Humans have a wide range of emotions, and this is what makes them human.
        </div>
    </div>
    <h1>EXPLORE BELOW TO ENJOY THE PROCESS:</h1>

    <pre>
        <h2>HII I AM LARA CLICK ON ME TO GET A MOOD CHECK</h2>
        <a href="index.php">
            <center>
                <img src="uploads/lara.jpeg" width="500px" height="800px">
            </center>
        </a> 

        <h2>नमस्ते, मैं सिया हूँ! मुझ पर क्लिक करें और अपना मूड चेक करें।</h2>
        <a href="index2.php">
            <center>
                <img src="uploads/siyaa.jpeg" width="500px" height="800px">
            </center>
        </a> 

        <h2>नमस्कार, मी रिया! आमच्यावर क्लिक करा आणि तुमचा मूड चेक करा.</h2>
        <a href="index3.php">
            <center>
                <img src="uploads/seema.jpeg" width="500px" height="800px">
            </center>
        </a> 
    </pre>

    <div class="quote-box">
        "Mental health is not a destination, but a process. It's about how you drive, not where you're going."
    </div>

    <div class="feelings-statement">
        You don't need to be positive all the time. It's perfectly okay to feel sad, angry, annoyed, frustrated, scared, and anxious. Having feelings doesn't make you a negative person; it makes you a human.
    </div>

</body>
</html>
