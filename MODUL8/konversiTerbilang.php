<?php
$angka = 5; // Ganti angka ini (1-9) sesuai kebutuhan untuk melihat perubahan hasil

// Membuka penampung teks kosong agar bisa dicetak di dalam HTML nanti
$terbilang = "";

switch ($angka) {
    case 1:
        $terbilang = "satu";
        break;
    case 2:
        $terbilang = "dua";
        break;
    case 3:
        $terbilang = "tiga";
        break;
    case 4:
        $terbilang = "empat";
        break;
    case 5:
        $terbilang = "lima";
        break;
    case 6:
        $terbilang = "enam";
        break;
    case 7:
        $terbilang = "tujuh";
        break;
    case 8:
        $terbilang = "delapan";
        break;
    case 9:
        $terbilang = "sembilan";
        break;
    default:
        $terbilang = "angka tidak dikenal";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konversi Terbilang Sederhana</title>
    <style>
        /* Gaya tampilan standar untuk pemula */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 30px;
        }
        .box-terbilang {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-left: 6px solid #ff9800; /* Memberi aksen garis warna oranye di kiri */
            border-radius: 8px;
            padding: 20px;
            max-width: 380px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        h3 {
            margin-top: 0;
            color: #333333;
            border-bottom: 1px solid #eeeeee;
            padding-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #555555;
            margin: 12px 0;
        }
        .hasil-kata {
            font-weight: bold;
            color: #ff9800;
            font-style: italic;
        }
    </style>
</head>
<body>

    <div class="box-terbilang">
        <h3>Konversi Angka ke Terbilang</h3>
        
        <p>Input Angka: <strong><?php echo $angka; ?></strong></p>
        <p>Hasil Terbilang: " <span class="hasil-kata"><?php echo $terbilang; ?></span> "</p>
    </div>

</body>
</html>