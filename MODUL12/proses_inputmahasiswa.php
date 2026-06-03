<?php
if (isset($_POST['input'])) {
    // memanggil class Database dari file Database.php
    require_once 'Database.php';
    $db = new Database();
    $con = $db->getConnection();

    // membuat variabel untuk menampung data dari form
    $npm     = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    // jalankan query INSERT dengan prepared statement untuk keamanan input
    $stmt = $con->prepare("INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $npm, $namaMhs, $prodi, $alamat, $noHP);
    $result = $stmt->execute();

    // periksa query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . $con->errno . " - " . $con->error);
    }

    $stmt->close();
    $db->close();

    // lakukan redirect ke halaman viewmahasiswa.php dengan status
    header("location: viewmahasiswa.php?status=sukses_tambah");
    exit;
}
?>