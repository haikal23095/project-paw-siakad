<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link rel="stylesheet" href="../css/ubah-password.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-section">
                <a href="profile-page.php"><div class="avatar"></div></a>
                <p>nama user & nim</p>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="index.php"><img src="../assets/icon-sidebar/mahasiswa/dashboard.png" alt=""><span>Dashboard</span></a></li>
                    <li><a href=""><img src="../assets/icon-sidebar/mahasiswa/panduan.png" alt=""><span>Panduan</span></a></li>
                    <li><a href=""><img src="../assets/icon-sidebar/mahasiswa/profile.png" alt=""><span>Profile</span></a></li>
                    <li><a href="informasi-matakuliah.php"><img src="../assets/icon-sidebar/mahasiswa/matakuliah.png" alt=""><span>Informasi Matakuliah</span></a></li>
                    <li><a href=""><img src="../assets/icon-sidebar/mahasiswa/krs.png" alt=""><span>KRS</span></a></li>
                    <li><a href=""><img src="../assets/icon-sidebar/mahasiswa/khs.png" alt=""><span>KHS</span></a></li>
                    <li><a href=""><img src="../assets/icon-sidebar/mahasiswa/transkip.png" alt=""><span>Transkip Nilai</span></a></li>
                    <li><a href=""><img src="../assets/icon-sidebar/mahasiswa/skripsi.png" alt=""><span>Pengajuan Judul Skripsi</span></a></li>
                    <li><a href=""><img src="../assets/icon-sidebar/mahasiswa/akademik.png" alt=""><span>Akademik</span></a></li>
                    <li><a href="ubah-password.php"><img src="../assets/icon-sidebar/mahasiswa/password.png" alt=""><span>Ubah Password</span></a></li>
                    <li><a href=""><img src="../assets/icon-sidebar/mahasiswa/faq.png" alt=""><span>FAQ</span></a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h2>Ubah Password</h2>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="#" class="logout">Log Out</a>
            </header>
            <div class="blok-konten">
                <h4>Keterangan &#9655</h4>
                <p>Ubah Password dapat digunakan untuk merubah password lama menjadi password baru. 
                Jika anda lupa password anda, silahkan menghubungi bagian akademik untuk mendapatkan password baru.</p>
                <form action="ubah-password.php" method="POST" class="form-ubah-password">
                    <h4>Form Ubah Password</h4>
                    <div class="wrap-form-part">
                        <label for="pass-old">Password Lama :</label>
                        <input type="password" name="pass-old" id="pass-old">
                    </div>
    
                    <div class="wrap-form-part">
                        <label for="pass-new">Password Baru :</label>
                        <input type="password" name="pass-new" id="pass-new">
                    </div>
                    
                    <div class="wrap-form-part">
                        <label for="pass-new2">Konfirmasi Password Baru :</label>
                        <input type="password" name="pass-new2" id="pass-new2">
                    </div>
                    
                    <input type="submit" value="Simpan" name="submit" id="submit">

                </form>

            </div>
        </main>
    </div>

    <script src="../js/index-mahasiswa.js"></script>
</body>
</html>