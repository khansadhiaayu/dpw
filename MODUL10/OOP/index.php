<?php

require_once 'kelas/Manusia.php';

$rexcy = new Manusia();
$rexcy->setNama("Rexcy");
$rexcy->setUmur(20);

$michelle = new Manusia();
$michelle->setNama("Michelle Milanello");
$michelle->setUmur(18);

$ayu = new Manusia();
$ayu->setNama("Ayu Dhia Khansa"); 
$ayu->setUmur(19);            
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 10 - OOP Manusia</title>
    <style>
        /* CSS Sederhana untuk mempercantik tampilan */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h2 {
            color: #333;
            margin-bottom: 30px;
        }
        .container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            width: 250px;
            border-top: 5px solid #007bff; 
        }
        .card h3 {
            margin-top: 0;
            color: #007bff;
        }
        .card p {
            margin: 8px 0;
            color: #555;
            font-size: 14px;
        }
        .badge {
            background-color: #e9ecef;
            padding: 3px 8px;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Daftar Data Manusia</h2>

    <div class="container">
        <div class="card">
            <h3><?php echo $rexcy->getNama(); ?></h3>
            <p><strong>NIK:</strong> <span class="badge"><?php echo $rexcy->getNIK(); ?></span></p>
            <p><strong>Umur:</strong> <?php echo $rexcy->getUmur(); ?> Tahun</p>
        </div>

        <div class="card">
            <h3><?php echo $michelle->getNama(); ?></h3>
            <p><strong>NIK:</strong> <span class="badge"><?php echo $michelle->getNIK(); ?></span></p>
            <p><strong>Umur:</strong> <?php echo $michelle->getUmur(); ?> Tahun</p>
        </div>

        <div class="card" style="border-top-color: #28a745;"> 
            <h3><?php echo $ayu->getNama(); ?></h3>
            <p><strong>NIK:</strong> <span class="badge"><?php echo $ayu->getNIK(); ?></span></p>
            <p><strong>Umur:</strong> <?php echo $ayu->getUmur(); ?> Tahun</p>
        </div>
    </div>

    <div style="max-width: 800px; margin: 40px auto 0 auto; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.05); border-left: 5px solid #ffc107;">
        <h4 style="margin-top: 0; color: #333;">Kesimpulan Praktikum:</h4>
        <ul style="padding-left: 20px; color: #555; line-height: 1.6; font-size: 14px;">
            <li><strong>Class & Object:</strong> Kelas <code>Manusia</code> bertindak sebagai cetakan (blueprint), sedangkan variabel objek <code>$rexcy</code>, <code>$michelle</code>, dan <code>$ayu</code> merupakan perwujudan nyata (*instance/object*) dari cetakan tersebut yang membawa data uniknya masing-masing.</li>
            <li><strong>Access Modifier:</strong> Properti dengan hak akses <code>protected</code> tidak bisa dipanggil langsung dari luar kelas (misal menuliskan kode <code>$rexcy->nik</code> akan memicu error). Oleh sebab itu, kita membutuhkan method *Getter* yang bersifat <code>public</code> seperti fungsi <code>getNIK()</code> agar nilainya dapat dipanggil dengan aman pada file ini.</li>
            <li><strong>Fungsi Setter:</strong> Kita berhasil memodifikasi atau memperbarui data NIK default yang ada di cetakan kelas menggunakan method *Setter* (fungsi <code>setNIK()</code>) sehingga setiap objek kini memiliki nomor identitas unik yang berbeda satu sama lain.</li>
        </ul>
    </div>

</body>
</html>