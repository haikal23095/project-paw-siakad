<?php
    // Koneksi ke database
    $servername = "47.250.12.35";
    $username = "admin_remote";
    $password = "12345";
    $dbname = "siakad";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

?>