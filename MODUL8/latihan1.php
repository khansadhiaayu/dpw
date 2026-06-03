<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Halaman PHP Saya</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{tulis nim anda disini}">
    <meta name="author" content="{tulis nama anda disini}">
    <style>
        /* Gaya sederhana untuk merapikan halaman utama */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 30px;
            color: #333333;
        }
        .container {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 25px;
            max-width: 500px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        h1 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 24px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .pesan {
            font-size: 16px;
            color: #555555;
            line-height: 1.5;
            background-color: #e8f4fd;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #3498db;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Halaman PHP Saya</h1>
        
        <div class="pesan">
            <?php
            // Menampilkan kalimat penutupan/salam dari PHP
            echo "Hallo namaku Ayu Dhia, ini halaman dengan menggunakan bahasa PHP!";
            ?>
        </div>
    </div>

</body>
</html>