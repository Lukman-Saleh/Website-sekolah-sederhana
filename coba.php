<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sekolah";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan ID foto dari parameter URL
$id = $_GET['id_siswa'];

// Mendapatkan data foto dari database berdasarkan ID
$sql = "SELECT image FROM siswa WHERE id_siswa = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageData = $row['image'];

    // Menampilkan gambar
    header("Content-type: image/jpeg");
    echo $imageData;
} else {
    echo "Foto tidak ditemukan.";
}

$conn->close();
?>
