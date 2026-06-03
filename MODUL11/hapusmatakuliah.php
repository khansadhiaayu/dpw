<?php
include("koneksi.php");
if (isset($_GET["kodeMK"])) {
    $kodeMK = $_GET["kodeMK"];
    mysqli_query($link, "DELETE FROM t_matakuliah WHERE kodeMK = '$kodeMK'");
}
header("location:viewmatakuliah.php");
// melakukan redirect ke halaman viewdosen.php dengan status
header("location:viewmatakuliah.php?status=sukses_hapus");
?>