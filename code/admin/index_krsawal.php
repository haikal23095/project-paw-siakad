<?php 
include('../mahasiswa/config.php');

$sql = "SELECT Nama_User FROM User WHERE Level = 'admin' LIMIT 1";
$result = $conn->query($sql);

$nama_admin = "Admin"; // Default jika tidak ada data

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama_admin = $row['Nama_User'];
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link rel="stylesheet" href="../css/style_krs_awal.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-section">
                <div class="avatar"></div>
                <p><?php echo htmlspecialchars($nama_admin); ?></p>
            </div>
            <nav class="menu">
                <ul>
                    <a href="../admin/index.php"><li><img src="../assets/icon-sidebar/mahasiswa/dashboard.png" alt="../admin/index.php"><span>Dashboard</span></li></a>
                    <a href="../admin/index_kelolaakunawal.php"><li><img src="../assets/icon-sidebar/admin/profil pengguna.png" alt="../admin/index.php"><span>Kelola Akun</span></li></a>
                    <a href="../admin/index_kalender.php"><li><img src="../assets/icon-sidebar/admin/kalender akademik.png" alt="kalender akademik"><span>Kelola Kalender Akademik</span></li></a>
                    <a href="../admin/index_krsawal.php"><li><img src="../assets/icon-sidebar/admin/krs.png" alt="../admin/index.php"><span>Kelola KRS</span></li></a>
                    <a href="../admin/index_jadwalkrs.php"><li><img src="../assets/icon-sidebar/admin/krs.png" alt="../admin/index.php"><span>Kelola Jadwal KRS</span></li></a>
                    <a href="../admin/index_.php"><li><img src="../assets/icon-sidebar/admin/krs.png" alt="../admin/index.php"><span>Kelola Pengumuman</span></li></a>
                    <a href="../admin/index.php"><li><img src="../assets/icon-sidebar/admin/krs.png" alt="../admin/index.php"><span>Kelola Diskusi</span></li></a>
                    <a href="../admin/index.php"><li><img src="../assets/icon-sidebar/admin/krs.png" alt="../admin/index.php"><span>Kelola Pesan</span></li></a>
                    <a href="../admin/index.php"><li><img src="../assets/icon-sidebar/mahasiswa/khs.png" alt="../admin/index.php"><span>Kelola KHS</span></li></a>
                    <a href="../admin/kelola ukt.php"><li><img src="../assets/icon-sidebar/admin/kelola ukt.png" alt="../admin/index.php"><span>Kelola UKT</span></li></a>
                    <a href="../admin/kelola matkul.php"><li><img src="../assets/icon-sidebar/admin/info matakuliah.png" alt="../admin/index.php"><span>Kelola Informasi Matakuliah</span></li></a>
                    <a href="../admin/index_informasiakademik.php"><li><img src="../assets/icon-sidebar/admin/info akademik.png" alt="../admin/index.php"><span>Kelola Informasi Akademik</span></li></a>
                    <a href="../admin/index.php"><li><img src="../assets/icon-sidebar/mahasiswa/faq.png" alt="../admin/index.php"><span>Kelola FAQ</span></li></a>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main>
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <h1>Kartu Rencana Studi</h1>
                <a href="../logout.php" class="logout">Log Out</a>
            </header>
            <section class="welcome-message">
                <p>
                Informasi Matakuliah Ditawarkan berisi seluruh matakuliah yang ditawarkan pada semester aktif. Dari seluruh matakuliah yang terdapat pada daftar, setiap matakuliah mempunyai aturan tersendiri bergantung pada program studi, kurikulum, dan aturan akademik lainnya. Untuk lebih jelasnya, anda dapat melihat detail kelas
                </p>
            </section>
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
                <a href="../admin/index.php"><li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 1</span>
                    <table border="1" class="table-matakuliah">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <div class="actions">
                        <a href="index_krs_tambahdata.php"><button class="add">Tambah</button></a>
                        <button class="remove">Hapus</button>
                    </div>
                </li></a>
                <a href="../admin/index.php"><li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 2</span>
                    <table border="1" class="table-matakuliah">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <div class="actions">
                        <a href="index_krs_tambahdata.php"><button class="add">Tambah</button></a>
                        <button class="remove">Hapus</button>
                    </div>
                </li></a>
                <a href="../admin/index.php"><li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 3</span>
                    <table border="1" class="table-matakuliah">
                    <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <div class="actions">
                        <a href="index_krs_tambahdata.php"><button class="add">Tambah</button></a>
                        <button class="remove">Hapus</button>
                    </div>
                </li></a>
                <a href="../admin/index.php"><li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 4</span>
                    <table border="1" class="table-matakuliah">
                    <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <div class="actions">
                        <a href="index_krs_tambahdata.php"><button class="add">Tambah</button></a>
                        <button class="remove">Hapus</button>
                    </div>
                </li></a>
                <a href="../admin/index.php"><li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 5</span>
                    <table border="1" class="table-matakuliah">
                    <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <div class="actions">
                        <a href="index_krs_tambahdata.php"><button class="add">Tambah</button></a>
                        <button class="remove">Hapus</button>
                    </div>
                </li></a>
                <a href="../admin/index.php"><li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 6</span>
                    <table border="1" class="table-matakuliah">
                    <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <div class="actions">
                        <a href="index_krs_tambahdata.php"><button class="add">Tambah</button></a>
                        <button class="remove">Hapus</button>
                    </div>
                </li></a>
                <a href="../admin/index.php"><li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 7</span>
                    <table border="1" class="table-matakuliah">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <div class="actions">
                        <a href="index_krs_tambahdata.php"><button class="add">Tambah</button></a>
                        <button class="remove">Hapus</button>
                    </div>
                </li></a>
                <a href="../admin/index.php"><li>
                    <span class="dropdown-matakuliah">&#9655</span><span>Paket Semester 8</span>
                    <table border="1" class="table-matakuliah">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Matakuliah</td>
                                <td>Nama Dosen</td>
                                <td>Kelas</td>
                                <td>SKS</td>
                            </tr>
                        </thead>
                        <tbody>
        
                        </tbody>
                    </table>
                    <div class="actions">
                        <a href="index_krs_tambahdata.php"><button class="add">Tambah</button></a>
                        <button class="remove">Hapus</button>
                    </div>
                </li></a>
                
            </ul>
            
        </main>
    </div>

    <script src="../js/script_krs_awal.js"></script>
</body>
</html>
