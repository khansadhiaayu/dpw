<?php
// ===================================================
// 1. BAGIAN LOGIKA PHP (Proses Semua Perulangan)
// ===================================================

// --- A. While Loop (Mundur dari 10 ke 6) ---
$output_while = "";
$x = 10;
while ($x >= 6) {
    $output_while .= "Nomor : $x <br>";
    $x--;
}

// --- B. Do While Loop (Maju dari 1 ke 5) ---
$output_do_while = "";
$x = 1;
do {
    $output_do_while .= "Nomor : $x <br>";
    $x++;
} while ($x <= 5);

// --- C. Foreach Loop (Membaca isi Array) ---
$output_foreach = "";
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    $output_foreach .= "$value <br>";
}

// --- D. For Loop (Maju dari 0 ke 10) ---
$output_for = "";
for ($x = 0; $x <= 10; $x++) {
    $output_for .= "Nomor : $x <br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 6 - Perulangan PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        /* Kotak simpel untuk membungkus setiap hasil perulangan */
        .kotak-loop {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 15px;
        }
        .judul-loop {
            margin-top: 0;
            color: #2980b9;
            font-size: 16px;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Hasil Belajar Perulangan (Loops)</h2>

    <div class="kotak-loop">
        <h3 class="judul-loop">1. While Loop (Mundur)</h3>
        <?php echo $output_while; ?>
    </div>

    <div class="kotak-loop">
        <h3 class="judul-loop">2. Do While Loop</h3>
        <?php echo $output_do_while; ?>
    </div>

    <div class="kotak-loop">
        <h3 class="judul-loop">3. Foreach Loop (Warna)</h3>
        <?php echo $output_foreach; ?>
    </div>

    <div class="kotak-loop">
        <h3 class="judul-loop">4. For Loop</h3>
        <?php echo $output_for; ?>
    </div>
</div>

</body>
</html>