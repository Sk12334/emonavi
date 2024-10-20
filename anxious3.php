<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>शब्द खेळ शोधा</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff; /* हलका पार्श्वभूमी रंग */
            font-family: 'Arial', sans-serif;
            margin: 0; /* डिफॉल्ट मार्जिन काढा */
        }

        .button {
            text-decoration: none; /* लिंकमधून आडवळणी काढा */
            color: #ffffff; /* मजकूराचा रंग */
            padding: 20px 50px; /* बटनासाठी पॅडिंग */
            border-radius: 15px; /* गोल कोन */
            transition: background-color 0.3s, transform 0.3s; /* संक्रमण प्रभाव */
            display: inline-block; /* लिंकला बटनासारखे वागवते */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* सावली प्रभाव */
            font-size: 1.5em; /* मोठा फॉन्ट आकार */
            margin: 15px 0; /* बटनांमध्ये अंतर */
        }

        /* विविध पेस्टल रंग बटनासाठी */
        .button1 { background-color: #a0d5e6; } /* पेस्टल निळा */
        .button2 { background-color: #f6a1b7; } /* पेस्टल गुलाबी */
        .button3 { background-color: #ffd1a1; } /* पेस्टल नारंगी */
        .button4 { background-color: #c1e1c1; } /* पेस्टल हिरवा */
        .button5 { background-color: #e6b3ff; } /* पेस्टल जांभळा */
        .button6 { background-color: #fff9b1; } /* पेस्टल पिवळा */

        .button:hover {
            opacity: 0.9; /* होवरवर थोडं अंधार */
            transform: translateY(-5px); /* होवरवर थोडं वर नेणे */
        }

        h1 {
            font-size: 3em; /* मोठा फॉन्ट आकार */
            margin: 0; /* डिफॉल्ट मार्जिन काढा */
            color: #5c8a97; /* गडद पेस्टल रंग */
        }

        /* मजकूर केंद्रित करा */
        .center {
            text-align: center; /* मजकूर केंद्रित करा */
        }
    </style>
</head>
<body>

    <a href="search.php" class="button button1 center">
        <h1>शब्द खेळ शोधा</h1>
    </a>
    
    <a href="track.php" class="button button2 center">
        <h1>पथ ट्रॅक खेळ</h1>
    </a>

    <a href="counseling3.php" class="button button3 center">
        <h1>सल्ला कोना</h1>
    </a>

    <a href="meditation3.php" class="button button4 center">
        <h1>ध्यान कोना</h1>
    </a>

    <a href="uplifting3.php" class="button button5 center">
        <h1>जीवनासाठी विचार</h1>
    </a>

    <a href="anxious videos3.php" class="button button6 center">
        <h1>एनिमेटेड व्हिडिओ</h1>
    </a>

    <a href="scribble_tool.php" class="button button1 center">
        <h1>स्क्रिबल आणि रचनात्मकता साधन</h1>
    </a>

</body>
</html>
