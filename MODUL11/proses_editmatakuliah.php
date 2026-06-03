<?php
if (isset($_POST['edit'])) {
    include("koneksi.php");
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $query = "UPDATE t_matakuliah SET namaMK='$namaMK', sks='$sks', jam='$jam' WHERE kodeMK='$kodeMK'";
    $res = mysqli_query($link, $query);

    if (!$res) {
        die("Gagal update data MK: " . mysqli_error($link));
    }
    header("location:viewmatakuliah.php");
    // lakukan redirect ke halaman viewdosen.php dengan status
    header("location:viewmatakuliah.php?status=sukses_ubah");
}
?>