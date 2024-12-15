<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link rel="stylesheet" href="../css/profile-page.css">
</head>
<body>
    <div class="container">
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

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h2>BIODATA MAHASISWA</h2>   
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="#" class="logout">Log Out</a>
            </header>
            <div class="block-data">
                <div class="data-left">
                    <img src="../assets/img/blank-profile.png" alt="blank-profile">
                    <input type="file" id="file-input">
                    <label for="file-input">Choose</label>
                    <div class="data-utama">
                        <h4>Data Utama &#9655</h4>
                        <ul class="data-utama-list">
                            <li class="list-item-data-utama">NIK :</li>
                            <li class="list-item-data-utama">NISM :</li>
                            <li class="list-item-data-utama">NIM :</li>
                            <li class="list-item-data-utama">NAMA :</li>
                            <li class="list-item-data-utama">Tempat, Tanggal Lahir :</li>
                            <li class="list-item-data-utama">Nama Ibu Kandung :</li>
                        </ul>
                    </div>
                </div>
                <div class="data-right">
                    <div class="data-tambahan">
                        <h4>Data Tambahan &#9655</h4>
                        <ul class="data-tambahan-list">
                            <li class="list-item-data-tambahan">Asal SLTA :</li>
                            <li class="list-item-data-tambahan">Jenis Kelamin :</li>
                            <li class="list-item-data-tambahan">Agama :</li>
                            <li class="list-item-data-tambahan">Nama Ayah :</li>
                            <li class="list-item-data-tambahan">Alamat :</li>
                            <li class="list-item-data-tambahan">No Telp :</li>
                            <li class="list-item-data-tambahan">Warga Negara :</li>
                            <li class="list-item-data-tambahan">email :</li>
                        </ul>
                    </div>
                    <p>Jika ada kesalahan pada data, terutama di data utama, silahkan ajukan perubahan</p>
                    <a href="#"><button>Ajukan</button></a>
                </div>
            </div>
            
        </main>
    </div>

    <script src="../js/index-mahasiswa.js"></script>
</body>
</html>