<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/val-skripsi-dosen.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-section">
                <div class="avatar"></div>
                <p>Nama User - NIP</p>
            </div>
            <nav class="menu">
                <ul>
                    <a href="index.php"><li><img src="../assets/icon-sidebar/mahasiswa/dashboard.png" alt=""><span>Dashboard</span></li></a>
                    <a href="panduan-dosen.php"><li><img src="../assets/icon-sidebar/mahasiswa/panduan.png" alt=""><span>Panduan</span></li></a>
                    <a href="profile-dosen.php"><li><img src="../assets/icon-sidebar/mahasiswa/profile.png" alt=""><span>Profile</span></li></a>
                    <a href="mabing.php"><li><img src="../assets/icon-sidebar/dosen/mahasiswa bimbingan.png" alt=""><span>Mahasiswa</span></li></a>
                    <a href="val-krs-dosen.php"><li><img src="../assets/icon-sidebar/dosen/validasi krs.png" alt=""><span>Mahasiswa Perwalian</span></li></a>
                    <a href="val-skripsi-dosen.php"><li><img src="../assets/icon-sidebar/dosen/val Judul Skripsi.png" alt=""><span>Mahasiswa Bimbingan</span></li></a>
                    <a href="dosen-akademik.php"><li><img src="../assets/icon-sidebar/mahasiswa/akademik.png" alt=""><span>Akademik</span></li></a>
                    <a href="input-nilai.php"><li><img src="../assets/icon-sidebar/dosen/input-nilai.png" alt=""><span>Input Nilai</span></li></a>
                    <a href="ubah-password-dosen.php"><li><img src="../assets/icon-sidebar/mahasiswa/password.png" alt=""><span>Ubah Password</span></li></a>
                    <a href="faq-dosen.php"><li><img src="../assets/icon-sidebar/mahasiswa/faq.png" alt=""><span>FAQ</span></li></a>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h1>VALIDASI Judul Skripsi</h1>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="../logout.php" class="logout">Log Out</a>
            </header>

            <!-- Keterangan -->
            <div class="description">
                <h3>Keterangan ▷</h3>
                <p>Validasi pengajuan Judul Skripsi yang akan diambil oleh mahasiswa.</p>
            </div>

            <!-- nama Mahasiswa -->
        <table>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>SEMESTER</th>
                <th>JUDUL</th>
                <th colspan="2">VALIDASI</th>
            </tr>
            <tr>
                <td >1</td>
                <td>210411100015</td>
                <td>Ralyna Aditya Putri</td>
                <td>7</td>
                <td>Pengaruh Media Sosial Terhadap Perilaku Konsumsi Remaja</td>
                <td>
                    <button class="accept">Accept</button>
                </td>
                <td>
                    <button class="tolak">Tolak</button>
                </td>
            </tr>
        </table>
        </main>
    </div>

<script src="val-khs-dosen.js"></script>
</body>

</html>