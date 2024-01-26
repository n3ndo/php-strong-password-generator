<?php

    session_start();
    include 'functions.php';

    if(isset($_GET['passwordLength'])) {
        $passwordLength = $_GET['passwordLength'];
        $generatedPassword = generateRandomPassword($passwordLength);

        $_SESSION['generatedPassword'] = $generatedPassword;

        header('Location: ./area_password.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>
    <form action="./index.php" method="GET">
        <label for="passwordLength">Password Length:</label>
        <input type="number" name="passwordLength" id="passwordLength" required>
        <button type="sumbit">Generate Password</button>
    </form>
</body>
</html>
