<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link rel="stylesheet" href="cetak_transkrip.css">
</head>
<body>
    <div class="container-cetak">
        <!-- Main Content -->
        <main class="main-content-cetak">
            <!-- Header -->
            <header class="header-cetak">
                <table>
                    <tr>
                        <td><img src="./asset/icon_sidebar/Logo_UTM.png" alt="" class="logo-utm"></td>
                    </tr>
                    <tr>
                        <td class="univ">Universitas Trunojoyo Madura</td>
                    </tr>
                    <tr>
                        <td><hr></td>
                    </tr>
                </table>
            </header>
            <div class="transkrip-nilai">
                <table>
                    <tr>
                        <td>TRANSKRIP AKADEMIK</td>
                    </tr>
                    <tr>
                        <td><hr></td>
                    </tr>
                </table>
            </div>
            <div class="content-grid-cetak">
                <!-- Profil -->
                <div class="user-profile-transkrip-nilai-cetak">
                    <table>
                        <tr>
                            <th colspan="2">Sementara</th>
                        </tr>
                        <tr>
                            <td>Diberikan Kepada</td>
                            <td>: NAMA MAHASISWA</td>
                        </tr>
                        <tr>
                            <td>Tempat dan Tanggal Lahir</td>
                            <td>: UNKNOWN</td>
                        </tr>
                        <tr>
                            <td>Nomor Induk Mahasiswa</td>
                            <td>: 230411100999</td>
                        </tr>
                        <tr>
                            <td>Fakultas</td>
                            <td>: TEKNIK</td>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td>: TEKNIK INFORMATIKA</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lulus</td>
                            <td>: 0</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
                                : Terakreditasi berdasarkan Surat Keputusan Badan 
                                Akreditasi Nasional Perguruan Tinggi Departemen Pendidikan Nasional Republik Indonesia.
                                Nomor : 416/SK/BAN-PT/Akred/S/X/2014 , Tanggal : 11-10-2014
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="table-transkrip-nilai-cetak">
                <table border="1">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Matakuliah</th>
                        <th rowspan="2">Kredit (K)</th>
                        <th colspan="2">Nilai (N)</th>
                        <th rowspan="2">K X N</th>
                    </tr>
                    <tr>
                        <th>Huruf</th>
                        <th>Angka</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Matematika Teknik</td>
                        <td>2</td>
                        <td>B</td>
                        <td>3.00</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bahasa Inggris</td>
                        <td>2</td>
                        <td>A</td>
                        <td>4.00</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td>7</td>
                        <td colspan="2"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">Judul Skripsi</td>
                        <td colspan="4">: </td>
                    </tr>
                    <tr>
                        <td colspan="2">IPK</td>
                        <td colspan="4">: 3.01</td>
                    </tr>
                    <tr>
                        <td colspan="2">Predikat</td>
                        <td colspan="4">: </td>
                    </tr>
                </table>
            </div>
            <br><br>
            <div class="new-content-grid-cetak">
                <div class="ttd">
                    <table>
                        <tr>
                            <td>Tempat, Tanggal</td>
                        </tr>
                        <tr>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <td>Nama Dosen</td>
                        </tr>
                        <tr>
                            <td><hr></td>
                        </tr>
                        <tr>
                            <td>NIP: Dosen</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="footer">
                <table>
                    <tr>
                        <td>Salinan Nilai Ini Sah dan Benar bila tanpa coretan dan Tip-Ex</td>
                    </tr>
                </table>
            </div>
        </main>
    </div>

    <script src="script.js"></script>
</body>
</html>
