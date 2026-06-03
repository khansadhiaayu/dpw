<?php
/* Aturan Huruf Nilai[cite: 137]:
    C   = 0  -> 59 [cite: 138]
    BC  = 60 -> 69 [cite: 139]
    B   = 70 -> 79 [cite: 140]
    AB  = 80 -> 89 [cite: 141]
    A   = 90 -> 100 [cite: 142]
*/

$nilai = 85; // Ganti nilai angka ini untuk menguji hasil konversi

// Logika penentuan nilai huruf 
if ($nilai >= 90 && $nilai <= 100) {
    $huruf = "A";
} elseif ($nilai >= 80) {
    $huruf = "AB";
} elseif ($nilai >= 70) {
    $huruf = "B";
} elseif ($nilai >= 60) {
    $huruf = "BC";
} else {
    $huruf = "C";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai Sederhana</title>
    <style>
        /* Gaya dasar untuk pemula, tanpa library luar */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 30px;
        }
        .card-nilai {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-left: 6px solid #4cae4c; /* Memberi aksen garis hijau di kiri */
            border-radius: 8px;
            padding: 20px;
            max-width: 350px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        h3 {
            margin-top: 0;
            color: #333333;
            border-bottom: 1px solid #eeeeee;
            padding-bottom: 10px;
        }
        .info-teks {
            font-size: 16px;
            color: #555555;
            margin: 12px 0;
        }
        .badge-huruf {
            display: inline-block;
            background-color: #5cb85c;
            color: white;
            padding: 3px 10px;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="card-nilai">
        <h3>Hasil Konversi Nilai</h3>
        
        <p class="info-teks">Nilai Angka: <strong><?php echo $nilai; ?></strong></p>
        <p class="info-teks">Nilai Huruf: <span class="badge-huruf"><?php echo $huruf; ?></span></p>
    </div>

</body>
</html>