<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="kelola-matkul.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-section">
                <div class="avatar"></div>
                <p>Admin - Username</p>
            </div>
            <nav class="menu">
                <ul>
                    <li><img src="../ikon/dashboard.png" alt=""><span>Dashboard</span></li>
                    <li><img src="../ikon/profil pengguna.png" alt=""><span>Manajemen Akun</span></li>
                    <li><img src="../ikon/kalender akademik.png" alt=""><span>Kalender Akademik</span></li>
                    <li><img src="../ikon/krs.png" alt=""><span>Manajemen KRS</span></li>
                    <li><img src="../ikon/krs.png" alt=""><span>Manajemen Jadwal KRS</span></li>
                    <li><img src="../ikon/khs.png" alt=""><span>Manajemen KHS</span></li>
                    <li><img src="../ikon/profile.png" alt=""><span>Profile</span></li>
                    <li><img src="../ikon/kelola ukt.png" alt=""><span>Kelola UKT</span></li>
                    <li><img src="../ikon/info matakuliah.png" alt=""><span>Kelola Matakuliah</span></li>
                    <li><img src="../ikon/info akademik.png" alt=""><span>Informasi Akademik</span></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h1>KELOLA MATA KULIAH</h1>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="../logout.php" class="logout">Log Out</a>
            </header>

            <div class="tambah">
                <button>Tambah</button>
            </div>

            <div class="kolom">
                <table>
                    <tr>
                        <th>Semester</th>
                        <th>Kode</th>
                        <th>Mata Kuliah</td>
                        <th>Prasyarat</th>
                        <th>SKS</th>
                        <th>Tindakan</th>
                    </tr>
                    <tr>
                        <td rowspan="2">1</td>
                        <td>UNG112</td>
                        <td>Pendidikan Agama</td>
                        <td></td>
                        <td>3</td>
                        <td>
                            <button class="edit">Edit</button>
                            <button class="hapus">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>UNG115</td>
                        <td>Kewarganegaraan</td>
                        <td></td>
                        <td>3</td>
                        <td>
                            <button class="edit">Edit</button>                      
                            <button class="hapus">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2">2</td>
                        <td>IF2214</td>
                        <td>Struktur Data</td>
                        <td>IF2213</td>
                        <td>4</td>
                        <td>
                            <button class="edit">Edit</button>                    
                            <button class="hapus">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>IF2215</td>
                        <td>Metode Statistika</td>
                        <td></td>
                        <td>3</td>
                        <td>
                            <button class="edit">Edit</button>                       
                            <button class="hapus">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td  rowspan="2">3</td>
                        <td>IF2220</td>
                        <td>Pengembangan Aplikasi Web</td>
                        <td>IF2219</td>
                        <td>4</td>
                        <td>
                            <button class="edit">Edit</button>                       
                            <button class="hapus">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>IF2221</td>
                        <td>Basis Data 1</td>
                        <td>IF2214</td>
                        <td>3</td>
                        <td>
                            <button class="edit">Edit</button>                       
                            <button class="hapus">Hapus</button>
                        </td>
                    </tr>
                </table>
            </div>                
        </main>
    </div>

    <script src="kelola-matkul.js"></script>
</body>
</html>