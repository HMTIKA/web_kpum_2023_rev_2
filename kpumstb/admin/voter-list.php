<?php
include('../config/db.php');
session_start();
function query($query) {
    $result = mysqli_query($GLOBALS['conn'], $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$voters_data = query("SELECT * FROM data_induk_pemilih WHERE activation_status = '1'");

?>

<ul>
    <?php foreach($voters_data as $voter) { ?>
    <li>Nama: <?= $voter['name'];?></li>
    <li>No Induk: <?= $voter['nim'];?></li>
    <li>Status: <?php if($voter['is_voted'] == '1') { echo 'Sudah Memilih'; } else { echo 'Belum Memilih'; } ?></li> <br>
    <?php } ?>
</ul>

<!-- delete if don't use -->
<p>
    <a href="dashboard">Dashboard</a> | <a href="voter-list">Voter List</a> | <a href="signout">Sign Out</a>
</p>