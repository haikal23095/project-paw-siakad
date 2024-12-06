<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link rel="stylesheet" href="../css/index-mahasiswa.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-section">
                <div class="avatar"></div>
                <p>nama user & nip</p>
            </div>
            <nav class="menu">
                <ul>
                    <li><img src="../assets/icon-sidebar/mahasiswa/dashboard.png" alt=""><span>Dashboard</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/panduan.png" alt=""><span>Panduan</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/profile.png" alt=""><span>Profile</span></li>
                    <li><img src="../assets/icon-sidebar/dosen/mahasiswa bimbingan.png" alt=""><span>Mahasiswa Bimbingan</span></li>
                    <li><img src="../assets/icon-sidebar/dosen/validasi krs.png" alt=""><span>Validasi KRS</span></li>
                    <li><img src="../assets/icon-sidebar/dosen/val Judul Skripsi.png" alt=""><span>Validasi Judul Skripsi</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/akademik.png" alt=""><span>Akademik</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/password.png" alt=""><span>Ubah Password</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/faq.png" alt=""><span>FAQ</span></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h1>Selamat Datang User</h1>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="#" class="logout">Log Out</a>
            </header>
            <section class="welcome-message">
                <p>
                    Selamat Datang di Portal Akademik Universitas Trunojoyo Madura. 
                    Portal Akademik adalah sistem yang memungkinkan para civitas akademika Universitas Trunojoyo Madura 
                    untuk menerima informasi dengan lebih cepat melalui Internet. Sistem ini dihadirkan untuk memberi 
                    kemudahan setiap civitas akademika untuk melakukan aktivitas-aktivitas akademik dan proses belajar mengajar.
                    Selamat menggunakan fasilitas ini.
                </p>
            </section>

            <div class="content-grid">
                <!-- Kotak Pesan -->
                <div class="kotak-pesan">
                    <h2>Kotak Pesan</h2>
                    <p>Anda tidak memiliki pesan terbaru</p>
                    <button>Kotak Masuk</button>
                </div>

                <!-- Pengumuman -->
                <div class="pengumuman">
                    <h2>Pengumuman</h2>
                    <ul>
                        <li>Informasi Akademik belum ada informasi untuk kategori ini</li>
                        <li>Informasi Akademik belum ada informasi untuk kategori ini</li>
                        <li>Informasi Akademik belum ada informasi untuk kategori ini</li>
                    </ul>
                </div>

                <!-- Diskusi Terbaru -->
                <div class="diskusi-terbaru">
                    <h2>Diskusi Terbaru</h2>
                    <ul>
                        <li>Kritik dan saran SIAKAD UTM: kartu rencana studi tidak dapat dicetak</li>
                        <li>Kritik dan saran SIAKAD UTM: proses validasi terlalu lama</li>
                        <li>Kritik dan saran SIAKAD UTM: lebih baik ada fitur notifikasi</li>
                    </ul>
                </div>
            </div>
        </main>
    </div>

    <script src="../js/index-admin.js"></script>
</body>
</html>