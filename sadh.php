<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>मूड को ऊँचा करें</title>
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
            background-color: #ff6b6b; /* हल्का लाल */
            color: white;
            padding: 40px;
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 4em;
            font-weight: bold;
        }
        h2 {
            font-size: 6em;
            margin-top: 20px;
            color: #ffe66d; /* हल्का पीला */
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
            background-color:white; /* हल्का गुलाबी */
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .poem h3 {
            font-size: 3.5em;
            color: #ff4d4d; /* गहरा लाल */
            text-align: center;
        }
        .poem p {
            font-size: 3em;
            margin: 10px 0;
            line-height: 1.5;
        }
        .line1 { color: #ff4d4d; } /* गहरा लाल */
        .line2 { color: #ff9f9f; } /* हल्का लाल */
        .line3 { color: #ff4d4d; } /* हल्का गुलाबी */
        .line4 { color: #ff9f9f; } /* हल्का गुलाबी */
        .line5 { color: #ff4d4d; } /* हल्का पीच */
        .line6 { color: #ff9f9f; } /* हल्का हरा */
        .line7 { color: #ff4d4d; } /* हल्का नीला */
        .line8 { color: #ff9f9f; } /* हल्का मिंट */

        .activity {
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 40px;
            transition: transform 0.2s;
        }
        .activity1 { background-color: #fff0f0; } /* हल्का गुलाबी */
        .activity2 { background-color: #d0f0c0; } /* हल्का हरा */
        .activity3 { background-color: #f0f0f0; } /* हल्का ग्रे */
        .activity4 { background-color: #e0f7fa; } /* हल्का नीला */
        .activity5 { background-color: #fff9c4; } /* हल्का पीला */
        .activity6 { background-color: #ffe0e0; } /* हल्का लाल */

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
        .button1 { background-color: #ff4d4d; } /* गहरा लाल */
        .button2 { background-color: #ffeb3b; } /* हल्का पीला */
        .button3 { background-color: #ffcccb; } /* हल्का गुलाबी */
        .button4 { background-color: #ffe0b2; } /* हल्का संतरा */
        .button5 { background-color: #81c784; } /* हल्का हरा */
        textarea {
            width: 100%;
            font-size: 1.5em;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 10px;
        }
        footer {
            background-color: #ff6b6b; /* हल्का लाल */
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
            color: #ff4d4d; /* गहरा लाल */
        }
        .activity p {
            font-size: 2.2em;
            margin: 10px 0;
            color: #5d6d7e; /* गहरा नीला */
        }
    </style>
</head>
<body>
    <header>
        <h1>मूड को ऊँचा करें</h1>
        <nav>
            <a href="#activities">गतिविधियाँ</a>
            <a href="#resources">स्रोत</a>
            <a href="#contact">संपर्क</a>
        </nav>
    </header>

    <div class="container">
        <!-- Poem Section -->
        <div class="poem">
            <h3>तूफान के पार</h3>
            <p class="line1">जब दिल में हो धुंध और आँखों में नमी,<br></p>
            <p class="line2">तो याद रख, तू ही है अपनी सबसे बड़ी खुशी।<br></p>
            <p class="line3">बिन मुश्किलों के नहीं खिलता कोई फूल,<br></p>
            <p class="line4">आंधियों में भी रख, तू अपने इरादे कूल।</p>

            <p class="line5">गिरना तो चलने का एक हिस्सा है,<br></p>
            <p class="line6">हर चोट तुझे एक नया किस्सा है।<br></p>
            <p class="line7">दर्द में भी ढूंढ, तू अपनी रोशनी,<br></p>
            <p class="line8">हर तूफान के बाद, खुलती है एक नई कहानी।</p>

            <p class="line1">तो थाम ले वक्त की धीमी चाल,<br></p>
            <p class="line2">हर रात के बाद, आता है खुशियों का साल।</p>
        </div>

        <section id="activities">
            <h2>उदास मूड के लिए गतिविधियाँ</h2>

            <!-- Journaling -->
            <div class="activity activity1">
                <h3 class="suggestion">अपने विचारों को जर्नल करें</h3>
                <p>अपने भावनाओं को लिखें। अपने विचारों को कागज़ पर उतारने से स्पष्टता और राहत मिल सकती है।</p>
                <textarea rows="5" placeholder="यहाँ अपने भावनाएँ व्यक्त करें..."></textarea>
                <button class="button1" onclick="saveJournaling()">जर्नल सहेजें</button>
                <script>
                    function saveJournaling() {
                        const journalContent = document.querySelector('textarea').value;
                        localStorage.setItem('journal', journalContent);
                        alert('जर्नल प्रविष्टि सहेजी गई!');
                    }
                </script>
            </div>

            <!-- Mindful Breathing -->
            <div class="activity activity2">
                <h3 class="suggestion">माइंडफुल ब्रीदिंग का अभ्यास करें</h3>
                <p>कुछ मिनटों के लिए अपनी सांस पर ध्यान केंद्रित करें। गहरी सांस लें, रोकें, और धीरे-धीरे छोड़ें।</p>
                <button class="button2">सांस लेने का अभ्यास शुरू करें</button>
            </div>

            <!-- Nature Walk -->
            <div class="activity activity3">
                <h3 class="suggestion">प्रकृति की सैर करें</h3>
                <p>कुछ समय बाहर बिताएँ। परिवेश बदलने से आपके मन को स्पष्टता और खुशी मिल सकती है।</p>
                <button class="button3">सैर पर जाएँ</button>
            </div>

            <!-- Listen to Music -->
            <div class="activity activity4">
                <h3 class="suggestion">सुकून देने वाले संगीत सुनें</h3>
                <p>सुखदायक संगीत की एक प्लेलिस्ट खोजें। धुनों को अपने ऊपर बहने दें और अपने मन को शांति दें।</p>
                <button class="button4">प्लेलिस्ट बनाएँ</button>
            </div>

            <!-- Art Therapy -->
            <div class="activity activity5">
                <h3 class="suggestion">कला चिकित्सा में संलग्न हों</h3>
                <p>चित्र बनाएँ, पेंट करें, या रंग भरें। अपनी रचनात्मकता को व्यक्त करना उपचारात्मक और शांति प्रदान कर सकता है।</p>
                <button class="button5">रचना करना शुरू करें</button>
            </div>

            <!-- Call a Friend -->
            <div class="activity activity6">
                <h3 class="suggestion">एक दोस्त से संपर्क करें</h3>
                <p>किसी ऐसे व्यक्ति से संपर्क करें जिस पर आप भरोसा करते हैं। अपने भावनाओं को साझा करने से समर्थन और आराम मिल सकता है।</p>
                <button class="button1">कॉल करें</button>
            </div>
        </section>

        <div class="activity" style="background-color:#d8e2dc; padding: 60px; border-radius: 30px; box-shadow: 0 4px 30px rgba(0,0,0,0.2); margin-bottom: 40px;">
            <h3 class="suggestion" style="font-size: 3em;">और भी मूड-लिफ्टिंग उपायों की खोज करें</h3>
            <p style="font-size: 2.8em;">यदि आप अपने मूड को ऊँचा करने के लिए अतिरिक्त रणनीतियों और संसाधनों की खोज करना चाहते हैं, तो नीचे क्लिक करें:</p>
            <a href="Sad2.php">
                <button class="button5" style="font-size: 2.5em; padding: 40px 60px;">अधिक उपायों के लिए क्लिक करें</button>
            </a>
        </div>
    </div>

    <footer>
        <h2>शांति और खुशी के लिए ❤️ के साथ बनाया गया।</h2>
    </footer>
</body>
</html>
