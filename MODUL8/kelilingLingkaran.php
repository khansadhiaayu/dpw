<?php
// 1. Logika PHP ditaruh di paling atas agar rapi
$jari_jari = 15;
$phi = 3.14;
$keliling = 2 * $phi * $jari_jari;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Variabel - Hitung Keliling Lingkaran</title>
    <style>
        /* CSS Sederhana untuk merapikan tampilan */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 40px;
        }
        .kotak-hasil {
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            padding: 20px;
            max-width: 400px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333333;
            margin-top: 0;
            border-bottom: 2px solid #33c3f0;
            padding-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #555555;
            line-height: 1.6;
        }
        .highlight {
            font-weight: bold;
            color: #33c3f0;
        }
    </style>
</head>
<body>

    <div class="kotak-hasil">
        <h2>Hasil Perhitungan Lingkaran</h2>
        
        <p>Jari-jari lingkaran: <b><?php echo $jari_jari; ?> cm</b></p>
        <p>Nilai Phi (&Pi;): <b><?php echo $phi; ?></b></p>
        
        <hr>
        
        <p>Keliling lingkaran adalah: <span class="highlight"><?php echo $keliling; ?> cm</span></p>
    </div>

</body>
</html>