<?php 
    session_start();
    include 'backend/connect/conn.php';
    
    // Pemeriksaan apakah pengguna sudah login
    if (isset($_SESSION["user"])) {
        // Redirect ke halaman lain jika sudah login
        header("Location: /user/vote"); // Ganti dengan halaman tujuan setelah login
        exit();
    }
?>