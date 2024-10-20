<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>काउंसलिंग कोना</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fce4ec; /* हल्का गुलाबी */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .counseling-box {
            background-color: #ffffff; /* सफेद पृष्ठभूमि */
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            padding: 40px; /* बढ़ा हुआ पैडिंग */
            width: 600px; /* बढ़ी हुई चौड़ाई */
            text-align: center;
            max-width: 90%; /* उत्तरदायी अधिकतम चौड़ाई */
        }
        h1 {
            font-size: 32px; /* बढ़ा हुआ फॉन्ट आकार */
            color: #4A148C; /* गहरा बैंगनी */
            margin-bottom: 20px;
        }
        p {
            font-size: 24px; /* बढ़ा हुआ फॉन्ट आकार */
            color: #555; /* गहरा ग्रे */
            margin-bottom: 15px;
        }
        textarea {
            width: 100%;
            height: 120px; /* बढ़ी हुई ऊँचाई */
            border-radius: 5px;
            padding: 15px;
            border: 2px solid #4A148C;
            margin-bottom: 20px;
            resize: none;
            font-size: 20px; /* बढ़ा हुआ फॉन्ट आकार */
            transition: border 0.3s;
        }
        textarea:focus {
            border-color: #9C27B0; /* हल्का बैंगनी */
            outline: none;
        }
        button {
            width: 100%;
            padding: 15px;
            background-color: #4A148C; /* गहरा बैंगनी */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 22px; /* बढ़ा हुआ फॉन्ट आकार */
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #6A1B9A; /* हल्का बैंगनी */
        }
        .response {
            margin-top: 20px;
            padding: 15px; /* बढ़ा हुआ पैडिंग */
            background-color: #e1bee7; /* हल्का बैंगनी */
            border-radius: 5px;
            color: #333;
            font-size: 20px; /* बढ़ा हुआ फॉन्ट आकार */
            text-align: left;
        }
    </style>
</head>
<body>

<div class="counseling-box">
    <h1>उत्साहवर्धक विचारों के लिए कोना</h1>
    <p>अपनी समस्या मुझसे साझा करें:</p>
    <form method="POST" action="">
        <textarea name="user_message" placeholder="यहाँ अपना संदेश टाइप करें..." required></textarea>
        <button type="button" class="voice-btn" onclick="startVoiceRecognition()">बोलना </button>
        <button type="submit">भेजें</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userMessage = $_POST['user_message'];
        runModel($userMessage);
    }

    function runModel($message) {
        $apiKey = '100b6eac43c1d209592993093a5f5c700aed182937e7e42243b6bb8752e8a98a'; // यहाँ अपना API कुंजी डालें
        $url = 'https://models.aixplain.com/api/v1/execute/640b517694bf816d35a59125';

        $data = [
            'data' => [
                ['role' => 'user', 'content' => $message],
            ],
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/json\r\n" .
                             "x-api-key: $apiKey\r\n",
                'method'  => 'POST',
                'content' => json_encode($data),
            ],
        ];

        $context  = stream_context_create($options);
        $result = @file_get_contents($url, false, $context);

        if ($result === FALSE) {
            $error = error_get_last();
            echo "<div class='response'>मॉडल शुरू करने में त्रुटि: " . $error['message'] . "</div>";
            return;
        }

        $response = json_decode($result, true);
        if (isset($response['error'])) {
            echo "<div class='response'>API त्रुटि: " . $response['error']['message'] . "</div>";
            return;
        }

        $urlToPoll = $response['data'];
        echo "<div class='response'></div>";

        while (true) {
            sleep(5); // फिर से पोलिंग से पहले 5 सेकंड रुकें

            $statusOptions = [
                'http' => [
                    'header'  => "Content-type: application/json\r\n" .
                                 "x-api-key: $apiKey\r\n",
                    'method'  => 'GET',
                ],
            ];

            $statusContext = stream_context_create($statusOptions);
            $statusResult = @file_get_contents($urlToPoll, false, $statusContext);

            if ($statusResult === FALSE) {
                $error = error_get_last();
                echo "<div class='response'>मॉडल स्थिति को पोलिंग करने में त्रुटि: " . $error['message'] . "</div>";
                break;
            }

            $statusResponse = json_decode($statusResult, true);

            if ($statusResponse['completed']) {
                echo "<div class='response'>" . print_r($statusResponse['data'], true) . "</div>";
                break;
            }
        }
    }
    ?>
</div>
<script>
     function startVoiceRecognition() {
        const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
        recognition.lang = 'en-US';
        recognition.interimResults = false;
        recognition.maxAlternatives = 1;

        recognition.start();

        recognition.onresult = function(event) {
            const speechResult = event.results[0][0].transcript;
            document.getElementById('user_message').value = speechResult;
        };

        recognition.onerror = function(event) {
            console.error('Speech recognition error', event.error);
            alert('Error occurred in recognition: ' + event.error);
        };
    }
</script>
</body>
</html>
