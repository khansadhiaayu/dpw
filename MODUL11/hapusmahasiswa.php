<?php
include("koneksi.php");
if (isset($_GET["npm"])) {
    $npm = $_GET["npm"];
    mysqli_query($link, "DELETE FROM t_mahasiswa WHERE npm = '$npm'");
}
header("location:viewmahasiswa.php");
// melakukan redirect ke halaman viewdosen.php dengan status
header("location:viewmahasiswa.php?status=sukses_hapus");
?>