<!DOCTYPE html>
<html>
<head>
    <title>Latihan Operator PHP</title>
    <style>
        /* Gaya dasar agar tampilan bersih dan rapi */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
        }
        /* Kotak sederhana untuk membungkus setiap jenis operator */
        .blok-operator {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .judul-blok {
            margin-top: 0;
            color: #2980b9;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
            font-size: 16px;
        }
        code {
            background-color: #f4f4f4;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: Consolas, monospace;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Hasil Belajar Operator PHP</h2>

    <?php
    // Nilai awal untuk demonstrasi
    $x = 5;
    $y = 10;
    ?>

    <!-- 1. ARITHMETIC OPERATORS -->
    <div class="blok-operator">
        <h3 class="judul-blok">1. Arithmetic Operators (Aritmatika)</h3>
        <?php
        echo "Penambahan (5 + 10) = " . ($x + $y) . "<br>";
        echo "Pengurangan (5 - 10) = " . ($x - $y) . "<br>";
        echo "Perkalian (5 * 10) = " . ($x * $y) . "<br>";
        echo "Pembagian (5 / 10) = " . ($x / $y) . "<br>";
        echo "Modulus (Sisa Bagi) = " . ($x % $y) . "<br>";
        echo "Exponensial (Pangkat) = " . ($x ** $y) . "<br>";
        ?>
    </div>

    <!-- 2. ASSIGNMENT OPERATORS -->
    <div class="blok-operator">
        <h3 class="judul-blok">2. Assignment Operators (Penugasan)</h3>
        <?php
        $x += 2; // sama dengan $x = $x + 2
        $y *= 2; // sama dengan $y = $y * 2
        echo "Hasil akhir x setelah <code>+= 2</code> adalah: " . $x . "<br>";
        echo "Hasil akhir y setelah <code>*= 2</code> adalah: " . $y . "<br>";
        ?>
    </div>

    <!-- 3. INCREMENT / DECREMENT -->
    <div class="blok-operator">
        <h3 class="judul-blok">3. Increment / Decrement</h3>
        <?php
        echo "Isi ++x (ditambah dulu baru tampil) = " . ++$x . "<br>";
        echo "Isi x++ (tampil dulu baru ditambah) = " . $x++ . "<br>";
        echo "Isi x sekarang = " . $x . "<br><br>";
        
        echo "Isi --y (dikurang dulu baru tampil) = " . --$y . "<br>";
        echo "Isi y-- (tampil dulu baru dikurang) = " . $y-- . "<br>";
        echo "Isi y sekarang = " . $y . "<br>";
        ?>
    </div>

    <!-- 4. COMPARISON OPERATORS -->
    <div class="blok-operator">
        <h3 class="judul-blok">4. Comparison Operators (Perbandingan)</h3>
        <?php
        $x = 100;
        $y = "100";
        echo "Apakah nilainya sama? (==) : "; var_dump($x == $y); echo "<br>";
        echo "Apakah nilai & tipe datanya identik? (===) : "; var_dump($x === $y); echo "<br>";
        echo "Apakah tidak sama dengan? (!=) : "; var_dump($x != $y); echo "<br>";
        echo "Apakah tidak identik? (!==) : "; var_dump($x !== $y); echo "<br><br>";

        $x = 100; $y = 50;
        echo "Apakah x > y? : "; var_dump($x > $y); echo "<br>";
        echo "Apakah x < y? : "; var_dump($x < $y); echo "<br>";
        ?>
    </div>

    <!-- 5. LOGICAL OPERATORS -->
    <div class="blok-operator">
        <h3 class="judul-blok">5. Logical Operators (Logika)</h3>
        <?php
        $x = 100; $y = 50;
        if ($x == 100 and $y == 50) { echo "Logika AND (and) bernilai TRUE<br>"; }
        if ($x == 100 or $y == 80) { echo "Logika OR (or) bernilai TRUE<br>"; }
        if ($x == 100 && $y == 50) { echo "Logika AND (&&) bernilai TRUE<br>"; }
        if (!($x == 90)) { echo "Logika NOT (!) bernilai TRUE<br>"; }
        ?>
    </div>

    <!-- 6. CONDITIONAL ASSIGNMENT -->
    <div class="blok-operator">
        <h3 class="judul-blok">6. Conditional Assignment (Ternary & Null Coalescing)</h3>
        <?php
        $user = "Andi darmawan";
        $status = (empty($user)) ? "Kosong" : "Ada isi";
        echo "Status User: <b>" . $status . "</b><br>";

        // deklarasi variabel color agar tidak error notice
        $color = null; 
        echo "Warna default: <b>" . ($color = $color ?? "red") . "</b>";
        ?>
    </div>
</div>

</body>
</html>