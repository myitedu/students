**Step 1:** Create the Telegram Bot using BotFather
Open Telegram and search for BotFather.
Start the chat with BotFather and use the /start command.
Use the /newbot command to create a new bot.
Follow the prompts to:
Name your bot (e.g., MyPHPBot).
Set a username for your bot (must end in bot, e.g., MyPHPBotBot).
After completion, BotFather will provide you with an API token. Save this token for later use.

**Step 2:** Create the PHP Script
Below is a sample PHP script to interact with the Telegram Bot API:

PHP Script: telegram_bot.php
php
Copy code
<?php
// Replace this with your Telegram Bot API token
$apiToken = "YOUR_BOT_API_TOKEN";

// URL for the Telegram Bot API
$apiURL = "https://api.telegram.org/bot$apiToken/";

// Get the incoming update from Telegram
$update = json_decode(file_get_contents("php://input"), true);

// Extract message details
if (isset($update["message"])) {
    $chatId = $update["message"]["chat"]["id"];
    $messageText = $update["message"]["text"];

    // Process the message and prepare a response
    $responseText = "You said: $messageText";

    // Send the response back to the user
    $sendMessageURL = $apiURL . "sendMessage?chat_id=$chatId&text=" . urlencode($responseText);
    file_get_contents($sendMessageURL);
}
?>
**Step 3:** Set Up the Webhook
Upload the PHP script (telegram_bot.php) to your server.
Make sure the file is accessible via a public URL (e.g., https://yourdomain.com/telegram_bot.php).
Use the following command in a browser or a tool like Postman to set the webhook for your bot:
bash
Copy code
https://api.telegram.org/botYOUR_BOT_API_TOKEN/setWebhook?url=https://yourdomain.com/telegram_bot.php
Replace YOUR_BOT_API_TOKEN and https://yourdomain.com/telegram_bot.php with your bot’s token and the script URL.

**Step 4:** Test Your Bot
Open your Telegram bot by searching for its username in Telegram.
Start the bot by sending a message (e.g., /start or any text).
The bot should respond with You said: <Your Message>.
Notes
If you're testing locally, use a tool like ngrok to expose your local server to the internet.
Ensure your server has curl or file_get_contents enabled for outbound requests.
Modify the telegram_bot.php script to add more functionality (e.g., commands or integrations).

**Token:** 7538675414:AAHSc5-otjUvX29Zfd_vTew7oD5LlK_Zibs