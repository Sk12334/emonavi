<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>शब्द खेळ शोधा</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Stack buttons vertically */
            height: 100vh;
            background-color: #f0f8ff; /* हलका पार्श्वभूमी रंग */
            font-family: 'Arial', sans-serif;
            margin: 0; /* Remove default margin */
        }

        a {
            text-decoration: none; /* लिंकमधून आडवळणी काढा */
            color: #ffffff; /* मजकूराचा रंग */
            padding: 30px 60px; /* बटनासाठी पॅडिंग */
            border-radius: 10px; /* गोल कोन */
            transition: background-color 0.3s, transform 0.3s; /* संक्रमण प्रभाव */
            display: inline-block; /* लिंकला बटनासारखे वागवते */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* सावली प्रभाव */
            margin: 15px 0; /* समान अंतर */
            font-size: 1.8em; /* मोठा फॉन्ट आकार */
        }

        /* पेस्टल रंगांचे बटन */
        a:nth-child(1) { background-color: #ffadad; } /* हलका लाल */
        a:nth-child(2) { background-color: #ffd6a5; } /* हलका नारंगी */
        a:nth-child(3) { background-color: #fdffb6; } /* हलका पीला */
        a:nth-child(4) { background-color: #caffbf; } /* हलका हरा */
        a:nth-child(5) { background-color: #9bfbc0; } /* हलका टील */
        a:nth-child(6) { background-color: #a0c4ff; } /* हलका नीला */
        a:nth-child(7) { background-color: #b9a0ff; } /* हलका बैंगनी */
        a:nth-child(8) { background-color: #ffc3a0; } /* हलका कोरल */

        a:hover {
            filter: brightness(85%); /* होवरवर रंग गडद */
            transform: translateY(-2px); /* होवरवर थोडं वर नेणे */
        }

        h1 {
            margin: 0; /* डिफॉल्ट मार्जिन काढा */
        }

        /* मजकूर केंद्रित करा */
        .center {
            text-align: center; /* मजकूर केंद्रित करा */
        }
    </style>
</head>
<body>
    <a href="search.php" class="center">
        <h1>शब्द खेळ शोधा</h1>
    </a>
    
    <a href="track.php" class="center">
        <h1>पथ ट्रॅक खेळ</h1>
    </a>

    <a href="counseling3.php" class="center">
        <h1>सल्ला कोना</h1>
    </a>

    <a href="meditation3.php" class="center">
        <h1>ध्यान कोना</h1>
    </a>

    <a href="uplifting3.php" class="center">
        <h1>जीवनासाठी विचार</h1>
    </a>

    <a href="scribble_tool.php" class="center">
        <h1>स्क्रिबल आणि रचनात्मकता साधन</h1>
    </a>

    <a href="sad videos3.php" class="center">
        <h1>एनिमेटेड व्हिडिओ</h1>
    </a>
</body>
</html>
