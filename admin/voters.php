<?php
include('../backend/connect/conn.php');
session_start();
function query($query)
{
    $result = mysqli_query($GLOBALS['conn'], $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$voters_data = query("SELECT * FROM data_induk_pemilih");
?>
<?php 
    if (isset($_SESSION["admin"])) {
        // Redirect ke halaman login jika belum login
        header("Location: /");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voters</title>
    <link rel="stylesheet" href="../aset/css/bootstrap.css">
    <link rel="stylesheet" href="../aset/css/style.css">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar fixed-top" id="navbar" data-scroll-index="0">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <h1 class="navbar-brand">ADMINISTRATOR</h1>
            <div class="collapse navbar-collapse justify-content-end text-center" id="navbarNav">
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>USER VIEW</h2>
        <ul>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="/">HOME PAGE</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="/live-vote">LIVE VOTE</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="/user/sign-up">REGISTRASI</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="/user/account-checker">CEK REGITRASI</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="/user/sign-in">LOGIN PEMILIH</a>
            </li>
        </ul>

        <h2>DATA PEMILIH</h2>
        <ul>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="add-voters">TAMBAH PEMILIH</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="voters">LIST PEMILIH</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="voted">LIST TELAH MEMILIH</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="not-voted">LIST GOLPUT</a>
            </li>
        </ul>

        <h2>DATA KANDIDAT</h2>
        <ul>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="add-candidate">TAMBAH KANDIDAT</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="candidates">LIST KANDIDAT</a>
            </li>
        </ul>

        <h2>ADMIN MENU</h2>
        <ul>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="dashboard">DASHBOARD</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="#">ALLOWED IP TO VOTE</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="auth/logout">LOGOUT
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <!-- END SIDEBAR -->

    <!-- JUMBOTRON 2 -->
    <section class="jumbotron-2 mt-5 pt-5">
        <div class="container">
            <div class="row">
                <p>
                    <a href="../">HOME</a> >
                    <a href="dashboard">ADMIN</a> >
                    VOTERS
                </p>
            </div>
        </div>
    </section>
    <!-- END JUMBOTRON 2 -->

    <!-- DATA SUARA -->
    <section class="data-voters">
        <div class="container">
            <div class="row">
                <h1 class="mb-3">DATA PEMILIH</h1>
            </div>
            <div class="row">
                <div class="col-md-6 add-voters mb-3">
                    <a class="btn btn-md btn-primary" href="add-voters">
                        Tambah Pemilih
                    </a>
                </div>
                <div class="col-md-6 search-voters">
                    <form action="#">
                        <input type="search" name="" id="" placeholder="SEARCH">
                        <button type="submit" class="btn btn-md btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row">
                <table class="table table-striped table-hover table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">NOMOR INDUK</th>
                            <th scope="col">TOKEN</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($voters_data as $voter) { ?>
                            <tr>
                                <th scope="row">
                                    <?= $i ?>
                                </th>
                                <td>
                                    <input type="text" value="<?= $voter['name']; ?>">
                                </td>
                                <td>
                                    <input type="text" value="<?= $voter['identity_number']; ?>">
                                </td>
                                <td>
                                    <input type="text" value="<?= $voter['voter_token']; ?>">
                                </td>
                                <td>
                                    <?php
                                    $isvoted = $voter['is_voted'];
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
                                <td>
                                    <button class="btn btn-md btn-warning w-100 mb-2">
                                        Update
                                    </button>
                                    <button class="btn btn-md btn-danger w-100 mb-2">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        <?php $i = $i + 1?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- DATA SUARA -->




    <script src="../aset/js/jquery-3.5.1.js"></script>
    <script src="../aset/js/bootstrap.js"></script>
    <script src="../aset/js/script.js"></script>
</body>

</html>