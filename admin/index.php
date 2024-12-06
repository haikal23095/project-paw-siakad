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
                    <li><img src="../assets/icon-sidebar/admin/profil pengguna.png" alt=""><span>Manajemen Akun</span></li>
                    <li><img src="../assets/icon-sidebar/admin/kalender akademik.png" alt="kalender akademik"><span>Kalender Akademik</span></li>
                    <li><img src="../assets/icon-sidebar/admin/krs.png" alt=""><span>Manajemen KRS</span></li>
                    <li><img src="../assets/icon-sidebar/admin/krs.png" alt=""><span>Manajemen Jadwal KRS</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/khs.png" alt=""><span>Manajemen KHS</span></li>
                    <li><img src="../assets/icon-sidebar/admin/profile.png" alt=""><span>Profile</span></li>
                    <li><img src="../assets/icon-sidebar/admin/kelola ukt.png" alt=""><span>Kelola UKT</span></li>
                    <li><img src="../assets/icon-sidebar/admin/info matakuliah.png" alt=""><span>Informasi Matakuliah</span></li>
                    <li><img src="../assets/icon-sidebar/admin/info akademik.png" alt=""><span>Informasi Akademik</span></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h1>Selamat Datang Admin</h1>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="#" class="logout">Log Out</a>
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
                    <h2>Kelola Diskusi</h2>
                    <img src="../assets/img/Settings.png" alt="sttings-icon" class="icon-settings">
                </div>
                <!-- Diskusi Terbaru -->
                <div class="column-grid">
                    <h2>Kalender Akademik</h2>
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
                    <h2>KRS</h2>
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
                    <h2>Jadwal KRS</h2>
                    <img src="../assets/img/Settings.png" alt="sttings-icon" class="icon-settings">
                </div>
            </div>

            <div class="content-grid">
                <!-- Pengumuman -->
                <div class="column-grid">
                    <h2>Akun Pengguna</h2>
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