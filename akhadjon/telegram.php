<?php
// Backend: PHP to save input and retrieve chats
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'] ?? '';
    if (!empty($message)) {
        file_put_contents('chats.txt', $message . "\n", FILE_APPEND);
        echo json_encode(['success' => true, 'message' => $message]);
        exit;
    } else {
        echo json_encode(['success' => false]);
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (file_exists('chats.txt')) {
        $chats = file('chats.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatroom</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e5ddd5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .chat-header {
            background-color: #075e54;
            color: white;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        .chat-box {
            height: 400px;
            overflow-y: auto;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .message {
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 5px;
            font-size: 14px;
            color: white;
        }

        .incoming {
            background-color: #434f54;
            text-align: left;
        }

        .outgoing {
            background-color: #128c7e;
            text-align: right;
        }

        .chat-input {
            display: flex;
            padding: 10px;
            background-color: #f1f1f1;
        }

        .chat-input input {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 10px;
        }

        .chat-input button {
            background-color: #128c7e;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="chat-header">My Chatroom</div>
    <div class="chat-box" id="chat-box">
        <?php
        foreach ($chats as $chat){
            echo "<div class='message outgoing'>$chat</div>";
        }
        ?>
    </div>
    <div class="chat-input">
        <input type="text" id="chat-input" placeholder="Write a message...">
        <button id="send-btn">Send</button>
    </div>
</div>

<script>
    $(document).ready(function () {
        const chatBox = $('#chat-box');
        const inputField = $('#chat-input');

        // Function to load messages from the server
        function loadMessages() {
            $.ajax({
                url: '',
                type: 'GET',
                dataType: 'json',
                success: function (messages) {
                    chatBox.empty();
                    messages.forEach(function (msg) {
                        chatBox.append(`<div class="message incoming">${msg}</div>`);
                    });
                    chatBox.scrollTop(chatBox[0].scrollHeight);
                }
            });
        }

        // Function to send a new message
        $('#send-btn').click(function () {
            const message = inputField.val().trim();
            if (message !== '') {
                $.ajax({
                    url: '',
                    type: 'POST',
                    data: {message: message},
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            chatBox.append(`<div class="message outgoing">${response.message}</div>`);
                            inputField.val('');
                            chatBox.scrollTop(chatBox[0].scrollHeight);
                        } else {
                            alert('Failed to save the message.');
                        }
                    }
                });
            }
        });

        // Initial load of messages
        loadMessages();
    });
</script>
</body>
</html>
