<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-UP</title>
    <link rel="stylesheet" href="../aset/css/bootstrap.css">
    <link rel="stylesheet" href="../aset/css/style.css">

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-xl fixed-top navbar-home" id="navbar" data-scroll-index="0">
        <div class="container-fluid">
            <h1 class="navbar-brand">
                <img src="../aset/images/BEM.png" alt="Logo" width="30" height="30">
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
                    <a href="/">HOME</a> >
                    SIGN UP
                </p>
            </div>
        </div>
    </section>
    <!-- END JUMBOTRON 2 -->

    <!-- ADD VOTERS -->
    <section class="sign-up">
        <div class="container">
            <div class="row">
                <h1>REGISTRASI PEMILIH</h1>
            </div>
            <div class="row">
                <form method="post">
                    <input type="text" name="identity_number" id="identity_number" placeholder="INPUT NIM atau NIDK">
                    <button type="submit" name="sign-up" class="btn btn-lg btn-primary mt-3">DAFTAR</button>
                </form>
            </div>
            <div class="row">
                <?php
                include '../backend/user/sign_up.php'
                ?>
            </div>
        </div>
    </section>
    <!-- END ADD VOTERS -->



    <script src="../aset/js/jquery-3.5.1.js"></script>
    <script src="../aset/js/bootstrap.js"></script>
    <script src="../aset/js/script.js"></script>
</body>

</html>