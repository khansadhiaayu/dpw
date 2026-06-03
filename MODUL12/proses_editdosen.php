<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
    // memanggil class Database dari file Database.php
    require_once 'Database.php';
    $db = new Database();
    $con = $db->getConnection();

    // membuat variabel untuk menampung data dari form edit
    $id        = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    // buat dan jalankan query UPDATE dengan prepared statement untuk keamanan input
    $stmt = $con->prepare("UPDATE t_dosen SET namaDosen = ?, noHP = ? WHERE idDosen = ?");
    $stmt->bind_param("ssi", $namaDosen, $noHP, $id);
    $result = $stmt->execute();

    // periksa hasil query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . $con->errno . " - " . $con->error);
    }

    $stmt->close();
    $db->close();

    // lakukan redirect ke halaman viewdosen.php dengan status
    header("location: viewdosen.php?status=sukses_ubah");
    exit;
}
?>