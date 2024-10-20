<?php
$host = 'localhost';
$db = 'mental_health';
$user = 'root';
$pass = '';

// कनेक्शन बनवा
$conn = new mysqli($host, $user, $pass, $db);

// कनेक्शनची तपासणी करा
if ($conn->connect_error) {
    die("कनेक्शन अयशस्वी: " . $conn->connect_error);
}

// वापरकर्ता इनपुट मिळवा
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
$q13 = $_POST['q13'];
$q14 = $_POST['q14'];

// मूड आणि व्यक्तिमत्व स्कोअरची गणना करा
$mood_score = intval($q1) + intval($q2) + intval($q3) + intval($q4) + intval($q5)+intval($q9) + intval($q10) + intval($q11) + intval($q12)+intval($q13) + intval($q14);
$personality_score = intval($q1) + intval($q2) + intval($q3) + intval($q4) + intval($q5)+intval($q9) + intval($q10) + intval($q11) + intval($q12)+intval($q13) + intval($q14);

// तयार करा आणि बाइंड करा
$stmt = $conn->prepare("INSERT INTO user_responses (username, mood_score, personality_score) VALUES (?, ?, ?)");
$stmt->bind_param("sii", $username, $mood_score, $personality_score);

// स्टेटमेंट कार्यान्वित करा
if ($stmt->execute()) {
    // स्कोअरच्या आधारावर मूड ठरवा
    $mood = '';
    $suggestion = '';

    // मूड स्कोअरच्या आधारावर मूड मूल्यांकन
    if ($mood_score <= 15) {
        $mood = 'उदास'; 
        $suggestion = "किसी पर विश्वास करणाऱ्या व्यक्तीशी संपर्क साधण्याचा विचार करा. आपल्या भावना बोलणे महत्त्वाचे आहे.";
    } elseif ($mood_score >=15 && $mood_score<=25) {
        $mood = 'तणावात'; 
        $suggestion = "एक ब्रेक घ्या आणि काहीतरी आवडतं करा. थोडीशी चाला किंवा ध्यान मदत करू शकते.";
    } elseif ($mood_score >=26 && $mood_score<=35) {
        $mood = 'चिंतित'; 
        $suggestion = "काही श्वसन व्यायाम करण्याचा प्रयत्न करा. हे आपला मन शांत करण्याचा एक चांगला मार्ग आहे.";
    } elseif ($mood_score >=36 && $mood_score<=45) {
        $mood = 'उदास'; 
        $suggestion = "आपल्या भावनांना रचनात्मकपणे व्यक्त करण्याचा प्रयत्न करा. शारीरिक क्रियाकलाप राग कमी करण्यात मदत करू शकतात.";
    } elseif ($mood_score >=46 && $mood_score<=55) {
        $mood = 'आनंदी'; 
        $suggestion = "आपली सकारात्मकता इतरांसोबत सामायिक करा! आपणास प्रेरित करणाऱ्या क्रियाकलापांमध्ये सहभागी व्हा.";
    } else {
        $mood = 'अति उत्साही'; 
        $suggestion = "या भावनेला स्वीकारा! नवीन लक्ष्य निश्चित करण्याचा किंवा इतरांना मदत करण्याचा प्रयत्न करा.";
    }

    // व्यक्तिमत्व गुणधर्मांच्या आधारे सूचना सुधारित करा
    if ($personality_score >= 10) {
        $suggestion .= " आपण महान सकारात्मकता आणि अनुकूलता दर्शवत आहात. सामाजिक क्रियाकलापांमध्ये सहभागी राहणे सुरू ठेवा!";
    } else {
        $suggestion .= "आपल्या सामाजिक संवादावर लक्ष केंद्रित करणे उपयोगी ठरू शकते. समूह किंवा वर्गात सामील होण्याचा विचार करा.";
    }

    // वैयक्तिक प्रश्नांच्या आधारे व्यक्तिमत्व गुण ठरवा
    $traits = [];
    if ($q1 == 0) {
        $traits[] = "नवीन आवडी किंवा करिअर मार्गांचे अन्वेषण करण्याचा विचार करा जे आपल्याला प्रेरित करतात; आपणास खरंच काय प्रेरणा देते याचा विचार करा.";
    } else if ($q1 == 1) {
        $traits[] = "आपल्या कामाच्या त्या पैलूंची ओळख करण्याचा प्रयत्न करा ज्यात आपल्याला मजा येते; छोटे बदल आपली आवड पुन्हा जिवंत करण्यास मदत करू शकतात.";
    } else if ($q1 == 2) {
        $traits[] = "आपण कधीकधी उत्साह अनुभवता, जे चांगले आहे! आपल्याला प्रेरित करणाऱ्या क्षणांवर लक्ष केंद्रित करा आणि त्यांना आपल्या दैनिक दिनक्रमात समाविष्ट करण्याचे मार्ग शोधा.";
    } else if ($q1 == 3) {
        $traits[] = "आपण चांगल्या मार्गावर आहात! आपल्या आवडींनुसार प्रकल्पांचा शोध घेण्याचा विचार करा जेणेकरून आपल्या उत्साहाला चालना मिळेल आणि आपली कार्य संतोष वाढेल.";
    } else if ($q1 == 4) {
        $traits[] = "आपली उत्साहीता एक संपत्ती आहे! या उत्साहाची निगराणी करणे सुरू ठेवा, नवीन आव्हानांचा सामना करा आणि इतरांसोबत आपली प्रेरणा सामायिक करा.";
    }
    
    if ($q2 == 0) {
        $traits[] = "आपण एकटे राहणे पसंत करता हे ठीक आहे; सामाजिक संवाद अस्वस्थ का वाटतात हे विचारणे विचार करा, आणि हळूहळू दबावमुक्त वातावरणात सामील होण्याचा प्रयत्न करा.";
    } else if ($q2 == 1) {
        $traits[] = "आपण सामान्यतः सामाजिक परिस्थितींचा मागोवा घेत नाहीत, तरीही आपल्याला कधी तरी कार्यक्रमांमध्ये भाग घेण्याची चुनौती देण्याचा प्रयत्न करा.";
    } else if ($q2 == 2) {
        $traits[] = "आपण निश्चित संदर्भांमध्ये लोकांशी भेटणे आवडते. आपल्याला आवडणाऱ्या सामाजिक संधी शोधण्यावर लक्ष केंद्रित करा.";
    } else if ($q2 == 3) {
        $traits[] = "आपला संतुलन चांगला आहे! आपल्या सामाजिक बाजूला अंगीकारा आणि आपल्या आवडीनुसार क्लब किंवा समूहात सामील होण्याचा विचार करा.";
    } else if ($q2 == 4) {
        $traits[] = "नवीन लोकांशी भेटण्याची आपली उत्सुकता एक अद्भुत गुण आहे! विविध सामाजिक अनुभव आणि नेटवर्किंग संधींचा शोध घेणे सुरू ठेवा.";
    }

    if ($q3 == 0) {
        $traits[] = "आपण ताण, चिंता किंवा अस्वस्थ सवयींशी झगडत असल्याचे दिसते, जे चांगली आत्म-देखभाल आणि भावनात्मक समर्थनाची आवश्यकता दर्शवते.";
    } else if ($q3 == 1) {
        $traits[] = "आपण ताण किंवा जड विचार हाताळण्यात संघर्ष करत असल्याचे दिसते, जे चांगली झोपेसाठी विश्रांती तंत्रे आणि सहाय्यक वातावरणाची आवश्यकता दर्शवते.";
    } else if ($q3 == 2) {
        $traits[] = "आपण ताणासाठी संतुलित दृष्टिकोन ठेवता, परंतु आपल्या झोपेच्या वातावरण आणि दिनचर्येत अनुकूलता आणल्यास एकूण कल्याण सुधारू शकते.";
    } else if ($q3 == 3) {
        $traits[] = "आपण जीवनाच्या प्रति सकारात्मक दृष्टिकोन ठेवता, प्रभावी ताण व्यवस्थापन आणि चांगला भावनात्मक लवचिकता दर्शवतो.";
    } else if ($q3 == 4) {
        $traits[] = "आपण आत्म-देखभाल, अनुशासन, भावनात्मक लवचिकता आणि सकारात्मक दृष्टिकोन राखता, जे आरोग्यदायी जीवनशैलीच्या निवडी आणि मजबूत सामाजिक संबंधांचे प्रतिनिधित्व करते.";
    }

    if ($q4 == 0) {
        $traits[] = "आपल्या क्रियाकलापांच्या इतरांवर परिणामांबद्दल विचार करण्याचा विचार करा; सहानुभूती विकसित करणे मजबूत संबंध आणि अधिक सहायक वातावरणाकडे घेऊन जाऊ शकते.";
    } else if ($q4 == 1) {
        $traits[] = "सक्रियपणे ऐकण्याचा अभ्यास करण्याचा आणि इतरांना त्यांचे कसे वाटते ते विचारण्याचा विचार करा; विचारशीलतेचे छोटे इशारे आपल्या संबंधांमध्ये दूरपर्यंत जाऊ शकतात.";
    } else if ($q4 == 2) {
        $traits[] = "आपण कधीकधी विचारशीलता दर्शवता, जे चांगले आहे! आपल्या संवादात अधिक जागरूक राहण्याचा प्रयत्न करा, कारण लहान दयाळूतेचे कार्य सद्भावना वाढवू शकते.";
    } else if ($q4 == 3) {
        $traits[] = "इतरांच्या भावनांच्या प्रति जागरूक राहणे आपल्या गुणधर्मांपैकी एक आहे; आपल्याला विविध सामाजिक वातावरणात चांगले कार्य करणे आवश्यक आहे.";
    } else if ($q4 == 4) {
        $traits[] = "आपण सहानुभूती आणि विचारशीलतेच्या उच्च स्तराचे प्रदर्शन करता, जे आपणास मजबूत सामाजिक संबंधांचे आणि सहकारी भावनात्मक समर्थनाचे प्रतिनिधित्व करते.";
    }
// एक स्टाइल्ड प्रारूपात प्रतिक्रिया प्रदर्शित करा
echo "
<!DOCTYPE html>
<html lang='mr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>तुमच्या मूड परिणाम</title>
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
        <h1>धन्यवाद, $username!</h1>
        <p>तुमचा मूड स्कोअर आहे: <span class='mood-score'>$mood_score</span></p>
        <p>तुमचा वर्तमान मूड आहे: <strong>$mood</strong></p>
        <div class='suggestion'>
            <h3>सुझाव:</h3>
            <p>$suggestion</p>
        </div>
        <div class='traits'>
            <h3>तुमच्या व्यक्तिमत्वाचे गुण:</h3>
            <ul>";
foreach ($traits as $trait) {
    echo "<li>$trait</li>";
}
echo "      </ul>
        </div>
        <a href='index3.php' class='button'>पुन्हा क्विज़ घ्या</a>
    </div>
    
    <h2>काही उपायांसाठी खाली क्लिक करा:</h2>";

// प्रत्येक मूडसाठी अतिरिक्त संसाधने (URLs) परिभाषित करा
$moodResources = [
    'उदास' => 'depressedm.php',
    'तणावात' => 'stressm.php',
    'चिंतित' => 'anxiousm.php',
    'दुखी' => 'sadm.php',
    'आनंदी' => 'happym.php',
    'अति उत्साही' => 'resources/ecstatic_resources.php',
];

// प्रत्येक मूडसाठी लिंक जनरेट करा
if (array_key_exists($mood, $moodResources)) {
    $resourceLink = $moodResources[$mood];
    echo "<a href='$resourceLink' class='button'>$mood साठी उपाय पहा</a>";
} else {
    echo "<p>तुमच्या मूडसाठी कोणताही उपाय उपलब्ध नाही.</p>";
}

echo "
    </body>
</html>
";
} else {
    echo "त्रुटी: " . $stmt->error;
}

// कनेक्शन बंद करा
$stmt->close();
$conn->close();
?>

