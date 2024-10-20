<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counseling Corner</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8eaf6; /* Pastel purple */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .meditation-box {
            background-color: #ffffff; /* White background */
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            padding: 40px; /* Increased padding */
            width: 600px; /* Increased width */
            text-align: center;
            max-width: 90%; /* Responsive max width */
        }
        h1 {
            font-size: 32px; /* Increased font size */
            color: #ab47bc; /* Pastel purple */
            margin-bottom: 20px;
        }
        p {
            font-size: 24px; /* Increased font size */
            color: #555; /* Dark gray */
            margin-bottom: 15px;
        }
        textarea {
            width: 100%;
            height: 120px; /* Increased height */
            border-radius: 5px;
            padding: 15px;
            border: 2px solid #ab47bc; /* Pastel purple */
            margin-bottom: 20px;
            resize: none;
            font-size: 20px; /* Increased font size */
            transition: border 0.3s;
        }
        textarea:focus {
            border-color: #9c27b0; /* Darker purple */
            outline: none;
        }
        button {
            width: 100%;
            padding: 15px;
            background-color: #ab47bc; /* Pastel purple */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 22px; /* Increased font size */
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #9c27b0; /* Darker purple */
        }
        .response {
            margin-top: 20px;
            padding: 15px; /* Increased padding */
            background-color: #f3e5f5; /* Light purple background */
            border-radius: 5px;
            color: #333;
            font-size: 20px; /* Increased font size */
            text-align: left;
        }
    </style>
</head>
<body>

<div class="meditation-box">
    <h1>Counseling Corner</h1> <!-- Changed heading -->
    <p>Share your thoughts and feelings here:</p>
    <form method="POST" action="">
        <textarea name="user_message" placeholder="Share your thoughts or experiences..." required></textarea>
        <button type="button" class="voice-btn" onclick="startVoiceRecognition()">Speak</button>
        <button type="submit">Send</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userMessage = $_POST['user_message'];
        runModel($userMessage);
    }

    function runModel($message) {
        $apiKey = '100b6eac43c1d209592993093a5f5c700aed182937e7e42243b6bb8752e8a98a'; // Put your API key here
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
            echo "<div class='response'>Error initiating the model: " . $error['message'] . "</div>";
            return;
        }

        $response = json_decode($result, true);
        if (isset($response['error'])) {
            echo "<div class='response'>API Error: " . $response['error']['message'] . "</div>";
            return;
        }

        $urlToPoll = $response['data'];
        echo "<div class='response'></div>";

        while (true) {
            sleep(5); // Wait for 5 seconds before polling again

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
                echo "<div class='response'>Error polling the model status: " . $error['message'] . "</div>";
                break;
            }

            $statusResponse = json_decode($statusResult, true);

            if ($statusResponse['completed']) {
                echo "<div class='response'>: " . print_r($statusResponse['data'], true) . "</div>";
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
