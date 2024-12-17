<!DOCTYPE html>
<html lang="id">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/krs-matakuliah.css">
    
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
        <div class="main-content">
  <!-- Header -->
  <div class="header">
    <h1>KARTU RENCANA STUDI</h1>
    <a href="../logout.php" class="logout">Log Out</a>
  </div>

  <!-- Keterangan -->
  <div class="description">
        <p>
            <strong>Keterangan</strong>
            <span class="arrow">▶</span>
        </p>
        <p>
        Silakan pilih salah satu mata kuliah yang tersedia, lalu tekan tombol 'Tambahkan' untuk menambahkannya ke KRS Anda
        </p>
    </div>


  <!-- Paket Semester Links -->
<div class="semester-links">
    <ul>
        <li><a href="#" data-semester="1" class="semester-link">paket semester 1</a></li>
                <div class="table-container" id="semester-1" style="display: none;">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Code</th>
                        <th>Matakuliah</th>
                        <th>SKS</th>
                        <th>Jadwal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>if34i</td>
                        <td>data structure</td>
                        <td>2</td>
                        <td>Senin, 10:00-12:00</td>
                        <td><button class="btn-tambahkan">Tambahkan</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>if34i</td>
                        <td>data structure</td>
                        <td>2</td>
                        <td>Senin, 10:00-12:00</td>
                        <td><button class="btn-tambahkan">Tambahkan</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>if34i</td>
                        <td>data structure</td>
                        <td>2</td>
                        <td>Senin, 10:00-12:00</td>
                        <td><button class="btn-tambahkan">Tambahkan</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>if34i</td>
                        <td>data structure</td>
                        <td>2</td>
                        <td>Senin, 10:00-12:00</td>
                        <td><button class="btn-tambahkan">Tambahkan</button></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>if34i</td>
                        <td>data structure</td>
                        <td>2</td>
                        <td>Senin, 10:00-12:00</td>
                        <td><button class="btn-tambahkan">Tambahkan</button></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>if34i</td>
                        <td>data structure</td>
                        <td>2</td>
                        <td>Senin, 10:00-12:00</td>
                        <td><button class="btn-tambahkan">Tambahkan</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <li><a href="#" data-semester="2" class="semester-link">paket semester 2</a></li>
                <div class="table-container" id="semester-2" style="display: none;">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Matakuliah</th>
                                <th>SKS</th>
                                <th>Jadwal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>if34i</td>
                                <td>data structure</td>
                                <td>2</td>
                                <td>Senin, 10:00-12:00</td>
                                <td><button class="btn-tambahkan">Tambahkan</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>if34i</td>
                                <td>data structure</td>
                                <td>2</td>
                                <td>Senin, 10:00-12:00</td>
                                <td><button class="btn-tambahkan">Tambahkan</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>if34i</td>
                                <td>data structure</td>
                                <td>2</td>
                                <td>Senin, 10:00-12:00</td>
                                <td><button class="btn-tambahkan">Tambahkan</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>if34i</td>
                                <td>data structure</td>
                                <td>2</td>
                                <td>Senin, 10:00-12:00</td>
                                <td><button class="btn-tambahkan">Tambahkan</button></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>if34i</td>
                                <td>data structure</td>
                                <td>2</td>
                                <td>Senin, 10:00-12:00</td>
                                <td><button class="btn-tambahkan">Tambahkan</button></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>if34i</td>
                                <td>data structure</td>
                                <td>2</td>
                                <td>Senin, 10:00-12:00</td>
                                <td><button class="btn-tambahkan">Tambahkan</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        <li><a href="#" data-semester="3" class="semester-link">paket semester 3</a></li>
        <li><a href="#" data-semester="4" class="semester-link">paket semester 4</a></li>
        <li><a href="#" data-semester="5" class="semester-link">paket semester 5</a></li>
        <li><a href="#" data-semester="6" class="semester-link">paket semester 6</a></li>
        <li><a href="#" data-semester="7" class="semester-link">paket semester 7</a></li>
        <li><a href="#" data-semester="8" class="semester-link">paket semester 8</a></li>
    </ul>
</div>
</div>

<script src="../js/krs-matakuliah.js"></script>
</body>

</html>
