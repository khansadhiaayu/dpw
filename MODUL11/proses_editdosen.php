<?php
// mengecek apakah tombol edit telah diklik [cite: 421]
if (isset($_POST['edit'])) { // [cite: 423]
    // buat koneksi dengan database [cite: 425]
    include("koneksi.php"); // [cite: 427]

    // membuat variabel untuk menampung data dari form edit [cite: 430]
    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    // buat dan jalankan query UPDATE [cite: 438]
    $query = "UPDATE t_dosen SET namaDosen='$namaDosen', noHP='$noHP' WHERE idDosen='$id'";
    $result = mysqli_query($link, $query);

    // periksa hasil query apakah ada error [cite: 448]
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link)); // [cite: 451, 452]
    }
    // lakukan redirect ke halaman viewdosen.php [cite: 456]
    header("location:viewdosen.php"); // [cite: 458]
    // lakukan redirect ke halaman viewdosen.php dengan status
    header("location:viewdosen.php?status=sukses_ubah");
}
?>