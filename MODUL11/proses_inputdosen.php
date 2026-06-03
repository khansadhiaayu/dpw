<?php
// memanggil file koneksi.php untuk melakukan koneksi database [cite: 136]
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik [cite: 137]
if (isset($_POST['input'])) { // [cite: 138]
    // membuat variabel untuk menampung data dari form [cite: 141]
    $namaDosen = $_POST['namaDosen']; // [cite: 143]
    $noHP = $_POST['noHP']; // [cite: 145]

    // jalankan query INSERT untuk menambah data ke database [cite: 148]
    $query = "INSERT INTO t_dosen VALUES (NULL, '$namaDosen', '$noHP')"; // [cite: 150]
    $result = mysqli_query($link, $query); // [cite: 152]

    // periksa query apakah ada error [cite: 155]
    if (!$result) { // [cite: 157]
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link)); // [cite: 160]
    }
    
    
    header("location:viewdosen.php"); // [cite: 169]
    header("location:viewdosen.php?status=sukses_tambah");
}
?>