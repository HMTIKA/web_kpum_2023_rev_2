<?php
include('./controllers/voteController.php');

if(isset($_POST['signup'])) {
    signupController($_POST['no_identitas']);
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
        <input type="text" name="no_identitas" value="S1TIS210400">
        <button type="submit" name="signup">Sign Up</button>
    </form>

    <p>
        <a href="signin">Sign In</a> | <a href="signup">Sign Up</a> | <a href="account-checker">Account Checker</a>
    </p>
</body>
</html>