<?php
include('config.php');

// Ambil NIM mahasiswa dari URL atau parameter lainnya
$nim = isset($_GET['nim']) ? $_GET['nim'] : '';

$nama_mahasiswa = $nim_mahasiswa = $prodi = $semester = "Tidak ditemukan";
$data_transkrip = [];

if ($nim) {
    // Query untuk mengambil data mahasiswa
    $sql_mahasiswa = "SELECT m.NIM, m.Nama_Mahasiswa, p.Nama_Prodi, m.SEMESTER_Mahasiswa 
                      FROM Mahasiswa m 
                      INNER JOIN Prodi p ON m.ID_Prodi = p.ID_Prodi 
                      WHERE m.NIM = ?";
    $stmt_mahasiswa = $conn->prepare($sql_mahasiswa);
    $stmt_mahasiswa->bind_param("i", $nim);
    $stmt_mahasiswa->execute();
    $result_mahasiswa = $stmt_mahasiswa->get_result();

    // Jika data mahasiswa ditemukan
    if ($result_mahasiswa->num_rows > 0) {
        $row_mahasiswa = $result_mahasiswa->fetch_assoc();
        $nama_mahasiswa = $row_mahasiswa['Nama_Mahasiswa'];
        $nim_mahasiswa = $row_mahasiswa['NIM'];
        $prodi = $row_mahasiswa['Nama_Prodi'];
        $semester = $row_mahasiswa['SEMESTER_Mahasiswa'];
    }
    $stmt_mahasiswa->close();

    // Query untuk mengambil data transkrip nilai
    $sql_transkrip = "SELECT Kode_Matakuliah, Nama_Matkuliah_Transkrip, Semester_Transkrip, SKS_Transkrip, Nilai 
                      FROM Transkip_nilai 
                      WHERE NIM = ? 
                      ORDER BY Semester_Transkrip, Kode_Matakuliah";
    $stmt_transkrip = $conn->prepare($sql_transkrip);
    $stmt_transkrip->bind_param("i", $nim);
    $stmt_transkrip->execute();
    $result_transkrip = $stmt_transkrip->get_result();

    // Simpan hasil query transkrip nilai ke dalam array
    if ($result_transkrip->num_rows > 0) {
        while ($row_transkrip = $result_transkrip->fetch_assoc()) {
            $data_transkrip[] = $row_transkrip;
        }
    }
    $stmt_transkrip->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link rel="stylesheet" href="../css/khs_mahasiswa.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-section">
                <div class="avatar"></div>
                <p>Nama: <?php echo htmlspecialchars($nama_mahasiswa); ?></p>
                <p>NIM: <?php echo htmlspecialchars($nim_mahasiswa); ?></p>
            </div>
            <nav class="menu">
                <ul>
                    <a href="index.php"><li><img src="../assets/icon-sidebar/mahasiswa/dashboard.png" alt=""><span>Dashboard</span></li></a>
                    <a href="panduan_mahasiswa.php"><li><img src="../assets/icon-sidebar/mahasiswa/panduan.png" alt=""><span>Panduan</span></li></a>
                    <a href="profile_page.php"><li><img src="../assets/icon-sidebar/mahasiswa/profile.png" alt=""><span>Profile</span></li></a>
                    <a href="informasi-matakuliah.php"><li><img src="../assets/icon-sidebar/mahasiswa/matakuliah.png" alt=""><span>Matakuliah</span></li></a>
                    <a href="krs.php"><li><img src="../assets/icon-sidebar/mahasiswa/krs.png" alt=""><span>KRS</span></li></a>
                    <li><a href="khs_mahasiswa.php"><img src="../assets/icon-sidebar/mahasiswa/khs.png" alt=""><span>KHS</span></a></li>
                    <a href="transkrip_nilai.php"><li><img src="../assets/icon-sidebar/mahasiswa/transkip.png" alt=""><span>Transkrip Nilai</span></li>
                    <a href="pengajuan_judul_skripsi.php"><li><img src="../assets/icon-sidebar/mahasiswa/skripsi.png" alt=""><span>Pengajuan Judul Skripsi</span></li></a>
                    <a href="informasi_akademik_mahasiswa.php"><li><img src="../assets/icon-sidebar/mahasiswa/akademik.png" alt=""><span>Akademik</span></li></a>
                    <a href="ubah-password.php"><li><img src="../assets/icon-sidebar/mahasiswa/password.png" alt=""><span>Ubah Password</span></li></a>
                    <a href="index_faq_mahasiswa.php"><li><img src="../assets/icon-sidebar/mahasiswa/faq.png" alt=""><span>FAQ</span></li></a>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h1>Kartu Hasil Studi</h1>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="../logout.php" class="logout" onclick="return confirm('apakah anda yakin ingin logout')" >Log Out</a>
            </header>
            <section class="welcome-message">
                <p>
                Kartu Hasil Studi merupakan fasilitas yang dapat digunakan 
                untuk melihat hasil studi mahasiswa persemester. 
                Selain dapat dilihat secara online, hasil studi ini juga dapat dicetak.
                </p>
            </section>

            <div class="content-grid">
                <!-- Form Pilih Semester -->
                <div class="user-profile-khs">
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td><label for="semester">Semester</label></td>
                                <td>
                                    <select id="semester" name="semester">
                                      <option value="gasal_23/24" >Gasal 2023/2024</option>
                                      <option value="genap_23/24" >Genap 2023/2024</option>
                                      <option value="gasal_24/25" >Gasal 2024/2025</option>
                                    </select>
                                    <button type="button" class="khs">Lihat</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

            <div class="content-grid">
                <!-- Profil Mahasiswa -->
                <div class="user-profile-khs-nilai">
                    <table>
                        <tr>
                            <td>NIM</td>
                            <td>: <?php echo htmlspecialchars($nim_mahasiswa); ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: <?php echo htmlspecialchars($nama_mahasiswa); ?></td>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td>: <?php echo htmlspecialchars($prodi); ?></td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>: <?php echo htmlspecialchars($semester); ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="table-khs" id="table-khs" style="display: none;">
                <!-- Tabel KHS -->
                <table border="2">
                    <tr>
                        <th>KODE</th>
                        <th>MATA KULIAH</th>
                        <th>KELAS</th>
                        <th>SKS</th>
                        <th>NILAI</th>
                    </tr>
                    <tr><?php if (!empty($data_transkrip)): ?>
                        <?php foreach ($data_transkrip as $index => $transkrip): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($transkrip['Kode_Matakuliah']); ?></td>
                                <td><?php echo htmlspecialchars($transkrip['Nama_Matkuliah_Transkrip']); ?></td>
                                <td> ? </td>
                                <td><?php echo htmlspecialchars($transkrip['SKS_Transkrip']); ?></td>
                                <td><?php echo htmlspecialchars($transkrip['Nilai']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">Data tidak ditemukan.</td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>
            <a href="cetak_khs.php"><button class="cetak">Cetak</button></a>
        </main>
    </div>

    <script src="../js/khs_mahasiswa.js"></script>
</body>
</html>
