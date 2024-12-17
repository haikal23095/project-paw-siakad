<?php
$page = "index-admin";
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../loginpage.php");
}


include_once($_SERVER["DOCUMENT_ROOT"] . "../config.php");
include_once(BASEPATH .  "/database.php");
include_once(BASEPATH . "/functions.php");

if ($_SESSION['Level'] != 'admin') {
    header("Location: ../loginpage.php");
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link rel="stylesheet" href="../css/index-admin.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-section">
                <div class="avatar"></div>
                <p>Admin - Username</p>
            </div>
            <nav class="menu">
                <ul>
                    <li><img src="../assets/icon-sidebar/mahasiswa/dashboard.png" alt=""><span>Dashboard</span></li>
                    <li><img src="../assets/icon-sidebar/admin/profil pengguna.png" alt=""><span>Kelola Akun</span></li>
                    <li><img src="../assets/icon-sidebar/admin/kalender akademik.png" alt="kalender akademik"><span>Kelola Kalender Akademik</span></li>
                    <li><img src="../assets/icon-sidebar/admin/krs.png" alt=""><span>Kelola KRS</span></li>
                    <li><img src="../assets/icon-sidebar/admin/krs.png" alt=""><span>Kelola Jadwal KRS</span></li>
                    <li><img src="../assets/icon-sidebar/admin/krs.png" alt=""><span>Kelola Pengumuman</span></li>
                    <li><img src="../assets/icon-sidebar/admin/krs.png" alt=""><span>Kelola Diskusi</span></li>
                    <li><img src="../assets/icon-sidebar/admin/krs.png" alt=""><span>Kelola Pesan</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/khs.png" alt=""><span>Kelola KHS</span></li>
                    <li><img src="../assets/icon-sidebar/admin/kelola ukt.png" alt=""><span>Kelola UKT</span></li>
                    <li><img src="../assets/icon-sidebar/admin/info matakuliah.png" alt=""><span>Kelola Informasi Matakuliah</span></li>
                    <li><img src="../assets/icon-sidebar/admin/info akademik.png" alt=""><span>Kelola Informasi Akademik</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/faq.png" alt=""><span>Kelola FAQ</span></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h1>Selamat Datang Admin</h1>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="../logout.php" class="logout" onclick="return confirm('apakah anda yakin ingin logout')" >Log Out</a>  
            </header>
            <div class="title-dashboard">
                <!-- Kotak Pesan -->
                <div class="kotak-pesan">
                        <img src="../assets/img/Amplop.png" alt="Amplop">
                        <h3>Kelola Kotak Pesan</h3>
                </div>
                <h1 class="dashboard-title">Dashboard</h1>
            </div>
            <div class="content-grid">
                <!-- Pengumuman -->
                <div class="column-grid">
                    <h2>Kelola Akun</h2>
                    <img src="../assets/img/Settings.png" alt="sttings-icon" class="icon-settings">
                </div>
                <!-- Diskusi Terbaru -->
                <div class="column-grid">
                    <h2>Kelola Kalender Akademik</h2>
                    <img src="../assets/img/Settings.png" alt="sttings-icon" class="icon-settings">
                </div>
            </div>

            <div class="content-grid">
                <!-- Pengumuman -->
                <div class="column-grid">
                    <h2>Kelola Pengumuman</h2>
                    <img src="../assets/img/Settings.png" alt="sttings-icon" class="icon-settings">
                </div>
                <!-- Diskusi Terbaru -->
                <div class="column-grid">
                    <h2>Kelola Diskusi</h2>
                    <img src="../assets/img/Settings.png" alt="sttings-icon" class="icon-settings">
                </div>
            </div>

            <div class="content-grid">
                <!-- Pengumuman -->
                <div class="column-grid">
                    <h2>Kelola Pesan Selamat Datang</h2>
                    <img src="../assets/img/Settings.png" alt="sttings-icon" class="icon-settings">
                </div>
                <!-- Diskusi Terbaru -->
                <div class="column-grid">
                    <h2>Kelola Jadwal KRS</h2>
                    <img src="../assets/img/Settings.png" alt="sttings-icon" class="icon-settings">
                </div>
            </div>

            <div class="content-grid">
                <!-- Pengumuman -->
                <div class="column-grid">
                    <h2>Kelola Akun Pengguna</h2>
                    <img src="../assets/img/Settings.png" alt="sttings-icon" class="icon-settings">
                </div>
                <!-- Diskusi Terbaru -->
                <div class="column-grid">
                    <h2>Profile</h2>
                    <img src="../assets/img/Settings.png" alt="sttings-icon" class="icon-settings">
                </div>
            </div>
        </main>
    </div>

    <script src="../js/index-admin.js"></script>
</body>
</html>