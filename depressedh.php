<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>मन को हल्का करें</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8; /* हल्का नीला */
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }
        header {
            background-color: #ffb6b9; /* हल्का गुलाबी */
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
            color: #b2e6e0; /* हल्का क्रीम */
        }
        h3 {
            font-size: 2.5em;
            color: #ffb6b9; /* कोरल */
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
            background-color: #fefbd8; /* हल्का पीला */
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .poem h3 {
            font-size: 3.5em;
            color: #ff6f61; /* हल्का कोरल */
            text-align: center;
        }
        .poem p {
            font-size: 3.5em;
            margin: 10px 0;
            line-height: 1.5;
            text-align: center;
        }
        .line1 { color: #ff6347; font-family: 'Georgia', serif; } /* Tomato */
        .line2 { color: #4682b4; font-family: 'Courier New', monospace; } /* Steel Blue */
        .line3 { color: #3cb371; font-family: 'Arial Black', sans-serif; } /* Medium Sea Green */
        .line4 { color: #ff69b4; font-family: 'Times New Roman', serif; } /* Hot Pink */
        .line5 { color: #ffa500; font-family: 'Verdana', sans-serif; } /* Orange */
        .line6 { color: #8a2be2; font-family: 'Trebuchet MS', sans-serif; } /* Blue Violet */

        .activity {
            background-color: #ffe4e1; /* हल्का गुलाबी */
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
        .button1 { background-color: #ff6f61; } /* हल्का कोरल */
        .button2 { background-color: #ffb74d; } /* हल्का पीला */
        .button3 { background-color: #ffcccb; } /* हल्का गुलाबी */
        .button4 { background-color: #ffe0a0; } /* हल्का नींबू */
        .button5 { background-color: #ff6f61; } /* हल्का ग्रे */
        textarea {
            width: 100%;
            font-size: 1.5em;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 10px;
        }
        footer {
            background-color: #ffb6b9; /* हल्का गुलाबी */
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
            color: #ff6f61; /* हल्का कोरल */
        }
        .activity p {
            font-size: 2.8em;
            margin: 10px 0;
            color: #457b9d; /* हल्का नीला */
        }
    </style>
</head>
<body>
    <header>
        <h1>मन को हल्का करें</h1>
        <nav>
            <a href="#activities">गतिविदियाँ</a>
            <a href="#resources">संसाधन</a>
            <a href="#contact">संपर्क</a>
        </nav>
    </header>

    <div class="container">
        <!-- Poem Section -->
        <div class="poem">
            <h3>राह का उजाला</h3>
            <p class="line1">जब दिल पे अंधेरों का साया छा जाए,<br></p>
            <p class="line2">और हर खुशी कहीं खो सी जाए,<br></p>
            <p class="line3">तो याद रख, हर रात के बाद सवेरा है,<br></p>
            <p class="line4">तेरे भीतर ही उम्मीदों का बसेरा है।</p>

            <p class="line5">ग़म के बादल चाहे घनेरे हों कितने,<br></p>
            <p class="line6">सपनों के सूरज फिर से उगते हैं जितने।</p>

            <p class="line1">दर्द में छिपी है तेरी शक्ति गहरी,<br></p>
            <p class="line2">हर ठोकर में है सफलता की लहरी।<br></p>
            <p class="line3">तू गिर कर भी उठेगा, ये तेरा इरादा,<br></p>
            <p class="line4">हर हार के बाद जीत का नया वादा।</p>

            <p class="line5">जिनकी सोच में है धीरज की रोशनी,<br></p>
            <p class="line6">वही चमकते हैं रात की भी तन्हाई में।</p>
        </div>

        <section id="activities">
            <h2>मन को हल्का करने की गतिविधियाँ</h2>

            <!-- Connecting with Loved Ones -->
            <div class="activity" style="background-color: #ffe4b5;"> <!-- Lemon Chiffon -->
                <h3 class="suggestion">प्रियजनों से संपर्क करें</h3>
                <p>एक मित्र या परिवार के सदस्य से बात करें। एक साधारण बातचीत या वीडियो कॉल आपके दिन को रोशन कर सकती है।</p>
                <button class="button1">बातचीत शुरू करें</button>
            </div>

            <!-- Creative Writing -->
            <div class="activity" style="background-color: #f5f5dc;"> <!-- Beige -->
                <h3 class="suggestion">सृजनात्मक लेखन</h3>
                <p>एक छोटी कहानी या कविता लिखें। अपनी कल्पना को बहने दें और कागज़ पर अपने भावनाओं को व्यक्त करें। लेखन एक अद्भुत भागदौड़ हो सकता है।</p>
                <textarea rows="5" placeholder="यहां अपने विचार लिखें..."></textarea>
                <button class="button2" onclick="saveJournaling()">जर्नल सहेजें</button>
                <script>
                    function saveJournaling() {
                        const journalContent = document.querySelector('textarea').value;
                        localStorage.setItem('journal', journalContent);
                        alert('जर्नल प्रविष्टि सहेजी गई!');
                    }
                </script>
            </div>

            <!-- Cooking a Favorite Meal -->
            <div class="activity" style="background-color: #e0ffff;"> <!-- Light Cyan -->
                <h3 class="suggestion">अपना पसंदीदा भोजन बनाएं</h3>
                <p>अपने पसंदीदा व्यंजन को तैयार करें। खाना बनाना चिकित्सीय और आनंददायक हो सकता है, और अंत में आपके पास एक स्वादिष्ट इनाम होगा!</p>
                <button class="button3">खाना बनाना शुरू करें</button>
            </div>

            <!-- Mindful Walking -->
            <div class="activity" style="background-color: #faf0e6;"> <!-- Linen -->
                <h3 class="suggestion">सावधान चलना</h3>
                <p>अपने पड़ोस या नजदीकी पार्क में चलें। अपने चारों ओर के वातावरण, रंगों और ध्वनियों पर ध्यान दें। प्रकृति आपको उठाने दे।</p>
                <button class="button4">चलने जाएं</button>
            </div>

            <!-- Listening to Uplifting Music -->
            <div class="activity" style="background-color: #ffe4e1;"> <!-- Misty Rose -->
                <h3 class="suggestion">उत्साहजनक संगीत सुनें</h3>
                <p>अपने पसंदीदा उत्साही गीतों की एक प्लेलिस्ट बनाएं। संगीत आपके मूड को बदलने और आपकी आत्मा को ऊर्जा देने की शक्ति रखता है।</p>
                <button class="button5">प्लेलिस्ट बनाएं</button>
            </div>

            <!-- Practicing Gratitude -->
            <div class="activity" style="background-color: #d3f3d3;"> <!-- Light Green -->
                <h3 class="suggestion">आभार का अभ्यास करें</h3>
                <p>तीन चीज़ें लिखें जिनके लिए आप आभारी हैं। अपने जीवन के सकारात्मक पहलुओं पर ध्यान केंद्रित करना आपके मनोदशा को ऊपर उठाने में मदद कर सकता है।</p>
                <button class="button1">आभार लिखें</button>
            </div>

            <!-- Exploring New Hobbies -->
            <div class="activity" style="background-color: #f0e68c;"> <!-- Khaki -->
                <h3 class="suggestion">नए शौक की खोज करें</h3>
                <p>कुछ नया सीखने का प्रयास करें, जैसे कि चित्रकला, गिटार बजाना, या बागवानी। रचनात्मकता को अपने जीवन में लाना मन को हल्का कर सकता है।</p>
                <button class="button2">शौक शुरू करें</button>
            </div>
        </section>

        <div class="activity" style="background-color:#d8e2dc; padding: 60px; border-radius: 30px; box-shadow: 0 4px 30px rgba(0,0,0,0.2); margin-bottom: 40px;">
            <h3 class="suggestion" style="font-size: 3em;">अधिक हल्के मूड-लिफ्टिंग समाधान खोजें</h3>
            <p style="font-size: 2.8em;">यदि आप अपने मूड को उठाने के लिए अतिरिक्त रणनीतियों और संसाधनों की खोज करना चाहते हैं, तो नीचे दिए गए बटन पर क्लिक करें:</p>
            <a href="depressed2.php">
                <button class="button5" style="font-size: 2.5em; padding: 40px 60px;">अधिक समाधान के लिए क्लिक करें</button>
            </a>
        </div>
    </div>

    <footer>
        <h2>शांति और खुशी के लिए ❤️ से बनाया गया।</h2>
    </footer>
</body>
</html>
