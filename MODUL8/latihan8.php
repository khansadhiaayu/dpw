<?php
// ===================================================
// 1. BAGIAN LOGIKA PHP (Proses Array 2 Dimensi)
// ===================================================

// Data kelas baru menggunakan array 2 dimensi sesuai perintahmu
$array = array(
    "2A" => array("Shafir", "Arkan", "Misel"),
    "2C" => array("Galang", "Valen", "Cinta")
);

// Menyimpan teks mentah print_r ke dalam variabel agar bisa dipanggil di HTML
$semua_data = print_r($array, true);
$data_2a = print_r($array['2A'], true);

// Mengambil data siswa spesifik berdasarkan indeksnya untuk contoh tampilan
$kelas_2a_index_0 = $array['2A'][0]; // Shafir
$valen = $array['2C'][1];            // Valen
$cinta = $array['2C'][2];            // Cinta
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 8 - Array 2 Dimensi Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        
        /* KOTAK 1: Variasi Biru (Untuk Semua Data) */
        .kotak-semua {
            background-color: #eaf2f8;
            border-left: 5px solid #2980b9;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        
        /* KOTAK 2: Variasi Hijau (Untuk Kelas 2A) */
        .kotak-2a {
            background-color: #e8f8f5;
            border-left: 5px solid #16a085;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        
        /* KOTAK 3: Variasi Oranye (Untuk Data Spesifik/Siswa) */
        .kotak-spesifik {
            background-color: #fef9e7;
            border-left: 5px solid #f39c12;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 4px;
        }

        h4 {
            margin-top: 0;
            margin-bottom: 10px;
        }
        pre {
            margin: 0;
            font-family: Consolas, monospace;
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Kelas Baru (Array 2 Dimensi)</h2>

    <div class="kotak-semua">
        <h4 style="color: #2980b9;">1. Tampilan Semua Data Kelas:</h4>
        <pre><?php echo $semua_data; ?></pre>
    </div>

    <div class="kotak-2a">
        <h4 style="color: #16a085;">2. Tampilan Data Kelas 2A:</h4>
        <pre><?php echo $data_2a; ?></pre>
    </div>

    <div class="kotak-spesifik">
        <h4 style="color: #f39c12;">3. Tampilan Hasil Cari Siswa:</h4>
        • Kelas 2A indeks 0: <b><?php echo $kelas_2a_index_0; ?></b> <br>
        • Nama Siswa di 2C indeks 1: <b><?php echo $valen; ?></b> <br>
        • Nama Siswa di 2C indeks 2: <b><?php echo $cinta; ?></b>
    </div>
</div>

</body>
</html>