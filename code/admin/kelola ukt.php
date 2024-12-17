<!DOCTYPE html>
<html lang="id">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/kelola-ukt.css">
    
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
        <div class="main-content">
    <div class="header">
        <h1>Kelola UKT</h1>
        <a href="../logout.php" class="logout">Log Out</a>
    </div>

    <!-- Filter Section -->
    <div class="filter-section">
    <div class="filter-item">
        <label for="tahun-ajaran">
            <img src="../assets/img/ukt.png" alt="Tahun Ajaran">
        </label>
        <select id="tahun-ajaran" >
            <option value=""> Tahun Ajaran</option>
            <option value="2024">2024</option>
            <option value="2023">2023</option>
        </select>
    </div>
    <div class="filter-item">
        <label for="program-studi">
            <img src="../assets/img/ukt1.png" alt="Program Studi">
        </label>
        <select id="program-studi">
            <option value="">Program Studi</option>
            <option value="TI">Teknik Informatika</option>
            <option value="SI">Sistem Informasi</option>
        </select>
    </div>
    <button class="lihat-button">Lihat</button>
</div>


    <!-- Table Section -->
    <div class="table-section">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Besaran UKT</th>
                    <th>Tanggal</th>
                    <th>ID</th>
                    <th>Metode</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>230411100235</td>
                    <td>Anindita Pramudia Sari</td>
                    <td>Rp. 3.000.000</td>
                    <td>05 Aug 2024</td>
                    <td>AeI23UIdWe</td>
                    <td>QRIS</td>
                    <td class="success">Success</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>230411000045</td>
                    <td>Riska Rahmawati</td>
                    <td>Rp. 1.250.000</td>
                    <td>06 Aug 2024</td>
                    <td>esd345hi99k</td>
                    <td>TF Bank</td>
                    <td class="pending">Pending</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>230411000078</td>
                    <td>Narasnama Anindhiya</td>
                    <td>Rp. 2.345.000</td>
                    <td>07 Aug 2024</td>
                    <td>tpjhr34qwel</td>
                    <td>Card</td>
                    <td class="pending">Pending</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    </div>
    <script src="../js/script.js"></script>
</body>

</html>
