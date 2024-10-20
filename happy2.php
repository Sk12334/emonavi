<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>शब्द खेल खोजें</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Stack buttons vertically */
            height: 100vh;
            background-color: #f0f8ff; /* हल्का पृष्ठभूमि रंग */
            font-family: 'Arial', sans-serif;
            margin: 0; /* Remove default margin */
        }

        a {
            text-decoration: none; /* लिंक से रेखा हटाएँ */
            color: #ffffff; /* पाठ का रंग */
            padding: 30px 60px; /* बटन के लिए पैडिंग */
            border-radius: 10px; /* गोल कोने */
            transition: background-color 0.3s, transform 0.3s; /* संक्रमण प्रभाव */
            display: inline-block; /* लिंक को बटन की तरह व्यवहार करने दें */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* छाया प्रभाव */
            margin: 15px 0; /* बटन के लिए समान अंतर */
            font-size: 1.8em; /* बड़ा फ़ॉन्ट आकार */
        }

        /* पेस्टल रंगों के लिए बटन */
        a:nth-child(1) { background-color: #ffadad; } /* हल्का लाल */
        a:nth-child(2) { background-color: #ffd6a5; } /* हल्का नारंगी */
        a:nth-child(3) { background-color: #fdffb6; } /* हल्का पीला */
        a:nth-child(4) { background-color: #caffbf; } /* हल्का हरा */
        a:nth-child(5) { background-color: #9bfbc0; } /* हल्का टील */
        a:nth-child(6) { background-color: #a0c4ff; } /* हल्का नीला */
        a:nth-child(7) { background-color: #b9a0ff; } /* हल्का बैंगनी */
        a:nth-child(8) { background-color: #ffc3a0; } /* हल्का कोरल */

        a:hover {
            filter: brightness(85%); /* होवर पर रंग गहरा */
            transform: translateY(-2px); /* होवर पर थोड़ा उठाना */
        }

        h1 {
            margin: 0; /* डिफ़ॉल्ट मार्जिन हटाएँ */
        }

        /* पाठ को केंद्रित करें */
        .center {
            text-align: center; /* पाठ को केंद्रित करें */
        }
    </style>
</head>
<body>
    <a href="search.php" class="center">
        <h1>शब्द खेल खोजें</h1>
    </a>
    
    <a href="track.php" class="center">
        <h1>पथ ट्रैक खेल</h1>
    </a>

    <a href="counseling2.php" class="center">
        <h1>परामर्श कोना</h1>
    </a>

    <a href="meditation2.php" class="center">
        <h1>ध्यान कोना</h1>
    </a>

    <a href="uplifting2.php" class="center">
        <h1>जीवन के लिए विचार</h1>
    </a>

    <a href="scribble_tool.php" class="center">
        <h1>स्क्रिबल और रचनात्मकता उपकरण</h1>
    </a>

    <a href="happy videos2.php" class="center">
        <h1>एनिमेटेड वीडियो</h1>
    </a>
</body>
</html>
