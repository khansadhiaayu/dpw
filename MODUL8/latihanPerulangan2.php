<?php
// ===================================================
// 1. BAGIAN LOGIKA PHP (Proses Pengecekan Angka)
// ===================================================

// Data array angka dari modul praktikum nomor 12
$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

// Wadah untuk menyimpan hasil perulangan HTML
$list_hasil = "";

foreach ($angka as $nilai) {
    // Jika angka habis dibagi 2, berarti GENAP
    if ($nilai % 2 == 0) {
        $list_hasil .= "<div class='item-angka genap'>Nomor : <b>$nilai</b> adalah <span class='label'>Genap</span></div>";
    } 
    // Jika tidak habis dibagi 2, berarti GANJIL
    else {
        $list_hasil .= "<div class='item-angka ganjil'>Nomor : <b>$nilai</b> adalah <span class='label'>Ganjil</span></div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Perulangan 2 - Ganjil Genap</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 450px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            border-bottom: 2px solid #2c3e50;
            padding-bottom: 10px;
            margin-top: 0;
        }
        
        /* Gaya dasar untuk setiap baris angka */
        .item-angka {
            padding: 10px 15px;
            margin-bottom: 8px;
            border-radius: 4px;
            font-size: 15px;
            display: flex;
            justify-content: space-between; /* Membuat teks rata kanan-kiri */
            align-items: center;
        }
        
        /* VARIASI 1: Jika Angka Genap (Tema Hijau) */
        .genap {
            background-color: #e8f8f5;
            border-left: 5px solid #16a085;
            color: #117a65;
        }
        .genap .label {
            background-color: #16a085;
            color: white;
            padding: 2px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }
        
        /* VARIASI 2: Jika Angka Ganjil (Tema Oranye/Cokelat) */
        .ganjil {
            background-color: #fef9e7;
            border-left: 5px solid #f39c12;
            color: #b7950b;
        }
        .ganjil .label {
            background-color: #f39c12;
            color: white;
            padding: 2px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Pengecekan Ganjil & Genap</h2>
    
    <?php echo $list_hasil; ?>
</div>

</body>
</html>