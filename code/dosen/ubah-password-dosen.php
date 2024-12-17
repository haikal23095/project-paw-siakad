<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ubah-password-dosen.css">
</head>
<body>
        <div class="container">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="profile-section">
                    <div class="avatar"></div>
                    <p>Nama User & nim</p>
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
        </div>
        <div class="main-content">
            <div class="header">
                <h1>UBAH PASSWORD</h1>
                <a href="../logout.php" class="logout">Log Out</a>
            </div>

        <!-- Keterangan -->
        <div class="keterangan">
            <p>
                <strong>Keterangan</strong>
                <span class="arrow">▶</span>
            </p>
            <p>
                Ubah Password dapat digunakan untuk merubah password lama menjadi password baru. <br>
                Jika anda lupa password anda, silahkan menghubungi bagian akademik untuk mendapatkan password baru.
            </p>
        </div>

            <!-- Form Ubah Password -->
            <div class="form-ubah-password">
                <h2>Form ubah password</h2>
                <table>
                    <tr>
                        <td>Password Lama</td>
                        <td><input type="password" placeholder="Masukkan password lama"></td>
                    </tr>
                    <tr>
                        <td>Password Baru</td>
                        <td><input type="password" placeholder="Masukkan password baru"></td>
                    </tr>
                    <tr>
                        <td>Tulis Ulang Password Baru</td>
                        <td><input type="password" placeholder="Ulangi password baru"></td>
                    </tr>
                </table>
                <button class="submit-button">Simpan</button>
            </div>
        <script src="../js/script.js"></script>
</body>
</html>
