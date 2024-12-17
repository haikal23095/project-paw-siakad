<!DOCTYPE html>
<html lang="id">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/krs-succed.css">
</head>

</head>
<body>
<body>
    <div class="container">
        <!-- Hamburger Menu -->
        <button class="hamburger">☰</button>

        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-section">
                <div class="avatar"></div>
                <p>nama user & nim</p>
            </div>
            <nav class="menu">
                <ul>
                    <li><img src="../assets/icon-sidebar/mahasiswa/dashboard.png" alt=""><span>Dashboard</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/panduan.png" alt=""><span>Panduan</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/profile.png" alt=""><span>Profile</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/matakuliah.png" alt=""><span>Matakuliah</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/krs.png" alt=""><span>KRS</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/khs.png" alt=""><span>KHS</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/transkip.png" alt=""><span>Transkip Nilai</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/skripsi.png" alt=""><span>Pengajuan Judul Skripsi</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/akademik.png" alt=""><span>Akademik</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/password.png" alt=""><span>Ubah Password</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/faq.png" alt=""><span>FAQ</span></li>
                </ul>
            </nav>
        </aside>
        <div class="result-container">
  <!-- Header -->
  <div class="header">
    <h1>HASIL TAMBAH KRS</h1>
    <a href="../logout.php" class="logout">Log Out</a>
  </div>


    <!-- Kotak Berhasil Diambil -->
    <div class="result-section">
        <h3>Matakuliah yang berhasil diambil:</h3>
        <ul>
            <li>IF341 Data Structure berhasil diambil</li>
            <li>IF342 Algoritma Pemrograman berhasil diambil</li>
        </ul>
    </div>

    <!-- Kotak Tidak Berhasil Diambil -->
    <div class="result-section failure">
        <h3>Matakuliah yang tidak berhasil diambil:</h3>
        <ul>
            <li>IF351 Basis Data kelas penuh</li>
            <li>IF352 Teori Komputasi jadwal bentrok dengan IF371 Networking</li>
        </ul>
    </div>

    <!-- Tombol Kembali -->
    <button class="btn-back" onclick="window.location.href='krs-tambah.php';">
    Kembali
    </button>


</div>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>
