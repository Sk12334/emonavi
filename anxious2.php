<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>शब्द खेल खोजें</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff; /* हल्का पृष्ठभूमि रंग */
            font-family: 'Arial', sans-serif;
            margin: 0; /* डिफ़ॉल्ट मार्जिन हटाएँ */
        }

        .button {
            text-decoration: none; /* लिंक से रेखा हटाएँ */
            color: #ffffff; /* पाठ का रंग */
            padding: 20px 50px; /* बटन के लिए पैडिंग */
            border-radius: 15px; /* गोल कोने */
            transition: background-color 0.3s, transform 0.3s; /* संक्रमण प्रभाव */
            display: inline-block; /* लिंक को बटन की तरह व्यवहार करने दें */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* छाया प्रभाव */
            font-size: 1.5em; /* बड़ा फ़ॉन्ट आकार */
            margin: 15px 0; /* बटन के बीच में अंतर */
        }

        /* विभिन्न पेस्टल रंग बटन के लिए */
        .button1 { background-color: #a0d5e6; } /* पेस्टल नीला */
        .button2 { background-color: #f6a1b7; } /* पेस्टल गुलाबी */
        .button3 { background-color: #ffd1a1; } /* पेस्टल नारंगी */
        .button4 { background-color: #c1e1c1; } /* पेस्टल हरा */
        .button5 { background-color: #e6b3ff; } /* पेस्टल बैंगनी */
        .button6 { background-color: #fff9b1; } /* पेस्टल पीला */

        .button:hover {
            opacity: 0.9; /* होवर पर थोड़ा अंधेरा */
            transform: translateY(-5px); /* होवर पर थोड़ा उठाना */
        }

        h1 {
            font-size: 3em; /* बड़ा फ़ॉन्ट आकार */
            margin: 0; /* डिफ़ॉल्ट मार्जिन हटाएँ */
            color: #5c8a97; /* गहरा पेस्टल रंग */
        }

        /* पाठ को केंद्रित करें */
        .center {
            text-align: center; /* पाठ को केंद्रित करें */
        }
    </style>
</head>
<body>

    <a href="search.php" class="button button1 center">
        <h1>शब्द खेल खोजें</h1>
    </a>
    
    <a href="track.php" class="button button2 center">
        <h1>पथ ट्रैक खेल</h1>
    </a>

    <a href="counseling2.php" class="button button3 center">
        <h1>परामर्श कोना</h1>
    </a>

    <a href="meditation2.php" class="button button4 center">
        <h1>ध्यान कोना</h1>
    </a>

    <a href="uplifting2.php" class="button button5 center">
        <h1>जीवन के लिए विचार</h1>
    </a>

    <a href="anxious videos2.php" class="button button6 center">
        <h1>एनिमेटेड वीडियो</h1>
    </a>

    <a href="scribble_tool.php" class="button button1 center">
        <h1>स्क्रिबल और रचनात्मकता उपकरण</h1>
    </a>

</body>
</html>
