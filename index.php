<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Quiz</title>
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
    <h1>Check Your Mood</h1>
    <form action="submit.php" method="POST">
        <label for="username">Enter your name:</label>
        <input type="text" id="username" name="username" required><br>

        <div class="question">
            <p>1. You are passionate about your work.</p>
            <select name="q1" required>
                <option value="">Select</option>
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Sometimes</option>
                <option value="3">Often</option>
                <option value="4">Always</option>
            </select>
        </div>

        <div class="question">
            <p>2.You like meeting new people</p>
            <select name="q2" required>
                <option value="">Select</option>
                <option value="0">Not at all</option>
                <option value="1">Rarely</option>
                <option value="2">Sometimes</option>
                <option value="3">Mostly</option>
                <option value="4">Always</option>
            </select>
        </div>

        <div class="question">
            <p>3. How well do you sleep at night?</p>
            <select name="q3" required>
                <option value="">Select</option>
                <option value="0">Very poorly</option>
                <option value="1">Poorly</option>
                <option value="2">Average</option>
                <option value="3">Well</option>
                <option value="4">Very well</option>
            </select>
        </div>

        <div class="question">
            <p>4. How often are you considerate of other peoples feelings?</p>
            <select name="q4" required>
            <option value="">Select</option>
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Sometimes</option>
                <option value="3">Often</option>
                <option value="4">Always</option>
            </select>
        </div>

        <div class="question">
            <p>5. How is your behavior at home?</p>
            <select name="q5" required>
                <option value="">Select</option>
                <option value="0">Very negative</option>
                <option value="1">Negative</option>
                <option value="2">Neutral</option>
                <option value="3">Positive</option>
                <option value="4">Very positive</option>
            </select>
        </div>

        <div class="question">
            <p>6. What is one thing that made you smile recently?</p>
            <textarea name="q6" required></textarea>
        </div>

        <div class="question">
            <p>7. Describe a moment when you felt truly happy.</p>
            <textarea name="q7" required></textarea>
        </div>

        <div class="question">
            <p>8. What activities help you relax when you feel stressed?</p>
            <textarea name="q8" required></textarea>
        </div>

        <!-- Additional Questions on Personality Traits -->
        <div class="question">
            <p>9. How often do you see the positive side of things?</p>
            <select name="q9" required>
                <option value="">Select</option>
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Sometimes</option>
                <option value="3">Often</option>
                <option value="4">Always</option>
            </select>
        </div>

        <div class="question">
            <p>10.You accept your flaws and mistakes</p>
            <select name="q10" required>
                <option value="">Select</option>
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Sometimes</option>
                <option value="3">Often</option>
                <option value="4">Always</option>
            </select>
        </div>

        <div class="question">
            <p>11.You make impulsive decisions</p>
            <select name="q11" required>
                <option value="">Select</option>
                <option value="4">Never</option>
                <option value="3">Rarely</option>
                <option value="2">Sometimes</option>
                <option value="1">Often</option>
                <option value="0">Always</option>
            </select>
        </div>

        <div class="question">
            <p>12. You help people only if you think you'd get something in return?</p>
            <select name="q12" required>
                <option value="">Select</option>
                <option value="4">Never</option>
                <option value="3">Rarely</option>
                <option value="2">Sometimes</option>
                <option value="1">Often</option>
                <option value="0">Always</option>
            </select>
        </div>
        <div class="question">
            <p>13.do you Prioritize Money over Relationships</p>
            <select name="q13" required>
                <option value="">Select</option>
                <option value="1">No</option>
                <option value="0">Yes</option>
            </select>
        </div>

        <div class="question">
            <p>14.Do you get stressed over petty things share your experiences</p>
            <textarea name="q14" required></textarea>
            <select name="q14" required>
            <option value="">Select</option>
                <option value="1">No</option>
                <option value="0">Yes</option>
        </div>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
