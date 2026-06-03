<?php
include 'koneksi.php';

if (isset($_POST['input'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $query = "INSERT INTO t_matakuliah VALUES ('$kodeMK', '$namaMK', '$sks', '$jam')";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Input Gagal: " . mysqli_error($link));
    }
    header("location:viewmatakuliah.php");
    header("location:viewmatakuliah.php?status=sukses_tambah");
}
?>