<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/profile-dosen.css">
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
                <h1>PROFILE DOSEN</h1>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="../logout.php" class="logout">Log Out</a>
            </header>

            <div class="kolom">
                <table border="1">
                    <tr>
                        <th>Data Utama ▷</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td class="depan">NIP</td>
                        <td>: 1234567890</td>
                    </tr>
                    <tr>
                        <td class="depan">Nama</td>
                        <td>: Wiwik Ainun jannah, s.kom, M.kom</td>
                    </tr>
                    <tr>
                        <td class="depan">Tempat Tanggal Lahir</td>
                        <td>: Nganjuk, 17 Agustus 2005</td>
                    </tr>
                    <tr>
                        <td class="depan">Prodi</td>
                        <td>: Teknik Informatika</td>
                    </tr>
                    <tr>
                        <td class="depan">Fakultas</td>
                        <td>: Teknik</td>
                    </tr>
                </tabel>
            </div>

            <div class="kolom">
                <table border="1">
                    <tr>
                        <th>Data Tambahan ▷</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td class="depan">Jenis Kelamin</td>
                        <td>: Perempuan</td>
                    </tr>
                    <tr>
                        <td class="depan">Agama</td>
                        <td>: Kristen</td>
                    </tr>
                    <tr>
                        <td class="depan">e-mail</td>
                        <td>: wiwik17@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="depan">Status Kewarganegaraan</td>
                        <td>: Indonesia</td>
                    </tr>
                    <tr>
                        <td class="depan">Alamat</td>
                        <td>: Jl. Gatot Subroto, Ringinanom - Nganjuk</td>
                    </tr>
                    <tr>
                        <td class="depan">Telp</td>
                        <td>: 085775435201</td>
                    </tr>
                </tabel>
            </div>

            <div class="foto">
                <ul>
                    <li><img src="../ikon/fot.jpg" alt=""></li>
                    <li><a href="#">Change Foto</a></li>
                    <li><p>*Ubah foto sesuai dengan ketentuan*</p></li>
                </ul>
            </div>
        </main>
    </div>

    <script src="profile-dosen.js"></script>
</body>
</html>