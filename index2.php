<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>मानसिक स्वास्थ्य क्विज</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            overflow: auto; /* Allow scrolling for the body */
        }

        h1 {
            color: #4CAF50;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        form {
            background-color: rgba(255, 220, 220, 0.8);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 900px;
            max-height: 80vh; /* Set a maximum height for the form */
            overflow-y: auto; /* Enable vertical scrolling */
            text-align: center;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            color: #4CAF50;
        }

        input[type="text"], select, textarea {
            width: 100%;
            padding: 15px;
            margin: 10px 0 20px 0;
            border: 2px solid #4CAF50;
            border-radius: 5px;
            font-size: 18px;
            transition: border 0.3s;
        }

        input[type="text"]:focus, select:focus, textarea:focus {
            border-color: #2E7D32;
            outline: none;
        }

        input[type="submit"] {
            background-color: #FFB3BA; 
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #FF9999; 
            transform: scale(1.05);
        }

        .question {
            margin-top: 30px;
            text-align: left;
        }

        textarea {
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>अपने मूड की जांच करें</h1>
    <form action="submit2.php" method="POST">
        <label for="username">अपना नाम दर्ज करें:</label>
        <input type="text" id="username" name="username" required><br>

        <div class="question">
            <p>1. आप अपने काम के प्रति उत्साही हैं।</p>
            <select name="q1" required>
                <option value="">चुनें</option>
                <option value="0">कभी नहीं</option>
                <option value="1">कभी-कभार</option>
                <option value="2">कभी-कभी</option>
                <option value="3">अक्सर</option>
                <option value="4">हमेशा</option>
            </select>
        </div>

        <div class="question">
            <p>2. आपको नए लोगों से मिलना पसंद है।</p>
            <select name="q2" required>
                <option value="">चुनें</option>
                <option value="0">बिल्कुल नहीं</option>
                <option value="1">कभी-कभार</option>
                <option value="2">कभी-कभी</option>
                <option value="3">अधिकतर</option>
                <option value="4">हमेशा</option>
            </select>
        </div>

        <div class="question">
            <p>3. आप रात में कितनी अच्छी नींद लेते हैं?</p>
            <select name="q3" required>
                <option value="">चुनें</option>
                <option value="0">बहुत खराब</option>
                <option value="1">खराब</option>
                <option value="2">औसत</option>
                <option value="3">अच्छा</option>
                <option value="4">बहुत अच्छा</option>
            </select>
        </div>

        <div class="question">
            <p>4. आप कितनी बार दूसरों की भावनाओं का ध्यान रखते हैं?</p>
            <select name="q4" required>
                <option value="">चुनें</option>
                <option value="0">कभी नहीं</option>
                <option value="1">कभी-कभार</option>
                <option value="2">कभी-कभी</option>
                <option value="3">अक्सर</option>
                <option value="4">हमेशा</option>
            </select>
        </div>

        <div class="question">
            <p>5. घर पर आपका व्यवहार कैसा है?</p>
            <select name="q5" required>
                <option value="">चुनें</option>
                <option value="0">बहुत नकारात्मक</option>
                <option value="1">नकारात्मक</option>
                <option value="2">तटस्थ</option>
                <option value="3">सकारात्मक</option>
                <option value="4">बहुत सकारात्मक</option>
            </select>
        </div>

        <div class="question">
            <p>6. हाल ही में आपको हंसाने वाली एक चीज़ क्या थी?</p>
            <textarea name="q6" required></textarea>
        </div>

        <div class="question">
            <p>7. एक ऐसा क्षण बताएं जब आप वास्तव में खुश थे।</p>
            <textarea name="q7" required></textarea>
        </div>

        <div class="question">
            <p>8. तनाव में रहने पर आपको आराम देने वाली गतिविधियाँ कौन सी हैं?</p>
            <textarea name="q8" required></textarea>
        </div>

        <!-- व्यक्तित्व गुणों पर अतिरिक्त प्रश्न -->
        <div class="question">
            <p>9. आप चीजों के सकारात्मक पक्ष को कितनी बार देखते हैं?</p>
            <select name="q9" required>
                <option value="">चुनें</option>
                <option value="0">कभी नहीं</option>
                <option value="1">कभी-कभार</option>
                <option value="2">कभी-कभी</option>
                <option value="3">अक्सर</option>
                <option value="4">हमेशा</option>
            </select>
        </div>

        <div class="question">
            <p>10. आप अपनी कमियों और गलतियों को स्वीकार करते हैं।</p>
            <select name="q10" required>
                <option value="">चुनें</option>
                <option value="0">कभी नहीं</option>
                <option value="1">कभी-कभार</option>
                <option value="2">कभी-कभी</option>
                <option value="3">अक्सर</option>
                <option value="4">हमेशा</option>
            </select>
        </div>

        <div class="question">
            <p>11. आप तात्कालिक निर्णय लेते हैं।</p>
            <select name="q11" required>
                <option value="">चुनें</option>
                <option value="4">कभी नहीं</option>
                <option value="3">कभी-कभार</option>
                <option value="2">कभी-कभी</option>
                <option value="1">अक्सर</option>
                <option value="0">हमेशा</option>
            </select>
        </div>

        <div class="question">
            <p>12. क्या आप लोगों की मदद केवल तब करते हैं जब आपको लगता है कि आपको कुछ वापस मिलेगा?</p>
            <select name="q12" required>
                <option value="">चुनें</option>
                <option value="4">कभी नहीं</option>
                <option value="3">कभी-कभार</option>
                <option value="2">कभी-कभी</option>
                <option value="1">अक्सर</option>
                <option value="0">हमेशा</option>
            </select>
        </div>
        
        <div class="question">
            <p>13. क्या आप रिश्तों पर पैसे को प्राथमिकता देते हैं?</p>
            <select name="q13" required>
                <option value="">चुनें</option>
                <option value="1">नहीं</option>
                <option value="0">हाँ</option>
            </select>
        </div>

        <div class="question">
            <p>14. क्या आप छोटी-छोटी बातों पर तनाव में आ जाते हैं? अपने अनुभव साझा करें।</p>
            <textarea name="q14" required></textarea>
            <select name="q14" required>
                <option value="">चुनें</option>
                <option value="1">नहीं</option>
                <option value="0">हाँ</option>
            </select>
        </div>

        <input type="submit" value="सबमिट करें">
    </form>
</body>
</html>
