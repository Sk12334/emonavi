<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>खुश मूड गतिविधियाँ</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa; /* हल्का पेस्टल नीला */
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }
        header {
            background-color: #80deea; /* पेस्टल नीला */
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
            color: #0097a7; /* गहरा नीला */
        }
        h3 {
            font-size: 2.5em;
            color: #ffffff; /* सफेद */
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
            background-color: #ffe0b2; /* हल्का पेस्टल नारंगी */
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
        .button1 { background-color: #ff7043; } /* नरम कोरल */
        .button2 { background-color: #ffd54f; } /* हल्का पीला */
        .button3 { background-color: #ffccbc; } /* हल्का गुलाबी */
        .button4 { background-color: #fff59d; } /* नरम नींबू */
        .button5 { background-color: #d7ccc8; } /* हल्का ग्रे */
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
            background-color: #80deea; /* पेस्टल नीला */
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
            color: #0097a7; /* गहरा नीला */
        }
        .activity p {
            font-size: 2.8em;
            margin: 10px 0;
        }
        .poem {
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            background: #ffe0b2; /* हल्का पेस्टल नारंगी */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            color: teal; /* गहरा फॉन्ट रंग */
        }
        .poem p {
            font-size: 2.5em; /* बढ़ा हुआ फॉन्ट आकार */
            margin: 10px 0;
        }
        .poem .line1 { font-weight: bold; }
        .poem .line2, .poem .line3, .poem .line4 { }
    </style>
</head>
<body>
    <header>
        <h1>खुश मूड गतिविधियाँ</h1>
        <nav>
            <a href="#activities">गतिविधियाँ</a>
            <a href="#resources">संसाधन</a>
            <a href="#contact">संपर्क</a>
        </nav>
    </header>

    <div class="container">
        <!-- Poem Section -->
        <div class="poem">
            <p class="line1">उड़ान का समय</p>
            <p class="line2">खुशियों के रंग से भर ले ये पल,<br>
            आसमान में बिखरा है तेरा ही जल।<br>
            हर कदम पे लिख, तू अपनी नई कहानी,<br>
            तेरे हौसलों में छिपी है जीत की निशानी।</p>

            <p class="line3">तूफान भी तेरे आगे सिर झुकाएँगे,<br>
            तेरे सपनों के पंख आसमान छू आएंगे।<br>
            मंज़िल है पास, बस अब उड़ान भर,<br>
            हर एक चुनौती को तू प्यार से कसर।</p>

            <p class="line4">हंसी के साथ बुन ले तू उम्मीदों का जाल,<br>
            तू है चमकता सितारा, कभी न होगा हलाल।<br>
            जोश और जुनून से कर अपनी राह को रोशन,<br>
            तेरा ही है ये जहाँ, और तू है इसका गुलशन।</p>
        </div>

        <section id="activities">
            <h2>आपको खुश रखने में मदद करने वाले सुझाव</h2>

            <!-- Gratitude Journaling -->
            <div class="activity">
                <h3 class="suggestion">आभार जर्नलिंग</h3>
                <p>हर दिन कुछ मिनट निकालकर तीन चीज़ें लिखें जिनके लिए आप आभारी हैं। चाहे वह एक धूप भरा दिन हो, एक अच्छा भोजन, या एक दयालु इशारा, इन पलों को पहचानना आपके मूड को बढ़ा सकता है। सोचें कि हर आइटम आपको क्यों खुशी देता है।</p>
                <textarea rows="5" placeholder="आप किसके लिए आभारी हैं लिखें..."></textarea>
                <button class="button1" onclick="saveGratitude()">आभार सुरक्षित करें</button>
                <script>
                    function saveGratitude() {
                        const gratitudeContent = document.querySelector('textarea').value;
                        localStorage.setItem('gratitude', gratitudeContent);
                        alert('आभार सुरक्षित हो गया!');
                    }
                </script>
            </div>

            <!-- Dance Break -->
            <div class="activity">
                <h3 class="suggestion">नृत्य ब्रेक</h3>
                <p>अपने पसंदीदा उत्साही गाने को चालू करें और ऐसे नृत्य करें जैसे कोई नहीं देख रहा है! विभिन्न शैलियों के साथ मिश्रण करने में संकोच न करें। 10 मिनट के लिए टाइमर सेट करें, और खुद को आज़माएं। नृत्य एंडोर्फिन रिलीज करने और आपके मूड को बढ़ाने का एक शानदार तरीका है!</p>
                <button class="button2">नृत्य शुरू करें</button>
            </div>

            <!-- Creative Drawing -->
            <div class="activity">
                <h3 class="suggestion">रचनात्मक ड्राइंग</h3>
                <p>कला के माध्यम से खुद को व्यक्त करें! कुछ कागज लें या नीचे दिए गए कैनवास का उपयोग करके कुछ ऐसा ड्रॉ करें जो आपको खुश करता है। आप कोई भी चित्र बना सकते हैं, अपनी पसंदीदा जगह की स्केच बना सकते हैं, या एक मनमोहक पात्र बना सकते हैं। परिणाम की परवाह न करें; बस प्रक्रिया का आनंद लें!</p>
                <canvas id="drawingCanvas" width="400" height="200"></canvas>
                <button class="button3" onclick="clearCanvas()">कैनवास साफ करें</button>
                <script>
                    const canvas = document.getElementById('drawingCanvas');
                    const ctx = canvas.getContext('2d');
                    let drawing = false;

                    // माउस इवेंट हैंडलर्स
                    canvas.addEventListener('mousedown', () => drawing = true);
                    canvas.addEventListener('mouseup', () => drawing = false);
                    canvas.addEventListener('mousemove', draw);

                    function draw(e) {
                        if (!drawing) return;
                        ctx.lineWidth = 5;
                        ctx.lineCap = 'round';
                        ctx.strokeStyle = '#0097a7'; // गहरा नीला

                        ctx.lineTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
                        ctx.stroke();
                        ctx.beginPath();
                        ctx.moveTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
                    }

                    function clearCanvas() {
                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                    }
                </script>
            </div>

            <!-- Baking Treats -->
            <div class="activity">
                <h3 class="suggestion">बेकिंग ट्रीट्स</h3>
                <p>अपने पसंदीदा कुकीज़ या केक बनाने की कोशिश करें! ताजगी के स्वाद से दिन को रोशन करें। किसी दोस्त या परिवार के सदस्य को आमंत्रित करें। अपने निर्माणों को किसी खास के साथ साझा करना न भूलें या सभी खुद रख लें!</p>
                <button class="button4">बेकिंग शुरू करें</button>
            </div>

            <!-- Reading a Happy Book -->
            <div class="activity">
                <h3 class="suggestion">एक खुश किताब पढ़ना</h3>
                <p>एक हल्की-फुल्की किताब या प्रेरणादायक कहानी खोजें जो आपको मुस्कुराए। कंबल और अपने पसंदीदा पेय के साथ एक आरामदायक पढ़ने का स्थान बनाएं। चाहे वह उपन्यास हो या गैर-उपन्यास, एक अच्छी किताब में डूबना आपको एक अलग दुनिया में ले जा सकता है!</p>
                <button class="button3">एक किताब खोजें</button>
            </div>

            <!-- Connecting with Friends -->
            <div class="activity">
                <h3 class="suggestion">दोस्तों से जुड़ना</h3>
                <p>किसी दोस्त से संपर्क करें जिससे आप कुछ समय से बात नहीं कर पाए हैं। एक साधारण टेक्स्ट, कॉल या वीडियो चैट दोनों को अधिक जुड़ा हुआ और खुश महसूस करा सकता है। कहानियाँ साझा करें, साथ में हंसें, और एक-दूसरे की कंपनी का आनंद लें, भले ही यह आभासी ही क्यों न हो!</p>
                <button class="button1">एक कॉल करें</button>
            </div>

            <!-- Exploring Nature -->
            <div class="activity">
                <h3 class="suggestion">प्रकृति की खोज</h3>
                <p>अपने नजदीकी पार्क में चलें या एक Scenic ट्रेल पर चढ़ें। एक कैमरा लेकर चलें और अपने चारों ओर की सुंदरता को कैद करें। प्रकृति का अवलोकन आपके मन को साफ करने और शांति और खुशी का अनुभव करने में मदद कर सकता है। शायद एक पिकनिक भी पैक करें!</p>
                <button class="button2">चलने जाएं</button>
            </div>

            <!-- Listening to Uplifting Music -->
            <div class="activity">
                <h3 class="suggestion">उत्साहवर्धक संगीत सुनना</h3>
                <p>अपने पसंदीदा फील-गुड गानों की एक प्लेलिस्ट बनाएं जो आपके मनोबल को उठाए। चाहे वह पॉप, जैज़ या शास्त्रीय संगीत हो, संगीत को अपने ऊपर चढ़ने दें। साथ में गाएं या बस धुन का आनंद लें—संगीत एक शक्तिशाली मूड बूस्टर है!</p>
                <audio controls>
                    <source src="uplifting_music.mp3" type="audio/mpeg">
                    आपका ब्राउज़र ऑडियो तत्व का समर्थन नहीं करता।
                </audio>
                <button class="button4">प्लेलिस्ट बनाएं</button>
            </div>
        </section>

        <div class="activity" style="background-color:#b2dfdb; padding: 60px; border-radius: 30px; box-shadow: 0 4px 30px rgba(0,0,0,0.2); margin-bottom: 40px;">
            <h3 class="suggestion" style="font-size: 3em;">अधिक खुशहाल समाधान खोजें</h3>
            <p style="font-size: 2.8em;">यदि आप खुश रहने के लिए अतिरिक्त रणनीतियों और संसाधनों की खोज करना चाहते हैं, तो नीचे दिए गए बटन पर क्लिक करें:</p>
            <a href="happy2.php">
                <button class="button5" style="font-size: 2.5em; padding: 40px 60px;">अधिक समाधानों के लिए क्लिक करें</button>
            </a>
        </div>
    </div>

    <footer>
        <h2>खुशी के लिए ❤️ से बनाया गया।</h2>
    </footer>

</body>
</html>
