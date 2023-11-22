<?php
include('./controllers/query.php');

$votes = query('SELECT * FROM votes');
$total_vote = count($votes);
function filter_votes($candidate_id) {
    $votes = query("SELECT * FROM votes WHERE candidate_selected = '$candidate_id'");
    return count($votes);
}

?>

<ul>
    <li>KANDIDAT 1: <?= filter_votes(1); ?></li>
    <li>KANDIDAT 2: <?= filter_votes(2); ?></li>
    <li>KANDIDAT 3: <?= filter_votes(3); ?></li>
</ul>