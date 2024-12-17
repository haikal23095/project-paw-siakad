<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dosen-akademik.css">
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
                <h1>AKADEMIK</h1>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="../logout.php" class="logout">Log Out</a>
            </header>

            <!-- Keterangan -->
            <div class="description">
                <h3>Keterangan ▷</h3>
                <p>Informasi Akademik tentang Hari, Jam dan juga kelas dosen untuk melakukan Masa belajar mengajar terhadap mahasiswa.</p>
            </div>
        
    <!-- plih program studi -->
    <form action="informasi-matakuliah.php" method="POST" id="prodi">
        <label for="opt-prodi">Program Studi</label>
            <select name="opt-prodi" id="opt-prodi">
                <option value="1">TEKNIK INFORMATIKA</option>
                <option value="2">TEKNIK MESIN</option>
                <option value="3">TEKNIK INDUSTRI</option>
                <option value="4">TEKNIK MEKATRONIKA</option>
                <option value="5">TEKNIK ELEKTRO</option>
                <option value="6">SISTEM INFRORMASI</option>
            </select>
            <button type="submit">Lihat</button>
    </form>

    <!-- Paket matakuliah setiap semester -->
    <ul class="paket-semester">
        <li>
            <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 1</span>
            <table border="1" class="table-matakuliah">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>W/P</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
        </li>
                <li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 2</span>
                    <table border="1" class="table-matakuliah">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>W/P</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </li>
                <li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 3</span>
                    <table border="1" class="table-matakuliah">
                    <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>W/P</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </li>
                <li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 4</span>
                    <table border="1" class="table-matakuliah">
                    <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>W/P</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </li>
                <li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 5</span>
                    <table border="1" class="table-matakuliah">
                    <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>W/P</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </li>
                <li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 6</span>
                    <table border="1" class="table-matakuliah">
                    <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>W/P</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </li>
                <li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 7</span>
                    <table border="1" class="table-matakuliah">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>W/P</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </li>
                <li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 8</span>
                    <table border="1" class="table-matakuliah">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>W/P</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
        
                        </tbody>
                    </table>
                </li>
                
            </ul>

            </main>
    </div>

<script src="dosen-akademik.js"></script>
</body>

</html>