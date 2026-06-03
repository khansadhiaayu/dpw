<?php
if (isset($_POST['edit'])) {
    // memanggil class Database dari file Database.php
    require_once 'Database.php';
    $db = new Database();
    $con = $db->getConnection();

    // membuat variabel untuk menampung data dari form edit
    $npm     = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    // buat dan jalankan query UPDATE dengan prepared statement untuk keamanan input
    $stmt = $con->prepare("UPDATE t_mahasiswa SET namaMhs = ?, prodi = ?, alamat = ?, noHP = ? WHERE npm = ?");
    $stmt->bind_param("ssssi", $namaMhs, $prodi, $alamat, $noHP, $npm);
    $res = $stmt->execute();

    // periksa hasil query apakah ada error
    if (!$res) {
        die("Gagal update data: " . $con->error);
    }

    $stmt->close();
    $db->close();

    // lakukan redirect ke halaman viewmahasiswa.php dengan status
    header("location: viewmahasiswa.php?status=sukses_ubah");
    exit;
}
?>