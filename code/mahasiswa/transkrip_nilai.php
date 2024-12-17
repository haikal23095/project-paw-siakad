<?php
include('config.php');

// Ambil NIM mahasiswa dari URL atau parameter lainnya
$nim = isset($_GET['nim']) ? $_GET['nim'] : '';

if ($nim) {
    // **Query 1: Ambil data mahasiswa dan program studi**
    $sql_mahasiswa = "
        SELECT 
            m.NIM, 
            m.Nama_Mahasiswa, 
            p.Nama_Prodi 
        FROM 
            Mahasiswa m
        INNER JOIN 
            Prodi p 
        ON 
            m.ID_Prodi = p.ID_Prodi
        WHERE 
            m.NIM = ?
    ";

    $stmt_mahasiswa = $conn->prepare($sql_mahasiswa);
    $stmt_mahasiswa->bind_param("i", $nim);
    $stmt_mahasiswa->execute();
    $result_mahasiswa = $stmt_mahasiswa->get_result();

    // Periksa apakah data mahasiswa ditemukan
    if ($result_mahasiswa->num_rows > 0) {
        $row_mahasiswa = $result_mahasiswa->fetch_assoc();
        $nama_mahasiswa = $row_mahasiswa['Nama_Mahasiswa'];
        $nim_mahasiswa = $row_mahasiswa['NIM'];
        $prodi = $row_mahasiswa['Nama_Prodi'];
    } else {
        $nama_mahasiswa = "Tidak ditemukan";
        $nim_mahasiswa = "Tidak ditemukan";
        $prodi = "Tidak ditemukan";
    }

    $stmt_mahasiswa->close();

    // **Query 2: Ambil data transkrip nilai berdasarkan NIM**
    $sql_transkrip = "
        SELECT 
            Semester_Transkrip, 
            Kode_Matakuliah, 
            Nama_Matkuliah_Transkrip, 
            SKS_Transkrip, 
            Nilai 
        FROM 
            Transkip_nilai
        WHERE 
            NIM = ?
        ORDER BY 
            Semester_Transkrip, Kode_Matakuliah
    ";

    $stmt_transkrip = $conn->prepare($sql_transkrip);
    $stmt_transkrip->bind_param("i", $nim);
    $stmt_transkrip->execute();
    $result_transkrip = $stmt_transkrip->get_result();

    // Simpan data transkrip nilai untuk ditampilkan
    $data_transkrip = [];
    $total_sks = 0;
    $jumlah_mmatkul = 0;

    if ($result_transkrip->num_rows > 0) {
        while ($row_transkrip = $result_transkrip->fetch_assoc()) {
            $data_transkrip[] = $row_transkrip;
            $total_sks += $row_transkrip['SKS_Transkrip'];
            $jumlah_mmatkul++;
        }
    } else {
        $data_transkrip = null; // Tidak ada data transkrip
    }

    $stmt_transkrip->close();
    $conn->close();
} else {
    echo "NIM tidak valid.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link rel="stylesheet" href="../css/transkrip_nilai.css">
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
                    <a href=""><li><img src="../assets/icon-sidebar/mahasiswa/dashboard.png" alt=""><span>Dashboard</span></li></a>
                    <a href="panduan_mahasiswa.php"><li><img src="../assets/icon-sidebar/mahasiswa/panduan.png" alt=""><span>Panduan</span></li></a>
                    <a href=""><li><img src="../assets/icon-sidebar/mahasiswa/profile.png" alt=""><span>Profile</span></li></a>
                    <a href=""><li><img src="../assets/icon-sidebar/mahasiswa/matakuliah.png" alt=""><span>Matakuliah</span></li></a>
                    <a href=""><li><img src="../assets/icon-sidebar/mahasiswa/krs.png" alt=""><span>KRS</span></li></a>
                    <a href="khs_mahasiswa.php"><li><img src="../assets/icon-sidebar/mahasiswa/khs.png" alt=""><span>KHS</span></li></a>
                    <li><a href="transkrip_nilai.php"><img src="../assets/icon-sidebar/mahasiswa/transkip.png" alt=""><span>Transkrip Nilai</span></a></li>
                    <a href="pengajuan_judul_skripsi.php"><li><img src="../assets/icon-sidebar/mahasiswa/skripsi.png" alt=""><span>Pengajuan Judul Skripsi</span></li></a>
                    <a href="informasi_akademik_mahasiswa.php"><li><img src="../assets/icon-sidebar/mahasiswa/akademik.png" alt=""><span>Akademik</span></li></a>
                    <a href=""><li><img src="../assets/icon-sidebar/mahasiswa/password.png" alt=""><span>Ubah Password</span></li></a>
                    <a href=""><li><img src="../assets/icon-sidebar/mahasiswa/faq.png" alt=""><span>FAQ</span></li></a>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h1>Transkrip Nilai</h1>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="loginpage.php" class="logout">Log Out</a>
            </header>
            <section class="welcome-message">
                <p>
                Transkrip Nilai berisi informasi nilai hasil studi mahasiswa mulai 
                dari semester awal sampai dengan semester terakhir mahasiswa. 
                Transkrip ini dapat dicetak dalam bentuk transkrip satu halaman.
                </p>
            </section>

            <div class="content-grid">
                <!-- Profil -->
                <div class="user-profile-transkrip-nilai">
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
                    </table>
                </div>
            </div>

            <div class="table-transkrip-nilai">
                <table border="2">
                    <tr>
                        <th>NO</th>
                        <th>SEMESTER</th>
                        <th>KODE</th>
                        <th>MATA KULIAH</th>
                        <th>SKS</th>
                        <th>NILAI</th>
                    </tr>
                    <?php if (!empty($data_transkrip)): ?>
                        <?php $no = 1; ?>
                        <?php foreach ($data_transkrip as $transkrip): ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo htmlspecialchars($transkrip['Semester_Transkrip']); ?></td>
                                <td><?php echo htmlspecialchars($transkrip['Kode_Matakuliah']); ?></td>
                                <td><?php echo htmlspecialchars($transkrip['Nama_Matkuliah_Transkrip']); ?></td>
                                <td><?php echo htmlspecialchars($transkrip['SKS_Transkrip']); ?></td>
                                <td><?php echo htmlspecialchars($transkrip['Nilai']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">Data transkrip tidak ditemukan</td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>
            <div class="new-content-grid">
                <div class="prestasi-akademik">
                    <table>
                        <tr>
                            <td><b>Prestasi Akademik</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Jumlah SKS diambil</td>
                            <td>: <?php echo htmlspecialchars($total_sks); ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah mata kuliah diambil</td>
                            <td>: <?php echo htmlspecialchars($jumlah_mmatkul); ?></td>
                        </tr>
                        <tr>
                            <td>IP Kumulatif</td>
                            <td>: 0.00</td>
                        </tr>
                    </table>
                </div>

                <div class="keterangan-nilai">
                    <table>
                        <p><b>Keterangan Nilai</b></p>
                        <tr>
                            <td>A</td>
                            <td>: 4.00</td>
                            <td></td>
                            <td>C</td>
                            <td>: 2.00</td>
                        </tr>
                        <tr>
                            <td>B+</td>
                            <td>: 3.50</td>
                            <td></td>
                            <td>D+</td>
                            <td>: 1.50</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>: 3.00</td>
                            <td></td>
                            <td>D</td>
                            <td>: 1.00</td>
                        </tr>
                        <tr>
                            <td>C+</td>
                            <td>: 2.50</td>
                            <td></td>
                            <td>E</td>
                            <td>: 0.00</td>
                        </tr>
                    </table>
                </div>
            </div>
            <a href="cetak_transkrip.php"><button class="cetak">Cetak</button></a>
        </main>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>
