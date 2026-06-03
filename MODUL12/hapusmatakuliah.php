<?php
// memanggil class Database dari file Database.php
require_once 'Database.php';
$db = new Database();
$con = $db->getConnection();

// mengecek apakah di url ada GET kodeMK
if (isset($_GET["kodeMK"])) {
    // menyimpan nilai kodeMK dari url ke dalam variabel $kodeMK
    $kodeMK = $_GET["kodeMK"];

    // jalankan query DELETE dengan prepared statement untuk keamanan input
    $stmt = $con->prepare("DELETE FROM t_matakuliah WHERE kodeMK = ?");
    $stmt->bind_param("i", $kodeMK);
    $hasil_query = $stmt->execute();

    // periksa query, apakah ada kesalahan
    if (!$hasil_query) {
        die("Gagal menghapus data: " . $con->errno . " - " . $con->error);
    }

    $stmt->close();
}

// melakukan redirect ke halaman viewmatakuliah.php dengan status
header("location: viewmatakuliah.php?status=sukses_hapus");
exit;
?>