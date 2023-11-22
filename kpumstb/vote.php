<?php
require('./controllers/voteController.php');

session_start();
if(!isset($_SESSION['voter_token'])) {
    echo '<script>alert("Silakan masuk terlebih dahulu!")</script>';
    header('Location: signin');
}

// check if the user has selected
isVoted($_SESSION['voter_token']);
print_r($_SESSION);

if(isset($_POST["vote"])) {
    // print_r($_POST);
    // print_r($_POST['select_vote']);
    takeVoteController($_SESSION['voter_token'], $_POST['select_vote']);
}
?>

<form action="" method="post">
    <fieldset id="select_vote">
        <input type="radio" value="1" name="select_vote"> Kandidat 1
        <input type="radio" value="2" name="select_vote"> Kandidat 2
    </fieldset>
    <button type="submit" name="vote">Vote</button>
</form>

<p>
<a href="index">Home</a> | <a href="vote">Vote</a> | <a href="candidate">Candidate</a> | <a href="signout">Sign Out</a>
</p>