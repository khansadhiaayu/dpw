<?php
if (isset($_POST['input'])) {
    // memanggil class Database dari file Database.php
    require_once 'Database.php';
    $db = new Database();
    $con = $db->getConnection();

    // membuat variabel untuk menampung data dari form
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam    = $_POST['jam'];

    // jalankan query INSERT dengan prepared statement untuk keamanan input
    $stmt = $con->prepare("INSERT INTO t_matakuliah VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isii", $kodeMK, $namaMK, $sks, $jam);
    $result = $stmt->execute();

    // periksa query apakah ada error
    if (!$result) {
        die("Query Input Gagal: " . $con->error);
    }

    $stmt->close();
    $db->close();

    // lakukan redirect ke halaman viewmatakuliah.php dengan status
    header("location: viewmatakuliah.php?status=sukses_tambah");
    exit;
}
?>