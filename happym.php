<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>आनंदी मूड क्रियाकलाप</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1f8e9; /* हलका पेस्टल हिरवा */
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }
        header {
            background-color: #a5d6a7; /* हलका पेस्टल हिरवा */
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
            color: #388e3c; /* गहरा हिरवा */
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
            background-color: #ffe0b2; /* हलका पेस्टल नारंगी */
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
            background-color: #a5d6a7; /* हलका पेस्टल हिरवा */
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
            color: #388e3c; /* गहरा हिरवा */
        }
        .activity p {
            font-size: 2.8em;
            margin: 10px 0;
        }
        .poem {
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            background: #ffe0b2; /* हलका पेस्टल नारंगी */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            color: #333; /* गहरा फॉन्ट रंग */
        }
        .poem p {
            font-size: 2.5em; /* वाढलेला फॉन्ट आकार */
            margin: 10px 0;
        }
        .poem .line1 { font-weight: bold; }
        .poem .line2, .poem .line3, .poem .line4 { }
    </style>
</head>
<body>
    <header>
        <h1>आनंदी मूड क्रियाकलाप</h1>
        <nav>
            <a href="#activities">क्रियाकलाप</a>
            <a href="#resources">संसाधने</a>
            <a href="#contact">संपर्क</a>
        </nav>
    </header>

    <div class="container">
        <!-- कविता विभाग -->
        <div class="poem">
            <p class="line1">प्रकाशाचा मार्ग</p>
            <p class="line2">आजचा दिवस आहे आनंदाचा,<br>
            मनात तुझ्या आहे प्रकाशाचा झरा.<br>
            हसतच चाल, हर क्षण तुझा,<br>
            स्वप्नांच्या वाटेवर तूच विजेता.</p>

            <p class="line3">आभाळात रंग, जिंकू दे गगन,<br>
            प्रेमाच्या पंखांनी हो जा अचूक धन.<br>
            आशेचा दीप जप, उजळेल मार्ग,<br>
            तुझ्या हसण्यातच आहे जगाचा सर्ग.</p>

            <p class="line4">प्रत्येक क्षणात आहे सुंदरतेचं धन,<br>
            मनाची उंची घे, उधळ स्वतःचं स्वप्न.<br>
            जीवन हे गीत, नाचतच जा,<br>
            प्रकाश तुझ्यात आहे, तुझीच आहे दिशा.</p>
        </div>

        <section id="activities">
            <h2>तुमच्या आनंदासाठी मदत करणारे उपाय</h2>

            <!-- आभार जर्नलिंग -->
            <div class="activity">
                <h3 class="suggestion">आभार जर्नलिंग</h3>
                <p>प्रत्येक दिवशी काही मिनिटे काढून तीन गोष्टी लिहा ज्यामुळे तुम्ही आभारी आहात. हे एक सुर्यप्रकाशित दिवस असो, चांगला जेवण असो, किंवा एक दयाळू इशारा असो, या क्षणांना ओळखणे तुमच्या मूडला सुधारू शकते. प्रत्येक गोष्टीसाठी तुम्हाला का आनंद वाटतो ते विचार करा.</p>
                <textarea rows="5" placeholder="तुम्ही काय आभारी आहात ते लिहा..."></textarea>
                <button class="button1" onclick="saveGratitude()">आभार जतन करा</button>
                <script>
                    function saveGratitude() {
                        const gratitudeContent = document.querySelector('textarea').value;
                        localStorage.setItem('gratitude', gratitudeContent);
                        alert('आभार जतन झाले!');
                    }
                </script>
            </div>

            <!-- नृत्य ब्रेक -->
            <div class="activity">
                <h3 class="suggestion">नृत्य ब्रेक</h3>
                <p>तुमच्या आवडत्या उत्साही गाण्याला चालू करा आणि असे नृत्य करा जसे की कोणीही पाहत नाही! विविध शैलिंमध्ये मिश्रण करण्यास संकोचू नका. 10 मिनिटांच्या टायमरची सेटिंग करा आणि स्वतःला आजमवा. नृत्य हे एंडोर्फिन रिलीज करण्याचा आणि तुमच्या मूडला सुधारण्याचा एक उत्तम मार्ग आहे!</p>
                <button class="button2">नृत्य सुरू करा</button>
            </div>

            <!-- रचनात्मक चित्रकला -->
            <div class="activity">
                <h3 class="suggestion">रचनात्मक चित्रकला</h3>
                <p>कलेद्वारे स्वतःला व्यक्त करा! काही कागद घ्या किंवा खाली दिलेल्या कॅनव्हासचा वापर करून तुमचं आवडतं काहीतरी चित्रित करा. तुम्ही कोणतेही चित्र तयार करू शकता, तुमच्या आवडत्या ठिकाणाचा स्केच करू शकता, किंवा एक मनमोहक पात्र तयार करू शकता. परिणामाची काळजी न करता फक्त प्रक्रियेत आनंद घ्या!</p>
                <canvas id="drawingCanvas" width="400" height="200"></canvas>
                <button class="button3" onclick="clearCanvas()">कॅनव्हास साफ करा</button>
                <script>
                    const canvas = document.getElementById('drawingCanvas');
                    const ctx = canvas.getContext('2d');
                    let drawing = false;

                    // माउस इव्हेंट हँडलर्स
                    canvas.addEventListener('mousedown', () => drawing = true);
                    canvas.addEventListener('mouseup', () => drawing = false);
                    canvas.addEventListener('mousemove', draw);

                    function draw(e) {
                        if (!drawing) return;
                        ctx.lineWidth = 5;
                        ctx.lineCap = 'round';
                        ctx.strokeStyle = '#333';

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

            <!-- बेकिंग ट्रीट्स -->
            <div class="activity">
                <h3 class="suggestion">बेकिंग ट्रीट्स</h3>
                <p>तुमच्या आवडत्या कुकीज़ किंवा केक तयार करण्याचा प्रयत्न करा! ताजगीच्या स्वादाने दिवस उजळा. एखाद्या मित्राला किंवा कुटुंबाच्या सदस्याला आमंत्रित करा. तुमच्या निर्मितीचा आनंद घेणं विसरू नका किंवा सर्व काही स्वतःच ठेवा!</p>
                <button class="button4">बेकिंग सुरू करा</button>
            </div>

            <!-- एक खुश किताब पढ़ना -->
            <div class="activity">
                <h3 class="suggestion">एक खुश किताब वाचा</h3>
                <p>एक हलकी-फुलकी किताब किंवा प्रेरणादायक गोष्ट शोधा जी तुम्हाला हसवेल. एक चांदणी आणि तुमच्या आवडत्या पेयासह एक आरामदायक वाचन स्थान तयार करा. हे कादंबरी असो किंवा गैर-कादंबरी, एक चांगली किताब वाचणे तुम्हाला एक वेगळ्या जगात नेऊ शकते!</p>
                <button class="button3">एक किताब शोधा</button>
            </div>

            <!-- मित्रांसोबत कनेक्ट करा -->
            <div class="activity">
                <h3 class="suggestion">मित्रांशी संपर्क साधा</h3>
                <p>कोणत्याही मित्राशी संपर्क साधा ज्याच्याशी तुम्ही काही काळ संवाद साधलेला नाही. एक साधा टेक्स्ट, कॉल किंवा व्हिडिओ चॅट दोन्ही जणांना अधिक जोडलेले आणि आनंदी वाटू शकते. कथा सांगा, एकत्र हसा, आणि एकमेकांच्या सोबतचा आनंद घ्या, जरी तो आभासी असला तरी!</p>
                <button class="button1">एक कॉल करा</button>
            </div>

            <!-- निसर्गाचा शोध -->
            <div class="activity">
                <h3 class="suggestion">निसर्गाचा शोध</h3>
                <p>तुमच्या नजिकच्या पार्कमध्ये चालायला जा किंवा Scenic ट्रेलवर चढा. एक कॅमेरा घेऊन जा आणि तुमच्या आजूबाजूच्या सौंदर्याचे चित्रण करा. निसर्गाचे निरीक्षण करणे तुमच्या मनाला स्वच्छ करण्यास आणि शांती आणि आनंदाचा अनुभव घेण्यास मदत करू शकते. कदाचित एक पिकनिक देखील पॅक करा!</p>
                <button class="button2">चालायला जा</button>
            </div>

            <!-- उत्साहवर्धक संगीत ऐका -->
            <div class="activity">
                <h3 class="suggestion">उत्साहवर्धक संगीत ऐका</h3>
                <p>तुमच्या आवडत्या फील-गूड गाण्यांची एक प्लेलिस्ट तयार करा जी तुमच्या मनोबलाला वाढवेल. हे पॉप असो, जाझ असो किंवा शास्त्रीय संगीत, संगीताला तुमच्यावर चढून येऊ द्या. एकत्र गाना किंवा फक्त धूनचा आनंद घ्या—संगीत एक शक्तिशाली मूड बूस्टर आहे!</p>
                <audio controls>
                    <source src="uplifting_music.mp3" type="audio/mpeg">
                    तुमचा ब्राउजर ऑडियो घटकाचे समर्थन करत नाही.
                </audio>
                <button class="button4">प्लेलिस्ट तयार करा</button>
            </div>
        </section>

        <div class="activity" style="background-color:#b2dfdb; padding: 60px; border-radius: 30px; box-shadow: 0 4px 30px rgba(0,0,0,0.2); margin-bottom: 40px;">
            <h3 class="suggestion" style="font-size: 3em;">अधिक आनंददायक उपाय शोधा</h3>
            <p style="font-size: 2.8em;">जर तुम्ही आनंदी राहण्यासाठी अतिरिक्त रणनीती आणि संसाधने शोधत असाल, तर खालील बटनावर क्लिक करा:</p>
            <a href="happy3.php">
                <button class="button5" style="font-size: 2.5em; padding: 40px 60px;">अधिक उपायांसाठी क्लिक करा</button>
            </a>
        </div>
    </div>

    <footer>
        <h2>आनंदासाठी ❤️ ने तयार केले.</h2>
    </footer>

</body>
</html>
