<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>मानसिक आरोग्य क्विझ</title>
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
    <h1>तुमचा मूड तपासा</h1>
    <form action="submit3.php" method="POST">
        <label for="username">तुमचे नाव प्रविष्ट करा:</label>
        <input type="text" id="username" name="username" required><br>

        <div class="question">
            <p>1. तुम्हाला तुमच्या कामाबद्दल आवड आहे.</p>
            <select name="q1" required>
                <option value="">चुका निवडा</option>
                <option value="0">कधीच नाही</option>
                <option value="1">कदाचितच</option>
                <option value="2">कधी कधी</option>
                <option value="3">बर्‍याचदा</option>
                <option value="4">सतत</option>
            </select>
        </div>

        <div class="question">
            <p>2. तुम्हाला नवीन लोकांना भेटायला आवडते.</p>
            <select name="q2" required>
                <option value="">चुका निवडा</option>
                <option value="0">अगदीच नाही</option>
                <option value="1">कदाचितच</option>
                <option value="2">कधी कधी</option>
                <option value="3">बहुतेकदा</option>
                <option value="4">सतत</option>
            </select>
        </div>

        <div class="question">
            <p>3. तुम्ही रात्री कसे झोपी जाता?</p>
            <select name="q3" required>
                <option value="">चुका निवडा</option>
                <option value="0">खूप खराब</option>
                <option value="1">खराब</option>
                <option value="2">सरासरी</option>
                <option value="3">चांगले</option>
                <option value="4">खूप चांगले</option>
            </select>
        </div>

        <div class="question">
            <p>4. तुम्ही किती वेळा दुसऱ्यांच्या भावनांचा विचार करता?</p>
            <select name="q4" required>
                <option value="">चुका निवडा</option>
                <option value="0">कधीच नाही</option>
                <option value="1">कदाचितच</option>
                <option value="2">कधी कधी</option>
                <option value="3">बर्‍याचदा</option>
                <option value="4">सतत</option>
            </select>
        </div>

        <div class="question">
            <p>5. तुमचे घरातले वर्तन कसे आहे?</p>
            <select name="q5" required>
                <option value="">चुका निवडा</option>
                <option value="0">खूप नकारात्मक</option>
                <option value="1">नकारात्मक</option>
                <option value="2">तटस्थ</option>
                <option value="3">सकारात्मक</option>
                <option value="4">खूप सकारात्मक</option>
            </select>
        </div>

        <div class="question">
            <p>6. अलीकडे तुम्हाला हसवणारे एक गोष्ट सांगा.</p>
            <textarea name="q6" required></textarea>
        </div>

        <div class="question">
            <p>7. तुम्हाला खरोखर आनंदी वाटलेला एक क्षण सांगा.</p>
            <textarea name="q7" required></textarea>
        </div>

        <div class="question">
            <p>8. तुम्हाला तणावात असताना आराम करण्यास मदत करणारी क्रियाकलाप कोणती?</p>
            <textarea name="q8" required></textarea>
        </div>

        <!-- व्यक्तिमत्वाच्या गुणांवर अधिक प्रश्न -->
        <div class="question">
            <p>9. तुम्ही गोष्टींचा सकारात्मक बाजू किती वेळा पाहता?</p>
            <select name="q9" required>
                <option value="">चुका निवडा</option>
                <option value="0">कधीच नाही</option>
                <option value="1">कदाचितच</option>
                <option value="2">कधी कधी</option>
                <option value="3">बर्‍याचदा</option>
                <option value="4">सतत</option>
            </select>
        </div>

        <div class="question">
            <p>10. तुम्ही तुमच्या दोष आणि चुकांना स्वीकारता.</p>
            <select name="q10" required>
                <option value="">चुका निवडा</option>
                <option value="0">कधीच नाही</option>
                <option value="1">कदाचितच</option>
                <option value="2">कधी कधी</option>
                <option value="3">बर्‍याचदा</option>
                <option value="4">सतत</option>
            </select>
        </div>

        <div class="question">
            <p>11. तुम्ही तात्कालिक निर्णय घेतात का?</p>
            <select name="q11" required>
                <option value="">चुका निवडा</option>
                <option value="4">कधीच नाही</option>
                <option value="3">कदाचितच</option>
                <option value="2">कधी कधी</option>
                <option value="1">बर्‍याचदा</option>
                <option value="0">सतत</option>
            </select>
        </div>

        <div class="question">
            <p>12. तुम्ही लोकांना फक्त त्यांना काही परत मिळवण्यासाठी मदत करता का?</p>
            <select name="q12" required>
                <option value="">चुका निवडा</option>
                <option value="4">कधीच नाही</option>
                <option value="3">कदाचितच</option>
                <option value="2">कधी कधी</option>
                <option value="1">बर्‍याचदा</option>
                <option value="0">सतत</option>
            </select>
        </div>
        <div class="question">
            <p>13. तुम्ही नातेसंबंधांवर पैसे प्राधान्य देता का?</p>
            <select name="q13" required>
                <option value="">चुका निवडा</option>
                <option value="1">नाही</option>
                <option value="0">होय</option>
            </select>
        </div>

        <div class="question">
            <p>14. तुम्ही किरकोळ गोष्टींसाठी तणावित होता का? तुमचे अनुभव सांगा.</p>
            <textarea name="q14" required></textarea>
            <select name="q14" required>
                <option value="">चुका निवडा</option>
                <option value="1">नाही</option>
                <option value="0">होय</option>
            </select>
        </div>

        <input type="submit" value="सबमिट करा">
    </form>
</body>
</html>
