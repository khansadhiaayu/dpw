<!DOCTYPE html>
<html>
<head>
    <title>Latihan PHP Dasar</title>
    <style>
        /* Gaya sederhana agar tampilan rapi di tengah layar */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 40px;
        }
        .kotak-output {
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
        }
        .Hasil {
            background-color: #e2f0d9;
            padding: 10px;
            border-left: 5px solid #385723;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="kotak-output">
    <h2>Output PHP Dasar</h2>

    <?php
    // --- 1. Bagian Variabel ---
    $txt = "Selamat datang !";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    // Menampilkan teks ucapan
    echo "<p><b></b> $txt</p>";
    echo "<p><b></b> Belajar PHP di $txt2</p>";
    
    echo "<hr>"; // Garis pembatas teks

    // Menampilkan isi angka variabel
    echo "<p>Isi Variable x = $x</p>";
    echo "<p>Isi Variable y = $y</p>";

    // --- 2. Bagian Hitungan Aritmatika ---
    echo "<div class='Hasil'>";
    echo "Hasil dari x + y = " . ($x + $y);
    echo "</div>";

    echo "<hr>"; // Garis pembatas teks

    // --- 3. Bagian Konstanta ---
    define("nama_konstanta", "Ayu Dhia Khansa");
    echo "<p style='color: gray; font-size: 14px;'>Konstanta: " . nama_konstanta . "</p>";
    ?>
</div>

</body>
</html>