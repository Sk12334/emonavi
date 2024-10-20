<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>सल्ला कोना</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fce4ec; /* हलका गुलाबी */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .counseling-box {
            background-color: #ffffff; /* पांढरी पृष्ठभूमी */
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            padding: 40px; /* वाढलेले पॅडिंग */
            width: 600px; /* वाढलेली रुंदी */
            text-align: center;
            max-width: 90%; /* उत्तरदायी जास्तीत जास्त रुंदी */
        }
        h1 {
            font-size: 32px; /* वाढलेला फॉन्ट आकार */
            color: #4A148C; /* गडद जांभळा */
            margin-bottom: 20px;
        }
        p {
            font-size: 24px; /* वाढलेला फॉन्ट आकार */
            color: #555; /* गडद ग्रे */
            margin-bottom: 15px;
        }
        textarea {
            width: 100%;
            height: 120px; /* वाढलेली उंची */
            border-radius: 5px;
            padding: 15px;
            border: 2px solid #4A148C;
            margin-bottom: 20px;
            resize: none;
            font-size: 20px; /* वाढलेला फॉन्ट आकार */
            transition: border 0.3s;
        }
        textarea:focus {
            border-color: #9C27B0; /* हलका जांभळा */
            outline: none;
        }
        button {
            width: 100%;
            padding: 15px;
            background-color: #4A148C; /* गडद जांभळा */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 22px; /* वाढलेला फॉन्ट आकार */
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #6A1B9A; /* हलका जांभळा */
        }
        .response {
            margin-top: 20px;
            padding: 15px; /* वाढलेले पॅडिंग */
            background-color: #e1bee7; /* हलका जांभळा */
            border-radius: 5px;
            color: #333;
            font-size: 20px; /* वाढलेला फॉन्ट आकार */
            text-align: left;
        }
    </style>
</head>
<body>

<div class="counseling-box">
    <h1>उत्साही विचारांसाठी कोना</h1>
    <p>आपला प्रश्न माझ्यासोबत शेअर करा:</p>
    <form method="POST" action="">
        <textarea name="user_message" placeholder="इथे आपला संदेश टाका..." required></textarea>
        <button type="button" class="voice-btn" onclick="startVoiceRecognition()">बोलणे</button>
        <button type="submit">पठवा</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userMessage = $_POST['user_message'];
        runModel($userMessage);
    }

    function runModel($message) {
        $apiKey = '100b6eac43c1d209592993093a5f5c700aed182937e7e42243b6bb8752e8a98a'; // इथे आपली API की टाका
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
            echo "<div class='response'>मॉडेल सुरू करण्यात त्रुटी: " . $error['message'] . "</div>";
            return;
        }

        $response = json_decode($result, true);
        if (isset($response['error'])) {
            echo "<div class='response'>API त्रुटी: " . $response['error']['message'] . "</div>";
            return;
        }

        $urlToPoll = $response['data'];
        echo "<div class='response'></div>";

        while (true) {
            sleep(5); // पुन्हा पोलिंग करण्यापूर्वी 5 सेकंद थांबा

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
                echo "<div class='response'>मॉडेल स्थिती पोलिंगमध्ये त्रुटी: " . $error['message'] . "</div>";
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
