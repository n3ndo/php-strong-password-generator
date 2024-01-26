<?php
    session_start();

    if(isset($_SESSION['generatedPassword'])) {
        $generatedPassword = $_SESSION['generatedPassword'];

    }
    else{
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area password</title>
</head>
<body>
    <h1>Generated Password</h1>
    <p>Your generated password is: <?php echo $generatedPassword; ?></p>
</body>
</html>