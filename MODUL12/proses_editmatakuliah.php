<?php
if (isset($_POST['edit'])) {
    // memanggil class Database dari file Database.php
    require_once 'Database.php';
    $db = new Database();
    $con = $db->getConnection();

    // membuat variabel untuk menampung data dari form edit
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam    = $_POST['jam'];

    // buat dan jalankan query UPDATE dengan prepared statement untuk keamanan input
    $stmt = $con->prepare("UPDATE t_matakuliah SET namaMK = ?, sks = ?, jam = ? WHERE kodeMK = ?");
    $stmt->bind_param("siii", $namaMK, $sks, $jam, $kodeMK);
    $res = $stmt->execute();

    // periksa hasil query apakah ada error
    if (!$res) {
        die("Gagal update data MK: " . $con->error);
    }

    $stmt->close();
    $db->close();

    // lakukan redirect ke halaman viewmatakuliah.php dengan status
    header("location: viewmatakuliah.php?status=sukses_ubah");
    exit;
}
?>