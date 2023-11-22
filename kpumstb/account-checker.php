<?php
include('./controllers/voteController.php');

$no_identitas = '';
if(isset($_POST['check'])) {
    accountChecker($_POST['no_identitas']);
    $no_identitas = accountChecker($_POST['no_identitas'])[0];
    $name = accountChecker($_POST['no_identitas'])[1];
    $grade = accountChecker($_POST['no_identitas'])[2];

    if(strlen($name) > 1) { 
        echo '<script>alert("No Identitas sudah terdaftar sebagai calon pemilih.")</script>'; 
    } 
    else {
        echo '<script>alert("No Identitas belum terdaftar.\nSilakan mendaftarkan akun terlebih dahulu.")</script>';
    }
}
?>

<form action="" method="post">
    <input type="text" name="no_identitas" value="S1TIS210400">
    <button type="submit" name="check">Check</button>
</form>

<ul>
    <li><?php if(isset($no_identitas)) { echo 'No Identitas: ' . $no_identitas; } else { echo '-'; }; ?></li>
    <li><?php if(isset($name)) { echo 'Name: ' . $name; } else { echo '-'; }; ?></li>
    <li><?php if(isset($grade)) { echo 'Grade: ' . $grade; } else { echo '-'; }; ?></li>
</ul>

<p>
    <a href="signin">Sign In</a> | <a href="signup">Sign Up</a>
</p>