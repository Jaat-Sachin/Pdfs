<?php
if (isset($_POST['user_input'])) {
    $data = $_POST['user_input'];

    // print to terminal
    file_put_contents("php://stdout", "User entered: $data\n");

    echo "Data received successfully";
}
?>
