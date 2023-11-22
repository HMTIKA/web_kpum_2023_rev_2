<?php 
    include 'backend/user/user_access.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMILIHAN PRESIDEN DAN WAKIL PRESIDEN MAHASISWA</title>
    <link rel="stylesheet" href="aset/css/bootstrap.css">
    <link rel="stylesheet" href="aset/css/style.css">

    <link rel="shortcut icon" href="/aset/images/BEM.png" type="image/x-png">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-home navbar-expand-xl fixed-top navbar-home" id="navbar" data-scroll-index="0">
        <div class="container-fluid">
            <h1 class="navbar-brand">
                <img src="aset/images/BEM.png" alt="Logo" width="30" height="30">
                KPUM STIMIK TUNAS BANGSA
            </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

    <!-- JUMBOTRON -->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="aset/images/logo.jpg" alt="">
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <h1>Hi, Welcome!</h1>
                        <h2>E-Vote Pilpresma & Wapresma <br> STIMIK Tunas Bangsa Banjarnegara 2023</h2>
                        <p>Suara anda tanggung jawab kami membawa perubahan gemilang.</p>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <a href="user/sign-up" class="btn btn-lg mb-3">REGISTRASI</a>
                        </div>
                        <div class="col-lg-6">
                            <a href="user/sign-in" class="btn btn-lg">LOGIN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END JUMBOTRON -->

    <script src="aset/js/jquery-3.5.1.js"></script>
    <script src="aset/js/bootstrap.js"></script>
    <script src="aset/js/script.js"></script>
</body>

</html>