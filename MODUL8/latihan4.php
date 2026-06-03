<!DOCTYPE html>
<html>
<head>
    <title>Latihan Percabangan PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .kotak-utama {
            background-color: white;
            max-width: 450px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-top: 0;
            text-align: center;
        }
        .info-jam {
            background-color: #e2f0d9;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            margin-bottom: 15px;
            color: #385723;
        }
        .sub-judul {
            color: #2980b9;
            margin-bottom: 5px;
            font-size: 15px;
        }
    </style>
</head>
<body>

<div class="kotak-utama">
    <h2>Struktur Kondisi (IF)</h2>

    <?php
    // Ambil jam saat ini berdasarkan waktu server komputer (00 - 23)
    $t = date("H"); 
    ?>

    <div class="info-jam">
        Jam di Komputer Kamu: <?php echo $t; ?>:00
    </div>

    <p class="sub-judul"><b>1. IF Tunggal (Batas Jam 16):</b></p>
    <?php
    if ($t < 16) {
        echo "Selamat siang!";
    } else {
        echo "Sudah lewat jam 16 sore.";
    }
    ?>

    <hr>

    <p class="sub-judul"><b>2. IF dan ELSE (Batas Jam 20):</b></p>
    <?php
    if ($t < 20) {
        echo "Selamat siang!";
    } else {
        echo "Selamat malam!";
    }
    ?>

    <hr>

    <p class="sub-judul"><b>3. Banyak Kondisi (Elseif):</b></p>
    <?php
    if ($t < 10) {
        echo "Selamat Pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat Malam!";
    }
    ?>

</div>

</body>
</html>