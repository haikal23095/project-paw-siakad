<?php
include('config.php');

// Ambil NIM mahasiswa dari URL atau parameter lainnya
$nim = isset($_GET['nim']) ? $_GET['nim'] : '';

// Query untuk mengambil data mahasiswa
$sql = "SELECT m.NIM, m.Nama_Mahasiswa, p.Nama_Prodi FROM mahasiswa m INNER JOIN prodi p ON m.ID_Prodi = p.ID_Prodi WHERE m.NIM = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $nim);
$stmt->execute();
$result = $stmt->get_result();

// Periksa apakah data ditemukan
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama_mahasiswa = $row['Nama_Mahasiswa'];
    $nim_mahasiswa = $row['NIM'];
    $prodi = $row['Nama_Prodi'];
} else {
    $nama_mahasiswa = "Tidak ditemukan";
    $nim_mahasiswa = "Tidak ditemukan";
    $prodi = "Tidak ditemukan";
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
    <link rel="stylesheet" href="cetak_krs.css">
</head>
<body>
    <div class="container-cetak">
        <!-- Main Content -->
        <main class="main-content-cetak">
            <!-- Header -->
            <header class="header-cetak">
                <table>
                    <tr>
                        <td rowspan="3"><img src="./asset/icon_sidebar/Logo_UTM.png" alt="" class="logo-utm"></td>
                    </tr>
                    <tr>
                        <td class="univ">Universitas Trunojoyo Madura</td>
                    </tr>
                    <tr>
                        <td class="fakultas">Fakultas Teknik</td>
                    </tr>
                </table>
            </header>
            <div class="krs-semester">
                <table>
                    <tr>
                        <th>Kartu Rencana Studi</th>
                    </tr>
                    <tr>
                        <th>Semeseter: Gasal 2023/2024</th>
                    </tr>
                </table>
            </div>
            <div class="content-grid-cetak">
                <!-- Profil -->
                <div class="user-profile-krs-cetak">
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
                            <td>Dosen PA</td>
                            <td>: </td>
                        </tr>
                    </table>
                </div>
                <div class="foto">
                    <table>
                        <tr>
                            <td class="foto-profil">Foto</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="table-cetak-krs">
                <table border="1">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Kelas</th>
                        <th colspan="2">Matakuliah</th>
                        <th rowspan="2">SKS</th>
                        <th colspan="6">Jadwal</th>
                    </tr>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Sn</th>
                        <th>Sl</th>
                        <th>Rb</th>
                        <th>Km</th>
                        <th>Jm</th>
                        <th>Sb</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>IF 3D</td>
                        <td>IF2220</td>
                        <td>Pengembangan Aplikasi Web</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td>07:00-09:30 <br> (Ruang LAB TIA_S1 infor)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>IF 3D</td>
                        <td>IF2221</td>
                        <td>Basis Data 1</td>
                        <td>3</td>
                        <td></td>
                        <td>09:30-12:00 <br> (Ruang F304)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4"><b>Jumlah Kredit</b></td>
                        <td><b>7</b></td>
                    </tr>
                </table>
            </div>
            <div class="new-content-grid-cetak">
                <div class="krs-cetak">
                    <table>
                        <tr>
                            <td><b>IP Semester lalu</b></td>
                            <td><b>: 0.00</b></td>
                        </tr>
                        <tr>
                            <td><b>Maks sks</b></td>
                            <td><b>: 24 sks</b></td>
                        </tr>
                    </table>
                </div>

                <div class="ttd">
                    <table>
                        <tr>
                            <td>Mengetahui</td>
                            <td></td>
                            <td></td>
                            <td>Tempat, Tanggal</td>
                        </tr>
                        <tr>
                            <td>a.n. Dosen PA</td>
                            <td></td>
                            <td></td>
                            <td>Mahasiswa</td>
                        </tr>
                        <tr>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <td>(Nama Dosen PA)</td>
                            <td></td>
                            <td></td>
                            <td>(Nama Mahasiswa)</td>
                        </tr>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <script src="script.js"></script>
</body>
</html>
