<?php
// memanggil class Database dari file Database.php
require_once 'Database.php';
$db = new Database();
$con = $db->getConnection();

// mengecek apakah di url ada GET npm
if (isset($_GET["npm"])) {
    // menyimpan nilai npm dari url ke dalam variabel $npm
    $npm = $_GET["npm"];

    // jalankan query DELETE dengan prepared statement untuk keamanan input
    $stmt = $con->prepare("DELETE FROM t_mahasiswa WHERE npm = ?");
    $stmt->bind_param("i", $npm);
    $hasil_query = $stmt->execute();

    // periksa query, apakah ada kesalahan
    if (!$hasil_query) {
        die("Gagal menghapus data: " . $con->errno . " - " . $con->error);
    }

    $stmt->close();
}

// melakukan redirect ke halaman viewmahasiswa.php dengan status
header("location: viewmahasiswa.php?status=sukses_hapus");
exit;
?>