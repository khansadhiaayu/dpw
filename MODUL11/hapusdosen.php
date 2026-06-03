<?php
// buka koneksi dengan MySQL [cite: 467]
include("koneksi.php"); // [cite: 469]

// mengecek apakah di url ada GET idDosen [cite: 471]
if (isset($_GET["idDosen"])) { // [cite: 473]
    // menyimpan variabel id dari url ke dalam variabel $id [cite: 476]
    $id = $_GET["idDosen"]; // [cite: 477]

    // jalankan query DELETE untuk menghapus data [cite: 480]
    $query = "DELETE FROM t_dosen WHERE idDosen = '$id'"; // [cite: 482]
    $hasil_query = mysqli_query($link, $query); // [cite: 484]

    // periksa query, apakah ada kesalahan [cite: 487]
    if (!$hasil_query) { // [cite: 489]
        die("Gagal menghapus data: " . mysqli_errno($link) . " - " . mysqli_error($link)); // [cite: 491, 493]
    }
}
// melakukan redirect ke halaman viewdosen.php [cite: 498]
header("location:viewdosen.php"); // [cite: 500]
// melakukan redirect ke halaman viewdosen.php dengan status
header("location:viewdosen.php?status=sukses_hapus");
?>