<?php
// ===================================================
// 1. BAGIAN LOGIKA PHP (Proses Semua Data Array)
// ===================================================

// --- A. Index Array (Mobil) ---
$cars = array("Volvo", "BMW", "Toyota");
$output_cars = "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// --- B. Associative Array (Umur Peter dkk) ---
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
$output_age = "Peter is " . $age['Peter'] . " years old.";

// --- C. Multidimensional Array (Tabel Mobil) ---
$matrix_cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

// --- D. Array Buah ---
$namaBuah = array("Nanas", "Mangga", "jeruk", "Apel", "Melon", "Manggis");

// --- E. Array Umur Spesifik (Andi & Ahmad) ---
$umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"43 Tahun");
$umur['Ahmad'] = "50 Tahun"; // Menambahkan data Ahmad
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 7 - Array PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f7;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 550px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
        }
        /* Kotak pembungkus hasil array */
        .kotak-array {
            background-color: white;
            border: 1px solid #dcdde1;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .judul-array {
            margin-top: 0;
            color: #2980b9;
            font-size: 15px;
            border-bottom: 1px solid #f1f2f6;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Hasil Belajar Array PHP</h2>

    <div class="kotak-array">
        <h3 class="judul-array">1. Index Array (Urutan Angka)</h3>
        <?php echo $output_cars; ?>
    </div>

    <div class="kotak-array">
        <h3 class="judul-array">2. Associative Array (Menggunakan Nama Kunci)</h3>
        <?php echo $output_age; ?>
    </div>

    <div class="kotak-array">
        <h3 class="judul-array">3. Multidimensional Array (Array di dalam Array)</h3>
        <?php
        echo $matrix_cars[0][0] . ": In stock: " . $matrix_cars[0][1] . ", sold: " . $matrix_cars[0][2] . ".<br>";
        echo $matrix_cars[1][0] . ": In stock: " . $matrix_cars[1][1] . ", sold: " . $matrix_cars[1][2] . ".<br>";
        echo $matrix_cars[2][0] . ": In stock: " . $matrix_cars[2][1] . ", sold: " . $matrix_cars[2][2] . ".<br>";
        echo $matrix_cars[3][0] . ": In stock: " . $matrix_cars[3][1] . ", sold: " . $matrix_cars[3][2] . ".<br>";
        ?>
    </div>

    <div class="kotak-array">
        <h3 class="judul-array">4. Tugas Mandiri: Array Buah</h3>
        <?php
        echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br><br>";
        echo "• Tampilkan Mangga: " . $namaBuah[1] . "<br>";
        echo "• Tampilkan Jeruk: " . $namaBuah[2] . "<br>";
        echo "• Tampilkan Apel: " . $namaBuah[3] . "<br>";
        echo "• Tampilkan Melon: " . $namaBuah[4] . "<br>";
        ?>
    </div>

    <div class="kotak-array">
        <h3 class="judul-array">5. Menampilkan Semua Umur (Foreach)</h3>
        <?php
        foreach ($umur as $nama => $usia) {
            echo "Umur <b>$nama</b> adalah $usia<br>";
        }
        ?>
    </div>
</div>

</body>
</html>