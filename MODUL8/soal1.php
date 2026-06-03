<?php

$gajiPokok = 3250000;
$tunjanganJabatan = 1200000;

// Menghitung gaji kotor
$gajiKotor = $gajiPokok + $tunjanganJabatan;

// Menghitung pajak 10%
$pajak = $gajiKotor * 0.10;

// Menghitung gaji bersih
$gajiBersih = $gajiKotor - $pajak;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 1 - Gaji Obi</title>
    <style>
        /* Gaya dasar super simpel agar posisi di tengah layar */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 40px;
        }
        .kotak-gaji {
            background-color: white;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h2 {
            text-align: center;
            margin-top: 0;
            color: #333;
        }
        /* Gaya tabel polos agar angka sejajar kanan-kiri */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 8px 0;
        }
        .garis-bawah {
            border-bottom: 2px solid #333;
        }
        .gaji-bersih-box {
            background-color: #e2f0d9; /* Warna hijau sukses yang lembut */
            font-weight: bold;
            color: #385723;
        }
    </style>
</head>
<body>

<div class="kotak-gaji">
    <h2>Rincian Gaji Obi</h2>
    
    <table>
        <tr>
            <td>Gaji Pokok</td>
            <td align="right">Rp. <?php echo number_format($gajiPokok, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td>Tunjangan Jabatan</td>
            <td align="right">Rp. <?php echo number_format($tunjanganJabatan, 0, ',', '.'); ?></td>
        </tr>
        <tr class="garis-bawah">
            <td>Pajak Penghasilan (10%)</td>
            <td align="right" style="color: red;">- Rp. <?php echo number_format($pajak, 0, ',', '.'); ?></td>
        </tr>
        <tr class="gaji-bersih-box">
            <td style="padding: 10px;">Gaji Bersih</td>
            <td align="right" style="padding: 10px;">Rp. <?php echo number_format($gajiBersih, 0, ',', '.'); ?></td>
        </tr>
    </table>
</div>

</body>
</html>