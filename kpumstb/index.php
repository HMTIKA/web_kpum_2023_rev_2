<?php
session_start();
if(!isset($_SESSION['voter_token'])) {
    header('Location: signin');
}
?>

<h1>HOME</h1>

<p>
<a href="index">Home</a> | <a href="vote">Vote</a> | <a href="candidate">Candidate</a> | <a href="quick-on">Quick On</a> | <a href="signout">Sign Out</a>
</p>