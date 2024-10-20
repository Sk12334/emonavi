<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>मानसिक आरोग्य प्रश्नावली</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; /* Light cyan background */
            color: #1b5e20; /* Dark green text */
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        h1 {
            color: #d32f2f; /* Red color for the heading */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            font-size: 50px; /* Increased font size */
        }

        form {
            background-color: rgba(255, 255, 255, 0.9); /* White background with slight transparency */
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            width: 400px;
            text-align: center;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            color: #388e3c; /* Green color for labels */
            font-size: 20px; /* Increased font size */
        }

        input[type="text"], select {
            width: 100%;
            padding: 15px;
            margin: 10px 0 20px 0;
            border: 2px solid #1976d2; /* Blue border */
            border-radius: 5px;
            font-size: 18px; /* Increased font size */
            transition: border 0.3s;
        }

        input[type="text"]:focus, select:focus {
            border-color: #0d47a1; /* Darker blue on focus */
            outline: none;
        }

        input[type="submit"] {
            background-color: #ffb300; /* Yellow background */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #ffa000; /* Darker yellow on hover */
            transform: scale(1.05);
        }

        .question {
            margin-top: 30px;
            font-size: 18px; /* Increased font size */
            color: #424242; /* Dark grey for questions */
        }
    </style>
</head>
<body>
    <h1>आपल्या भावना तपासा</h1>
    <form action="submit3.php" method="POST">
        <label for="username">आपले नाव प्रविष्ट करा:</label>
        <input type="text" id="username" name="username" required><br>

        <div class="question">
            <p>1. तुम्हाला दिवसभर किती वेळा ऊर्जा जाणवते?</p>
            <select name="q1" required>
                <option value="">चुनवा</option>
                <option value="0">कधीच नाही</option>
                <option value="1">कधी कधी</option>
                <option value="2">कधी कधी</option>
                <option value="3">अनेक वेळा</option>
                <option value="4">सर्व वेळ</option>
            </select>
        </div>

        <div class="question">
            <p>2. तुम्हाला तुम्ही आधी केलेल्या क्रियाकलापांमध्ये मजा येते का?</p>
            <select name="q2" required>
                <option value="">चुनवा</option>
                <option value="0">कधीच नाही</option>
                <option value="1">थोडी</option>
                <option value="2">कधी कधी</option>
                <option value="3">अनेक वेळा</option>
                <option value="4">बिलकुल</option>
            </select>
        </div>

        <div class="question">
            <p>3. तुम्ही रात्री किती चांगली झोप घेत आहात?</p>
            <select name="q3" required>
                <option value="">चुनवा</option>
                <option value="0">खूपच खराब</option>
                <option value="1">खराब</option>
                <option value="2">सरासरी</option>
                <option value="3">चांगली</option>
                <option value="4">खूप चांगली</option>
            </select>
        </div>

        <div class="question">
            <p>4. तुमचे काम/शाळा/कॉलेजमध्ये वर्तन कसे आहे?</p>
            <select name="q4" required>
                <option value="">चुनवा</option>
                <option value="0">खूप नकारात्मक</option>
                <option value="1">नकारात्मक</option>
                <option value="2">तटस्थ</option>
                <option value="3">सकारात्मक</option>
                <option value="4">खूप सकारात्मक</option>
            </select>
        </div>

        <div class="question">
            <p>5. घरच्या वर्तनाबद्दल काय सांगता?</p>
            <select name="q5" required>
                <option value="">चुनवा</option>
                <option value="0">खूप नकारात्मक</option>
                <option value="1">नकारात्मक</option>
                <option value="2">तटस्थ</option>
                <option value="3">सकारात्मक</option>
                <option value="4">खूप सकारात्मक</option>
            </select>
        </div>

        <input type="submit" value="सामील करा">
    </form>
</body>
</html>
