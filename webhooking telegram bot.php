<?php
$telegramBotToken = 'ENTER YOUR TELEGRAM BOT API';
$botUsername = '@ENTER_YOUR_BOT_USERNAME';
$webhookUrl = 'ENTER BOT COMMAND PHP FILE HOSTING LINK HERE'; // Replace with your webhook URL

$response = file_get_contents('https://api.telegram.org/bot' . $telegramBotToken . '/setWebhook?url=' . urlencode($webhookUrl));
$responseData = json_decode($response, true);
if ($responseData['ok']) {
    echo 'Webhook set up successfully.';
} else {
    echo 'Failed to set up webhook. Error: ' . $responseData['description'];
}