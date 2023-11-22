<?php
include 'backend/user/user_access.php';
include 'backend/connect/conn.php';
function query($query)
{
    $result = mysqli_query($GLOBALS['conn'], $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$data_kandidat = query("SELECT * FROM kandidat");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10">
    <title>LIVE VOTE</title>
    <link rel="stylesheet" href="aset/css/bootstrap.css">
    <link rel="stylesheet" href="aset/css/style.css">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-xl fixed-top navbar-home" id="navbar" data-scroll-index="0">
        <div class="container-fluid">
            <h1 class="navbar-brand">
                <img src="aset/images/BEM.png" alt="Logo" width="30" height="30">
                KPUM STIMIK TUNAS BANGSA
            </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end text-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/contributor">CONTRIBUTOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/live-vote">LIVE VOTE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/account-checker">ACCOUNT CHECKER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/sign-up">SIGN-UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/sign-in">SIGN-IN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- JUMBOTRON 2 -->
    <section class="jumbotron-2 mt-5 pt-5">
        <div class="container">
            <div class="row">
                <p>
                    <a href="index">HOME</a> >
                    LIVE VOTE
                </p>
            </div>
        </div>
    </section>
    <!-- END JUMBOTRON 2 -->

    <!-- Live Vote -->
    <section class="live-vote">
        <div class="container">
            <div class="row">
                <h1 class="mb-2">LIVE VOTE</h1>
            </div>
            <div class="row">
                <?php $i = 1 ?>
                <?php foreach ($data_kandidat as $kandidat) { ?>
                    <div class="col-lg-4">
                        <div class="card p-3 mb-4">
                            <h2 class="card-title">KANDIDAT NOMOR <?= $i ?></h2>
                            <img src="aset/images/picture.jpg" alt="" class="card-image mb-2 w-100">
                            <p class="mb-2 card-text">NAMA CAPRESMA & NAMA CAWAPRESMA</p>
                            <p>
                                Jumlah Suara :
                                <?php
                                $total_suara_masuk = count(query("SELECT * FROM votes"));
                                $suara_paslon = count(query("SELECT * FROM votes WHERE candidate_selected = '$i'"));
                                echo $suara_paslon;
                                ?>
                                ( <?php
                                    echo  $suara_paslon / $total_suara_masuk * 100;
                                    ?> % )
                            </p>
                            <div class="bars">
                                <div class="bars-width" style="
                                width:<?php echo $suara_paslon / $total_suara_masuk * 100 ?>%
                            "></div>
                            </div>
                        </div>
                    </div>
                    <?php $i = $i + 1 ?>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Live Vote -->

    <script src="aset/js/jquery-3.5.1.js"></script>
    <script src="aset/js/bootstrap.js"></script>
    <script src="aset/js/script.js"></script>
</body>

</html>