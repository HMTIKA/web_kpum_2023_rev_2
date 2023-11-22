<?php
include('../config/db.php');
function query($query) {
    $result = mysqli_query($GLOBALS['conn'], $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// total pemilih
$total_pemilih = count(query("SELECT * FROM data_induk_pemilih WHERE activation_status = '1'"));
// total suara masuk 
$total_suara_masuk = count(query("SELECT * FROM data_induk_pemilih WHERE is_voted = '1'"));
// total sisa suara masuk
$total_suara_belum_masuk = count(query("SELECT * FROM data_induk_pemilih WHERE is_voted = '0'"));

?>

<h1>DASHBOARD</h1>

<ul>
    <li>Total Pemilih: <?= $total_pemilih; ?></li>
    <li>Total Suara Masuk: <?= $total_suara_masuk; ?></li>
    <li>Total Suara Belum Masuk: <?= $total_suara_belum_masuk; ?></li>
</ul>

<!-- delete if don't use -->
<p>
    <a href="dashboard">Dashboard</a> | <a href="voter-list">Voter List</a> | <a href="signout">Sign Out</a>
</p>