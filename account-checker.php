<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNT CHECKER</title>
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
                        <a class="nav-link active" href="index">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contributor">CONTRIBUTOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="live-vote">LIVE VOTE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="account-checker">ACCOUNT CHECKER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sign-up">SIGN-UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sign-in">SIGN-IN</a>
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
                    ACCOUNT CHECKER
                </p>
            </div>
        </div>
    </section>
    <!-- END JUMBOTRON 2 -->

    <!-- Cek Akun -->
    <section class="cek-akun">
        <div class="container">
            <div class="row">
                <h1>CEK AKUN</h1>
            </div>
            <div class="row">
                <form action="#">
                    <input type="text" placeholder="Masukan NIM atau NIDK">
                    <button type="submit" class="btn btn-md btn-primary">CEK DATA</button>
                </form>
            </div>

            <!-- Tampil setelah di submit -->
            <div class="row">
                <h2 class="mt-3">OUTPUT : </h2>

                <!--  jika sudah Registrasi -->
                <table class="table table-striped table-hover table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="col">NAMA</th>
                            <th scope="col">NOMOR INDUK</th>
                            <th scope="col">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo "Imam Nurfalah" ?>
                            </td>
                            <td>
                                <?php echo "SITIS220322" ?>
                            </td>
                            <td>
                                <?php
                                $isvoted = 0;
                                if ($isvoted == 1) {
                                ?>
                                    <p class="text-success">Sudah Memilih</p>
                                <?php
                                } else {
                                ?>
                                    <p class="text-danger">Belum Memilih</p>
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Jika Belum Registrasi -->
                <h3 class="mt-3">BELUM TERDAFTAR</h3>

                <!-- Jika data tidak terdapat di database -->
                <h3 class="mt-3">DATA YANG DIINPUTKAN SALAH</h3>

            </div>
        </div>
    </section>
    <!-- End Cek Akun -->

    <script src="aset/js/jquery-3.5.1.js"></script>
    <script src="aset/js/bootstrap.js"></script>
    <script src="aset/js/script.js"></script>
</body>

</html>