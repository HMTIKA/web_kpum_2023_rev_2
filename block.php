<?php 
include 'backend/user/user_access.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOCKED ACCESS</title>
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
    <section class="jumbotron">
        <div class="container">
            <div class="row">
                <h1>GOT BLOCKED</h1>
                <h2>IP ADDRESS :
                    <?php
                    $ip_add = $_SERVER['REMOTE_ADDR'];
                    echo $ip_add;
                    ?>
                </h2>
                <h2>DEVICE :
                    <?php
                    function isMobile()
                    {
                        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
                    }

                    if (isMobile()) {
                        echo 'Mobile';
                    } else {
                        echo 'Desktop';
                    }
                    ?>                    
                </h2>
                <h2>WEB BROWSER :
                    <?php

                    function getBrowser()
                    {
                        $user_agent = $_SERVER['HTTP_USER_AGENT'];
                        $browser = "N/A";

                        $browsers = [
                            '/msie/i' => 'Internet explorer',
                            '/firefox/i' => 'Firefox',
                            '/safari/i' => 'Safari',
                            '/chrome/i' => 'Chrome',
                            '/edge/i' => 'Edge',
                            '/opera/i' => 'Opera',
                            '/mobile/i' => 'Mobile browser',
                        ];

                        foreach ($browsers as $regex => $value) {
                            if (preg_match($regex, $user_agent)) {
                                $browser = $value;
                            }
                        }

                        return $browser;
                    }

                    echo getBrowser();

                    ?>
                </h2>
            </div>
        </div>
    </section>
    <!-- END JUMBOTRON 2 -->


    <script src="aset/js/jquery-3.5.1.js"></script>
    <script src="aset/js/bootstrap.js"></script>
    <script src="aset/js/script.js"></script>
</body>

</html>