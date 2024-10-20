<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>अपने चिंतित मूड को शांत करें</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f3db; /* Light pastel yellow */
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }
        header {
            background-color: #ffb3b3; /* Pastel pink */
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
            color:  #A5A8B3; /* Soft peach */
        }
        h3 {
            font-size: 2.5em;
            color: #ff6666; /* Coral */
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
            background-color: #d1e8e2; /* Pastel aqua */
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
        .button1 { background-color: #ff7f50; } /* Light coral */
        .button2 { background-color: #ffd700; } /* Pastel yellow */
        .button3 { background-color: #ffb3e6; } /* Light blush */
        .button4 { background-color: #ffe0b2; } /* Soft lemon */
        .button5 { background-color: #ff6f61; } /* Light gray */
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
            background-color: #ffb3b3; /* Pastel pink */
            color: white;
            text-align: center;
            padding: 15px 0; /* Reduced padding for smaller footer */
            position: relative;
            bottom: 0;
            width: 100%;
            font-size: 1.4em; /* Slightly smaller text for footer */
        }
        .suggestion {
            font-size: 3.5em;
            font-weight: bold;
            color: #ff6666; /* Coral */
        }
        .activity p {
            font-size: 2.8em;
            margin: 10px 0;
            color: #4a4e69; /* Darker gray */
        }
        .poem {
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            background: #ffd1dc; /* Light pastel peach */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .poem p {
            font-size: 2.5em; /* Increased font size */
            margin: 10px 0;
            line-height: 1.4;
        }
        .poem .line1 { color: #ff7f50; font-family: 'Georgia', serif; font-weight: bold; text-align: center; }
        .poem .line2 { color: #4a4e69; font-family: 'Courier New', monospace; text-align: justify; }
        .poem .line3 { color: #5B8FA1; font-family: 'Arial Black', sans-serif; text-align: justify; }
        .poem .line4 { color: #4a4e69; font-family: 'Times New Roman', serif; text-align: justify; }
    </style>
</head>
<body>
    <header>
        <h1>अपने चिंतित मूड को शांत करें</h1>
        <nav>
            <a href="#activities">गतिविधियाँ</a>
            <a href="#resources">संसाधन</a>
            <a href="#contact">संपर्क</a>
        </nav>
    </header>

    <div class="container">
        <!-- Poem Section -->
        <div class="poem">
            <p class="line1">चिंताओं का हल</p>
            <p class="line2">जब मन में उठे बेचैनी का तूफान,<br>
            और हर रास्ता लगे जैसे हो अनजान,<br>
            तब ठहर, खुद को थोड़ी राहत दे,<br>
            हर मुश्किल के बाद, आसानियां मिलेंगी तुझे।</p>

            <p class="line3">हर कदम तेरा ले जाएगा नयी राह पर,<br>
            जो आज का डर है, कल वही बनेगा सहचर।<br>
            आत्मविश्वास से भर ले अपनी मंज़िल की थाली,<br>
            तेरे हर सपने का होगा अब साकार उजाला।</p>

            <p class="line4">चिंता के बादल चाहे जितने हों घने,<br>
            तेरे साहस से ही सब रास्ते सुलझेंगे।<br>
            तू है मजबूत, तेरी जिद है तेरी जीत,<br>
            बस बढ़ चल, हर चुनौती से जीत।</p>
        </div>

        <section id="activities">
            <h2>गतिविधियाँ जो आपकी चिंता को शांत करने में मदद करेंगी</h2>

            <!-- Mindful Breathing -->
            <div class="activity">
                <h3 class="suggestion">सचेत श्वास लेना</h3>
                <p>कुछ मिनटों के लिए अपने श्वास पर ध्यान केंद्रित करें। नाक से गहरा श्वास लें, एक पल रुकें, और फिर मुँह से धीरे-धीरे बाहर छोड़ें। इस प्रक्रिया को दोहराएँ, हर श्वास आपको शांति देगा।</p>
                <button class="button1">श्वास लें</button>
            </div>

            <!-- Gentle Stretching -->
            <div class="activity">
                <h3 class="suggestion">हल्की खींचाई</h3>
                <p>अपने शरीर से तनाव को कम करने के लिए हल्की खींचाई करें। अपने गर्दन, कंधे, और पीठ पर ध्यान केंद्रित करें। हर खींचाई तनाव को कम करने और विश्राम को बढ़ावा देने में मदद करेगी।</p>
                <button class="button2">खींचाई करें</button>
            </div>

            <!-- Nature Walk -->
            <div class="activity">
                <h3 class="suggestion">प्रकृति में टहलना</h3>
                <p>एक प्राकृतिक सेटिंग में टहलें। अपने आस-पास के दृश्य और ध्वनियों पर ध्यान दें। प्रकृति की सुंदरता आपके मन को शांत करेगी और आपके मनोदशा को ऊंचा करेगी।</p>
                <button class="button3">टहलने जाएँ</button>
            </div>

            <!-- Journaling -->
            <div class="activity">
                <h3 class="suggestion">जर्नल लेखन</h3>
                <p>अपने विचारों और भावनाओं को एक जर्नल में लिखें। यह प्रक्रिया आपको भावनाओं को संसाधित करने और स्पष्टता प्राप्त करने में मदद कर सकती है। लेखन के माध्यम से स्वयं को व्यक्त करना उपचारात्मक हो सकता है।</p>
                <textarea rows="5" placeholder="यहाँ अपने विचार लिखें..."></textarea>
                <button class="button4" onclick="saveJournaling()">जर्नल सुरक्षित करें</button>
                <script>
                    function saveJournaling() {
                        const journalContent = document.querySelector('textarea').value;
                        localStorage.setItem('journal', journalContent);
                        alert('जर्नल प्रविष्टि सुरक्षित की गई!');
                    }
                </script>
            </div>

            <!-- Listening to Calming Music -->
            <div class="activity">
                <h3 class="suggestion">शांत संगीत सुनना</h3>
                <p>अपने पसंदीदा शांत गीतों की एक प्लेलिस्ट बनाएं। संगीत आपके मूड पर प्रभाव डाल सकता है और आपको अधिक केंद्रित करने में मदद कर सकता है।</p>
                <button class="button5">प्लेलिस्ट बनाएं</button>
            </div>

            <!-- Aromatherapy -->
            <div class="activity">
                <h3 class="suggestion">अरोमाथेरपी</h3>
                <p>आरामदायक वातावरण बनाने के लिए आवश्यक तेलों या सुगंधित मोमबत्तियों का उपयोग करें। लैवेंडर और कैमोमाइल जैसे सुगंध शांति और आराम को बढ़ावा दे सकते हैं।</p>
                <button class="button1">अरोमाथेरपी आजमाएँ</button>
            </div>

            <!-- Guided Meditation -->
            <div class="activity">
                <h3 class="suggestion">मार्गदर्शक ध्यान</h3>
                <p>आपकी मदद करने के लिए एक मार्गदर्शक ध्यान सत्र का पालन करें। अपने मन को आराम और ध्यान केंद्रित करने के लिए ऐप्स या ऑनलाइन वीडियो खोजें।</p>
                <button class="button2">ध्यान शुरू करें</button>
            </div>

            <!-- Art Therapy -->
            <div class="activity">
                <h3 class="suggestion">कला चिकित्सा</h3>
                <p>कला के माध्यम से अपनी भावनाएँ व्यक्त करें। चित्र बनाएं, पेंट करें या रंग भरें ताकि चिंता को कम करने और आपकी रचनात्मकता को प्रवाहित करने में मदद मिले।</p>
                <button class="button3">सृजनात्मक बनें</button>
            </div>
        </section>

        <div class="activity" style="background-color:#d1e8e2; padding: 60px; border-radius: 30px; box-shadow: 0 4px 30px rgba(0,0,0,0.2); margin-bottom: 40px;">
            <h3 class="suggestion" style="font-size: 3em;">आधुनिक शांति के उपायों की खोज करें</h3>
            <p style="font-size: 2.8em;">यदि आप चिंता को शांत करने के लिए अतिरिक्त रणनीतियों और संसाधनों का पता लगाना चाहते हैं, तो नीचे दिए गए बटन पर क्लिक करें:</p>
            <a href="anxious2.php">
                <button class="button5" style="font-size: 2.5em; padding: 40px 60px;">अधिक उपायों के लिए क्लिक करें</button>
            </a>
        </div>
    </div>

    <footer>
        <h2>शांति और आनंद के लिए ❤️ के साथ बनाया गया।</h2>
    </footer>
</body>
</html>
