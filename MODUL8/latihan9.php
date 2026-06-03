<?php

function writeMsg($nama) {
    // Kita simpan teksnya ke dalam variabel atau langsung echo
    echo "Selamat datang, <b>" . $nama . "</b>!<br>";
}

// --- B. Fungsi Dengan Nilai Balik (Return Value) ---
function tambah(int $angka1, int $angka2) {
    $a = $angka1 + $angka2;
    return $a; // Mengirim hasil pertambahan ke pemanggil
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 9 - Fungsi PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        
        /* KOTAK 1: Variasi Ungu (Fungsi Biasa) */
        .kotak-fungsi-biasa {
            background-color: #f5eef8;
            border-left: 5px solid #8e44ad;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        
        /* KOTAK 2: Variasi Biru Langit (Fungsi Return) */
        .kotak-fungsi-return {
            background-color: #eaf2f8;
            border-left: 5px solid #2980b9;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 4px;
        }

        h4 {
            margin-top: 0;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Belajar Fungsi (Function) PHP</h2>

    <div class="kotak-fungsi-biasa">
        <h4 style="color: #8e44ad;">1. Fungsi Tanpa Nilai Balik:</h4>
        <?php 
        // Memanggil fungsi writeMsg langsung di dalam kotak HTML
        writeMsg("Dhia"); 
        ?>
    </div>

    <div class="kotak-fungsi-return">
        <h4 style="color: #2980b9;">2. Fungsi dengan Nilai Balik (Return):</h4>
        <?php 
        // Memanggil fungsi tambah, menyimpannya ke variabel, lalu menampilkannya
        $hasil = tambah(5, 5);
        echo "Hasil pertambahan 5 + 5 adalah: <b>" . $hasil . "</b>"; 
        ?>
    </div>
</div>

</body>
</html>