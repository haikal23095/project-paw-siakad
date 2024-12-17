<?php
include('config.php');

// Ambil NIM mahasiswa dari URL atau parameter lainnya
$nim = isset($_GET['nim']) ? $_GET['nim'] : '';

// Query untuk mengambil data mahasiswa
$sql = "SELECT NIM, Nama_Mahasiswa FROM mahasiswa WHERE NIM = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $nim);
$stmt->execute();
$result = $stmt->get_result();

// Periksa apakah data ditemukan
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama_mahasiswa = $row['Nama_Mahasiswa'];
    $nim_mahasiswa = $row['NIM'];
} else {
    $nama_mahasiswa = "Tidak ditemukan";
    $nim_mahasiswa = "Tidak ditemukan";
}
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link rel="stylesheet" href="informasi_akademik_mahasiswa.css">
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
                    <a href=""><li><img src="./asset/icon_sidebar/mahasiswa/dashboard.png" alt=""><span>Dashboard</span></li></a>
                    <li><a href="panduan_mahasiswa.php"><img src="./asset/icon_sidebar/mahasiswa/panduan.png" alt=""><span>Panduan</span></a></li>
                    <a href=""><li><img src="./asset/icon_sidebar/mahasiswa/profile.png" alt=""><span>Profile</span></li></a>
                    <a href=""><li><img src="./asset/icon_sidebar/mahasiswa/matakuliah.png" alt=""><span>Matakuliah</span></li></a>
                    <a href=""><li><img src="./asset/icon_sidebar/mahasiswa/krs.png" alt=""><span>KRS</span></li></a>
                    <a href="khs_mahasiswa.php"><li><img src="./asset/icon_sidebar/mahasiswa/khs.png" alt=""><span>KHS</span></li></a>
                    <a href="transkrip_nilai.php"><li><img src="./asset/icon_sidebar/mahasiswa/transkip.png" alt=""><span>Transkrip Nilai</span></li></a>
                    <a href="pengajuan_judul_skripsi.php"><li><img src="./asset/icon_sidebar/mahasiswa/skripsi.png" alt=""><span>Pengajuan Judul Skripsi</span></li></a>
                    <li><a href="informasi_akademik_mahasiswa.php"><img src="./asset/icon_sidebar/mahasiswa/akademik.png" alt=""><span>Akademik</span></a></li>
                    <a href=""><li><img src="./asset/icon_sidebar/mahasiswa/password.png" alt=""><span>Ubah Password</span></li></a>
                    <a href=""><li><img src="./asset/icon_sidebar/mahasiswa/faq.png" alt=""><span>FAQ</span></li></a>
                </ul>
            </nav>

        </aside>
        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h1>Panduan</h1>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="../logout.php" class="logout">Log Out</a>
            </header>
            <section class="welcome-message">
                <p>
                    informasi akademik ini berisi informasi informasi yang berkaitan dengan mahasiswa yang bersangkutan
                </p>
            </section>
            <div class="content-grid">
                <!-- Profil -->
                <div class="user-profile-khs">
                    <form method="POST" action="">
                        <table>
                            <tr>
                                <td>
                                    <img src="./asset/icon_sidebar/warning.png" class="warning" alt="">
                                    data tidak ditemukan
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>
