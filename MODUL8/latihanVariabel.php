<?php
// ===================================================
// 1. BAGIAN LOGIKA PHP (Inisialisasi Variabel)
// ===================================================

$hari1 = "Senin";
$hari2 = "Selasa";
$hari3 = "Rabu";
$hari4 = "Kamis";
$hari5 = "Jumat";
$hari6 = "Sabtu";
$hari7 = "Minggu";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan - Daftar Hari</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 400px;
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
        
        /* Gaya dasar untuk setiap baris hari */
        .baris-hari {
            padding: 10px 15px;
            margin-bottom: 6px;
            border-radius: 4px;
            font-size: 15px;
            font-weight: bold;
        }
        
        /* VARIASI 1: Hari Masuk Kerja (DIUBAH MENJADI TEMA BIRU) */
        .hari-masuk {
            background-color: #e8f4f8; /* Biru sangat muda */
            border-left: 5px solid #2980b9; /* Garis samping biru tegas */
            color: #1f618d; /* Tulisan biru tua */
        }
        
        /* VARIASI 2: Hari Libur (Tema Merah Lembut) */
        .hari-libur {
            background-color: #fdedec;
            border-left: 5px solid #e74c3c;
            color: #922b21;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>7 Nama Hari</h2>
    
    <div class="baris-hari hari-masuk">Hari ke-1: <?php echo $hari1; ?></div>
    <div class="baris-hari hari-masuk">Hari ke-2: <?php echo $hari2; ?></div>
    <div class="baris-hari hari-masuk">Hari ke-3: <?php echo $hari3; ?></div>
    <div class="baris-hari hari-masuk">Hari ke-4: <?php echo $hari4; ?></div>
    <div class="baris-hari hari-masuk">Hari ke-5: <?php echo $hari5; ?></div>
    
    <div class="baris-hari hari-libur">Hari ke-6: <?php echo $hari6; ?></div>
    <div class="baris-hari hari-libur">Hari ke-7: <?php echo $hari7; ?></div>
</div>

</body>
</html>