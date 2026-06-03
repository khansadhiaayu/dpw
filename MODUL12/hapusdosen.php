<?php
// memanggil class Database dari file Database.php
require_once 'Database.php';
$db = new Database();
$con = $db->getConnection();

// mengecek apakah di url ada GET idDosen
if (isset($_GET["idDosen"])) {
    // menyimpan variabel id dari url ke dalam variabel $id
    $id = $_GET["idDosen"];

    // jalankan query DELETE dengan prepared statement untuk keamanan input
    $stmt = $con->prepare("DELETE FROM t_dosen WHERE idDosen = ?");
    $stmt->bind_param("i", $id);
    $hasil_query = $stmt->execute();

    // periksa query, apakah ada kesalahan
    if (!$hasil_query) {
        die("Gagal menghapus data: " . $con->errno . " - " . $con->error);
    }

    $stmt->close();
}

// melakukan redirect ke halaman viewdosen.php dengan status
header("location: viewdosen.php?status=sukses_hapus");
exit;
?>