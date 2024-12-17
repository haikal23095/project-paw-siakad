<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link rel="stylesheet" href="../css/style_faq_mahasiswa.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-section">
                <div class="avatar"></div>
                <p>nama user & nim</p>
            </div>
            <nav class="menu">
                <ul>
                    <li><img src="../asset/icon-sidebar/mahasiswa/dashboard.png" alt=""><span>Dashboard</span></li>
                    <li><img src="../asset/icon-sidebar/mahasiswa/panduan.png" alt=""><span>panduan</span></li>
                    <li><img src="../asset/icon-sidebar/mahasiswa/profile.png" alt=""><span>Profile</span></li>
                    <li><img src="../asset/icon-sidebar/mahasiswa/matakuliah.png" alt=""><span>Matakuliah</span></li>
                    <li><img src="../asset/icon-sidebar/mahasiswa/krs.png" alt=""><span>KRS</span></li>
                    <li><img src="../asset/icon-sidebar/mahasiswa/khs.png" alt=""><span>KHS</span></li>
                    <li><img src="../asset/icon-sidebar/mahasiswa/transkip.png" alt=""><span>Transkip Nilai</span></li>
                    <li><img src="../asset/icon-sidebar/mahasiswa/skripsi.png" alt=""><span>Pengajuan Judul Skripsi</span></li>
                    <li><img src="../asset/icon-sidebar/mahasiswa/akademik.png" alt=""><span>Akademik</span></li>
                    <li><img src="../asset/icon-sidebar/mahasiswa/Password.png" alt=""><span>Ubah Password</span></li>
                    <li><img src="../asset/icon-sidebar/mahasiswa/faq.png" alt=""><span>FAQ</span></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content --> 
        <main>
            <header class="header">
                <h1 id="header1">FAQ Mahasiswa</h1>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <button class="logout-btn">Log Out</button>
            </header>
            ,<section class="header-section">
                <h2>Universitas Trunojoyo Madura</h2>
                <p>Frequently Asked Questions mahasiswa adalah pertanyaan-pertanyaan yang sering kami tanyakan mengenai informasi yang ada di Universitas Trunojoyo Madura.</p>
            </section>
            <section class="form-section">
                <h3>Silahkan mengajukan pertanyaan yang belum ditanyakan</h3>
                <textarea placeholder="Tulis pertanyaan Anda..."></textarea>
                <button id="button">Kirim</button>
            </section>

            <section class="announcement-section">
                <h3>Pengumuman</h3>
                <div class="announcement-cards">
                    <div class="card">Informasi mahasiswa<br><small>belum ada informasi untuk kategori ini</small></div>
                    <div class="card">Informasi mahasiswa<br><small>belum ada informasi untuk kategori ini</small></div>
                    <div class="card">Informasi mahasiswa<br><small>belum ada informasi untuk kategori ini</small></div>
                    <div class="card">Informasi mahasiswa<br><small>belum ada informasi untuk kategori ini</small></div>
                </div>
            </section>
        </main>
    </div>

    <script src="js/script_faq_mahasiswa.js"></script>
</body>
</html>
