<?php
// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {
    // memanggil class Database dari file Database.php
    require_once 'Database.php';
    $db = new Database();
    $con = $db->getConnection();

    // membuat variabel untuk menampung data dari form
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    // jalankan query INSERT dengan prepared statement untuk keamanan input
    $stmt = $con->prepare("INSERT INTO t_dosen VALUES (NULL, ?, ?)");
    $stmt->bind_param("ss", $namaDosen, $noHP);
    $result = $stmt->execute();

    // periksa query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . $con->errno . " - " . $con->error);
    }

    $stmt->close();
    $db->close();

    // lakukan redirect ke halaman viewdosen.php dengan status
    header("location: viewdosen.php?status=sukses_tambah");
    exit;
}
?>