<?php
if (isset($_POST['edit'])) {
    include("koneksi.php");
    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $query = "UPDATE t_mahasiswa SET namaMhs='$namaMhs', prodi='$prodi', alamat='$alamat', noHP='$noHP' WHERE npm='$npm'";
    $res = mysqli_query($link, $query);
    
    if (!$res) {
        die("Gagal update data: " . mysqli_error($link));
    }
    header("location:viewmahasiswa.php");
    // lakukan redirect ke halaman viewdosen.php dengan status
    header("location:viewmahasiswa.php?status=sukses_ubah");
}
?>