<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/krs-tambah.css">
</head>
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
                    <li class="active"><img src="../assets/icon-sidebar/mahasiswa/krs.png" alt=""><span>KRS</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/khs.png" alt=""><span>KHS</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/transkip.png" alt=""><span>Transkip Nilai</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/skripsi.png" alt=""><span>Pengajuan Judul Skripsi</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/akademik.png" alt=""><span>Akademik</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/password.png" alt=""><span>Ubah Password</span></li>
                    <li><img src="../assets/icon-sidebar/mahasiswa/faq.png" alt=""><span>FAQ</span></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>KARTU RENCANA STUDI</h1>
                <a href="../logout.php" class="logout">Log Out</a>
            </div>
            <div class="info-section">
            <div class="description">
        <p>
            <strong>Keterangan</strong>
            <span class="arrow">▶</span>
        </p>
        <p>
        Kartu Rencana Studi merupakan fasilitas pengisian KRS secara online. Fasilitas KRS Online ini hanya dapat digunakan pada saat masa KRS atau masa revisi KRS. Mahasiswa dapat memilih matakuliah yang ingin diambil sesuai dengan jatah sks yang dimiliki dan matakuliah yang ditawarkan. Setelah melakukan pengisian KRS, mahasiswa dapat mencetak KRS tersebut agar dapat ditandatangani oleh dosen pembimbingnya masing-masing.
        </p>
    </div>
            </div>
            <div class="student-info">
                <table>
                    <tr>
                        <td>NIM</td>
                        <td>: 2304565635637</td>
                        <td>Program Studi</td>
                        <td>: Teknik Informatika</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: Unknown</td>
                        <td>Periode</td>
                        <td>: Gasal 2024/2025</td>
                    </tr>
                    <tr>
                        <td>IPK</td>
                        <td>: 4.00</td>
                        <td>Dosen Wali</td>
                        <td>: -</td>
                    </tr>
                    <tr>
                        <td>Maksimum SKS</td>
                        <td>: 24.00</td>
                    </tr>
                </table>
            </div>
            <div class="course-list">
                <table>
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Mata Kuliah</th>
                            <th>Kelas</th>
                            <th>SKS</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>IF3221</td>
                            <td>Cyber Security</td>
                            <td>A</td>
                            <td>3</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>IF3222</td>
                            <td>Object Oriented Programming</td>
                            <td>B</td>
                            <td>3</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>IF334</td>
                            <td>Data Structure</td>
                            <td>G</td>
                            <td>3</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
                <div class="actions">
                <button class="add-button" style="background-color: red; color: white; padding: 10px;" 
                        onclick="window.location.href='krs-matakuliah.php';">
                    Tambah
                </button>
                <button class="delete-button" style="background-color: blue; color: white; padding: 10px;">Hapus</button>

                </div>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
