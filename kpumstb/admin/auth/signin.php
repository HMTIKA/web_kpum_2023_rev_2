<?php
include('./controllers/signController.php');
session_start();
if(isset($_SESSION['admin'])) {
    header('Location: ../dashboard');
}

if(isset($_POST['signin'])) {
    $username = 'admin'; $password = 'admin';
    if($_POST['username'] == $username && $_POST['password'] == $password) {
        session_start();
        $_SESSION['admin'] = $username;
        echo "<script>window.location.href = '../dashboard'</script>";
    } else {
        echo "<script>alert('Username atau Password yang Anda masukkan salah!')</script>";
    }
}
?>

<form action="" method="post">
    <input type="text" name="username" value="admin">
    <input type="password" name="password" value="admin">
    <button type="submit" name="signin">Sign In</button>
</form>