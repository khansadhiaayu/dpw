<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan PHP</title>
    <style>
        /* CSS Sederhana agar tampilan rapi dan tidak melelahkan mata */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            color: #333;
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .box {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        h2 {
            color: #2c3e50;
            margin-top: 0;
            border-bottom: 2px solid #3498db;
            padding-bottom: 8px;
        }
        .bintang {
            font-family: 'Courier New', Courier, monospace;
            font-size: 1.2rem;
            letter-spacing: 3px;
            line-height: 1.5;
            color: #e67e22; /* Warna oranye agar bintang menarik */
        }
        .kode-info {
            background-color: #f8f9fa;
            border-left: 4px solid #e74c3c;
            padding: 10px;
            margin-top: 10px;
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="box">
        <h2>Pola Segitiga Bintang</h2>
        <div class="bintang">
            <?php
            // Perulangan luar untuk mengatur tinggi/baris segitiga (1 sampai 10)
            for ($i = 1; $i <= 10; $i++) {
                // Perulangan dalam untuk mencetak jumlah bintang per baris
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            ?>
        </div>
    </div>

    <div class="box">
        <h2>For dengan Break</h2>
        <div>
            <?php
            // Perulangan disetting berjalan dari 0 sampai kurang dari 10 (0-9)
            for ($x = 0; $x < 10; $x++) {
                // Jika nilai $x sudah menyentuh angka 4, perulangan dihentikan paksa
                if ($x == 4) {
                    break;
                }
                echo "Nomor : <b>$x</b><br>";
            }
            ?>
        </div>
        <div class="kode-info">
            <strong>Penjelasan Pemula:</strong><br>
            Perulangan aslinya diperintahkan berputar 10 kali (0 sampai 9). Namun karena ada perintah <code>break</code> saat <code>$x == 4</code>, maka angka 4 sampai 9 tidak akan pernah dicetak karena perulangan langsung dibubarkan.
        </div>
    </div>

</div>

</body>
</html>