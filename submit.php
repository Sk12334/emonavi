<?php
$host = 'localhost';
$db = 'mental_health';
$user = 'root';
$pass = '';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input
$username = $_POST['username'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13']; // Added to capture question 13
$q14 = $_POST['q14']; // Added to capture question 14

// Calculate mood and personality scores
$mood_score = intval($q1) + intval($q2) + intval($q3) + intval($q4) + intval($q5)+ intval($q9) + intval($q10) + intval($q11) + intval($q12)+intval($q13) + intval($q14);
$personality_score =intval($q1) + intval($q2) + intval($q3) + intval($q4) + intval($q5)+intval($q9) + intval($q10) + intval($q11) + intval($q12)+intval($q13) + intval($q14);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO user_responses (username, mood_score, personality_score) VALUES (?, ?, ?)");
$stmt->bind_param("sii", $username, $mood_score, $personality_score);

// Execute statement
if ($stmt->execute()) {
    // Determine mood based on score
    $mood = '';
    $suggestion = '';

    // Mood evaluation based on mood score
    if ($mood_score <= 15) {
        $mood = 'Depressed'; 
        $suggestion = "Consider reaching out to someone you trust. It's important to talk about how you feel.";
    } elseif ($mood_score >=16 && $mood_score<=25) {
        $mood = 'Stressed'; 
        $suggestion = "Take a break and do something you enjoy. A short walk or meditation can help.";
    } elseif ($mood_score >=26 && $mood_score<=35) {
        $mood = 'Anxious'; 
        $suggestion = "Practice some breathing exercises. It's a good way to calm your mind.";
    } elseif ($mood_score >=36 && $mood_score<=45) {
        $mood = 'Sad'; 
        $suggestion = "Try to express your feelings constructively. Physical activity can help relieve anger.";
    } elseif ($mood_score >=46 && $mood_score<=55) {
        $mood = 'Happy'; 
        $suggestion = "Share your positivity with others! Engage in activities that uplift you.";
    } else {
        $mood = 'Ecstatic'; 
        $suggestion = "Embrace this feeling! Try setting new goals or helping others.";
    }

    // Modify suggestions based on personality traits
    if ($personality_score >= 10) {
        $suggestion .= " You're showing great positivity and adaptability. Keep engaging in social activities!";
    } else {
        $suggestion .= " It might help to focus on social interactions. Consider joining a group or class.";
    }

    // Determine personality traits based on individual questions
    $traits = [];

    // Question 1
    if ($q1 == 0) {
        $traits[] = "Consider exploring new interests or career paths that excite you.";
    } elseif ($q1 == 1) {
        $traits[] = "Try to identify aspects of your work that you enjoy.";
    } elseif ($q1 == 2) {
        $traits[] = "You experience passion occasionally; focus on the moments that inspire you.";
    } elseif ($q1 == 3) {
        $traits[] = "You’re on a good path! Consider seeking out projects that align with your interests.";
    } elseif ($q1 == 4) {
        $traits[] = "Your enthusiasm is an asset! Continue to nurture this passion.";
    }
    
    // Question 2
    if ($q2 == 0) {
        $traits[] = "It’s okay to prefer solitude; consider engaging in low-pressure environments.";
    } elseif ($q2 == 1) {
        $traits[] = "Try to challenge yourself occasionally by attending events or gatherings.";
    } elseif ($q2 == 2) {
        $traits[] = "You enjoy meeting people in certain contexts; seek social opportunities that align with your interests.";
    } elseif ($q2 == 3) {
        $traits[] = "You have a good balance! Consider joining clubs that align with your passions.";
    } elseif ($q2 == 4) {
        $traits[] = "Your enthusiasm for meeting new people is fantastic!";
    }

    // Question 3
    if ($q3 == 0) {
        $traits[] = "Consider establishing a calming bedtime routine.";
    } elseif ($q3 == 1) {
        $traits[] = "Explore relaxation techniques for better sleep quality.";
    } elseif ($q3 == 2) {
        $traits[] = "Establish a consistent bedtime routine to improve sleep quality.";
    } elseif ($q3 == 3) {
        $traits[] = "Maintain your healthy sleep habits to enjoy restful nights.";
    } elseif ($q3 == 4) {
        $traits[] = "You demonstrate commitment to healthy lifestyle choices.";
    }

    // Question 4
    if ($q4 == 0) {
        $traits[] = "Reflect on the impact of your actions on others.";
    } elseif ($q4 == 1) {
        $traits[] = "Practice active listening and ask others how they feel.";
    } elseif ($q4 == 2) {
        $traits[] = "Strive to be more mindful in your interactions.";
    } elseif ($q4 == 3) {
        $traits[] = "Keep nurturing your awareness of others' feelings.";
    } elseif ($q4 == 4) {
        $traits[] = "Your strong consideration for others makes you a valued friend!";
    }

    // Question 5 - Add relevant traits if needed

    // Question 9
    if ($q9 == 0) {
        $traits[] = "Consider practicing gratitude exercises.";
    } elseif ($q9 == 1) {
        $traits[] = "Identify small wins each day; journaling can help.";
    } elseif ($q9 == 2) {
        $traits[] = "Challenge negative thoughts when they arise.";
    } elseif ($q9 == 3) {
        $traits[] = "Continue nurturing your positive mindset.";
    } elseif ($q9 == 4) {
        $traits[] = "Your ability to consistently see the positive is valuable!";
    }

    // Question 10
    if ($q10 == 0) {
        $traits[] = "Reflect on the benefits of self-acceptance.";
    } elseif ($q10 == 1) {
        $traits[] = "Practice self-compassion; learning from mistakes is important.";
    } elseif ($q10 == 2) {
        $traits[] = "Embrace your flaws more regularly.";
    } elseif ($q10 == 3) {
        $traits[] = "Encourage others to view mistakes as growth opportunities.";
    } elseif ($q10 == 4) {
        $traits[] = "Use your strong acceptance to inspire authenticity.";
    }

    // Question 11
    if ($q11 == 4) {
        $traits[] = "Your ability to think things through is commendable.";
    } elseif ($q11 == 3) {
        $traits[] = "Consider allowing spontaneity occasionally.";
    } elseif ($q11 == 2) {
        $traits[] = "Benefit from pausing before making decisions.";
    } elseif ($q11 == 1) {
        $traits[] = "Evaluate the consequences of your decisions.";
    } elseif ($q11 == 0) {
        $traits[] = "Consider developing strategies to assess risks.";
    }

    // Question 12
    if ($q12 == 4) {
        $traits[] = "Your selflessness is admirable!";
    } elseif ($q12 == 3) {
        $traits[] = "Balance generosity with your own needs.";
    } elseif ($q12 == 2) {
        $traits[] = "Reflect on pure acts of kindness.";
    } elseif ($q12 == 1) {
        $traits[] = "Consider the value of helping others without expectations.";
    } elseif ($q12 == 0) {
        $traits[] = "Reflect on the value of helping others genuinely.";
    }

    // Question 13
    if ($q13 == 1) {
        $traits[] = "Nurturing connections can lead to a more fulfilling life.";
    } else {
        $traits[] = "Consider how prioritizing relationships can enrich your life.";
    }

    // Question 14
    if ($q14 == 1) {
        $traits[] = "Your ability to remain calm in stress is a valuable strength!";
    } else {
        $traits[] = "Explore techniques to help manage stress; you're on the path to balance.";
    }

    // Display the response in a styled format
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Your Mood Results</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                color: #333;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                height: 100vh;
                padding: 20px;
            }
            .result-container {
                background-color: rgba(255, 239, 204, 0.9);
                border-radius: 15px;
                padding: 40px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                width: 400px;
                text-align: center;
                margin-bottom: 20px;
            }
            h1 {
                color: #FF6F61; 
                margin-bottom: 20px;
            }
            p {
                font-size: 18px;
                margin: 10px 0;
            }
            .mood-score {
                font-size: 24px;
                font-weight: bold;
                color: #FFABAB; 
                margin: 20px 0;
            }
            .suggestion {
                background-color: #E0F7FA; 
                border: 2px solid #4DB6AC; 
                padding: 10px;
                margin-top: 20px;
                border-radius: 5px;
                text-align: left;
            }
            .traits {
                margin-top: 20px;
                text-align: left;
            }
            .button {
                display: inline-block;
                background-color: #FFB3BA; 
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 5px;
                text-decoration: none;
                margin-top: 20px;
                transition: background-color 0.3s;
            }
            .button:hover {
                background-color: #FF9999; 
            }
        </style>
    </head>
    <body>
        <div class='result-container'>
            <h1>Thank You, $username!</h1>
            <p>Your mood score is: <span class='mood-score'>$mood_score</span></p>
            <p>Your current mood is: <strong>$mood</strong></p>
            <div class='suggestion'>
                <h3>Suggestions:</h3>
                <p>$suggestion</p>
            </div>
            <div class='traits'>
                <h3>Your Personality Traits:</h3>
                <ul>";
    foreach ($traits as $trait) {
        echo "<li>$trait</li>";
    }
    echo "      </ul>
            </div>
            <a href='index.php' class='button'>Take the Quiz Again</a>
        </div>
        
        <h2>Click Below for Some Solutions:</h2>";

    // Define additional resources (URLs) for each mood
    $moodResources = [
        'Depressed' => 'depressed.php',
        'Stressed' => 'stress.php',
        'Anxious' => 'anxious1.php',
        'Sad' => 'sad.php',
        'Happy' => 'happy.php',
        'Ecstatic' => 'resources/ecstatic_resources.php',
    ];

    // Generate links for each mood
    if (array_key_exists($mood, $moodResources)) {
        $resourceLink = $moodResources[$mood];
        echo "<a href='$resourceLink' class='button'>View Solutions for $mood</a>";
    } else {
        echo "<p>No solutions available for your mood.</p>";
    }

    echo "
        </body>
    </html>
    ";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
