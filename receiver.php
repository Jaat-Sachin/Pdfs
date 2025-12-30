<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // validation
    if (strlen($username) < 6 || strlen($password) < 9) {
        file_put_contents("php://stdout", "[!] Invalid input length\n");
        exit;
    }

    // terminal output
    file_put_contents(
        "php://stdout",
        "=== FORM DATA RECEIVED ===\n" .
        "Username: $username\n" .
        "Password Length: " . strlen($password) . "\n" .
        "==========================\n"
    );

    // file logging
    file_put_contents(
        "data.txt",
        "User: $username | PassLen: " . strlen($password) . " | Time: " . date("Y-m-d H:i:s") . "\n",
        FILE_APPEND
    );

    header("Location: pdf.html");
    exit;
}
?>
