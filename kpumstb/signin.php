<?php
session_start();
include('./controllers/voteController.php');
include('./controllers/sessionController.php');

// sessionValidator($_SESSION['voter_token']);
if(isset($_SESSION['voter_token'])) {
    header('Location: ./');
}
if(isset($_POST['signin'])) {
    signinController($_POST['no_identitas'], $_POST['voter_token']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="no_identitas" value="S1TIS210400" required>
        <input type="text" name="voter_token" value="Laazj7m" required>
        <button type="submit" name="signin">Sign In</button>
    </form>

    <p>
        <a href="signup.php">Sign Up</a> | <a href="account-checker.php">Account Check</a>
    </p>
</body>
</html>