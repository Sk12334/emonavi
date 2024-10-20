<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>मन हलका करा</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8; /* हलका नीला */
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }
        header {
            background-color: #ffb6b9; /* हलका गुलाबी */
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
            color: #b2e6e0; /* हलका क्रीम */
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
            background-color: #fefbd8; /* हलका पीला */
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .poem h3 {
            font-size: 3.5em;
            color: #ff6f61; /* हलका कोरल */
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
            background-color: #ffe4e1; /* हलका गुलाबी */
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
            background-color: #ffb6b9; /* हलका गुलाबी */
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
            color: #ff6f61; /* हलका कोरल */
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
        <h1>मन हलका करा</h1>
        <nav>
            <a href="#activities">गतिविद्या</a>
            <a href="#resources">संसाधन</a>
            <a href="#contact">संपर्क</a>
        </nav>
    </header>

    <div class="container">
        <!-- Poem Section -->
        <div class="poem">
            <h3>उजेडाची वाट</h3>
            <p class="line1">जेव्हा काळोख मनात साठून राहील,<br></p>
            <p class="line2">आणि जगण्याचा उत्साह मंदावेल,<br></p>
            <p class="line3">तेव्हा आठव, तुझ्यातच आहे प्रकाश,<br></p>
            <p class="line4">थोडं थांब, पुन्हा मिळेल नवा श्वास.</p>

            <p class="line5">अंधारातही लपलेले असतात तारे,<br></p>
            <p class="line6">फक्त हिम्मत ठेव, तेच देतील नवे सहारे.</p>

            <p class="line1">प्रत्येक दुःखात असतो नवा आशेचा किरण,<br></p>
            <p class="line2">जगण्यासाठी हाच आहे तुझा खरा धन.<br></p>
            <p class="line3">तुझ्या आत दडलेली जिद्द उगवेल पुन्हा,<br></p>
            <p class="line4">तूच तुझ्या यशाची नवी परिभाषा ठरवशील सदा.</p>

            <p class="line5">वेदनेतूनच उमलतात नव्या स्वप्नांची फुले,<br></p>
            <p class="line6">तुझ्या मनाच्या बळावर तूच जग जिंकशील खुले.</p>
        </div>

        <section id="activities">
            <h2>मन हलका करण्याच्या गतिविद्या</h2>

            <!-- Connecting with Loved Ones -->
            <div class="activity" style="background-color: #ffe4b5;"> <!-- Lemon Chiffon -->
                <h3 class="suggestion">प्रियजनोंशी संपर्क साधा</h3>
                <p>एक मित्र किंवा कुटुंबातील सदस्याशी बोला. एक साधी बातचीत किंवा व्हिडिओ कॉल तुमच्या दिवसाला उजळू शकते.</p>
                <button class="button1">बातचीत सुरू करा</button>
            </div>

            <!-- Creative Writing -->
            <div class="activity" style="background-color: #f5f5dc;"> <!-- Beige -->
                <h3 class="suggestion">सृजनशील लेखन</h3>
                <p>एक लघुनिबंध किंवा कविता लिहा. तुमच्या कल्पनांना मुक्तपणे वाहा आणि कागदावर तुमच्या भावना व्यक्त करा. लेखन एक अद्भुत थेरपी असू शकते.</p>
                <textarea rows="5" placeholder="इथे तुमचे विचार लिहा..."></textarea>
                <button class="button2" onclick="saveJournaling()">जर्नल जतन करा</button>
                <script>
                    function saveJournaling() {
                        const journalContent = document.querySelector('textarea').value;
                        localStorage.setItem('journal', journalContent);
                        alert('जर्नल नोंद जतन केली गेली!');
                    }
                </script>
            </div>

            <!-- Cooking a Favorite Meal -->
            <div class="activity" style="background-color: #e0ffff;"> <!-- Light Cyan -->
                <h3 class="suggestion">तुमचे आवडते खाद्यपदार्थ बनवा</h3>
                <p>तुमच्या आवडत्या पदार्थांची तयारी करा. स्वयंपाक करणे आरोग्यदायी आणि आनंददायक असू शकते, आणि शेवटी तुमच्याकडे एक स्वादिष्ट पुरस्कार असेल!</p>
                <button class="button3">स्वयंपाक सुरू करा</button>
            </div>

            <!-- Mindful Walking -->
            <div class="activity" style="background-color: #faf0e6;"> <!-- Linen -->
                <h3 class="suggestion">सावध चालणे</h3>
                <p>तुमच्या शेजारी किंवा जवळच्या पार्कमध्ये चालत जा. तुमच्या चारोंधील वातावरण, रंग आणि आवाजांवर लक्ष द्या. निसर्ग तुम्हाला उंच उडवू देईल.</p>
                <button class="button4">चालायला जा</button>
            </div>

            <!-- Listening to Uplifting Music -->
            <div class="activity" style="background-color: #ffe4e1;"> <!-- Misty Rose -->
                <h3 class="suggestion">उत्साहवर्धक संगीत ऐका</h3>
                <p>तुमच्या आवडत्या उत्साही गाण्यांची प्लेलिस्ट तयार करा. संगीत तुमच्या मूडला बदलण्याची आणि तुमच्या आत्म्यावर ऊर्जा भरण्याची शक्ती ठेवते.</p>
                <button class="button5">प्लेलिस्ट तयार करा</button>
            </div>

            <!-- Practicing Gratitude -->
            <div class="activity" style="background-color: #d3f3d3;"> <!-- Light Green -->
                <h3 class="suggestion">आभार व्यक्त करा</h3>
                <p>तुम्हाला आभारी असलेल्या तीन गोष्टी लिहा. तुमच्या जीवनातील सकारात्मक बाबींवर लक्ष केंद्रित करणे तुमच्या मनोदशेला उंचावण्यास मदत करू शकते.</p>
                <button class="button1">आभार लिहा</button>
            </div>

            <!-- Exploring New Hobbies -->
            <div class="activity" style="background-color: #f0e68c;"> <!-- Khaki -->
                <h3 class="suggestion">नवीन छंद शोधा</h3>
                <p>काहीतरी नवीन शिकण्याचा प्रयत्न करा, जसे की चित्रकला, गिटार वाजवणे, किंवा बागकाम. सृजनशीलतेला तुमच्या जीवनात आणणे मनाला हलका करू शकतो.</p>
                <button class="button2">छंद सुरू करा</button>
            </div>
        </section>

        <div class="activity" style="background-color:#d8e2dc; padding: 60px; border-radius: 30px; box-shadow: 0 4px 30px rgba(0,0,0,0.2); margin-bottom: 40px;">
            <h3 class="suggestion" style="font-size: 3em;">अधिक हलके मूड-लिफ्टिंग उपाय शोधा</h3>
            <p style="font-size: 2.8em;">जर तुम्हाला तुमच्या मूडला सुधारण्यासाठी अतिरिक्त धोरणे आणि संसाधने शोधायची असतील, तर खालील बटणावर क्लिक करा:</p>
            <a href="depressed3.php">
                <button class="button5" style="font-size: 2.5em; padding: 40px 60px;">अधिक उपायांसाठी क्लिक करा</button>
            </a>
        </div>
    </div>

    <footer>
        <h2>शांतता आणि आनंदासाठी ❤️ ने तयार केले.</h2>
    </footer>
</body>
</html>
