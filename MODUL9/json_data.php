<?php
// ===================================================
// 1. BAGIAN LOGIKA PHP (Proses Manipulasi Data & JSON)
// ===================================================

// Data Array Multidimensi Asli dari Soal Modul
$data = array(
    array("nama" => "Mendy", "umur" => 20),
    array("nama" => "Michelle", "umur" => 21),
    array("nama" => "Mayra", "umur" => 19),
    array("nama" => "Arinda", "umur" => 22),
    array("nama" => "Dinda", "umur" => 20),
    array("nama" => "Shafira", "umur" => 23),
    array("nama" => "Aya", "umur" => 21),
    array("nama" => "Mici", "umur" => 24),
    array("nama" => "Angga", "umur" => 19),
    array("nama" => "Faizal", "umur" => 22),
    array("nama" => "Arkan", "umur" => 20),
    array("nama" => "Farid", "umur" => 21),
    array("nama" => "Syahrul", "umur" => 23),
    array("nama" => "Bayu", "umur" => 18),
    array("nama" => "Dika", "umur" => 25)
);

// Mengubah Array PHP menjadi format teks JSON
// JSON_PRETTY_PRINT membuat teks JSON memiliki spasi dan enter agar rapi dibaca manusia
$json_hasil = json_encode($data, JSON_PRETTY_PRINT);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Konversi JSON</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f7;
            padding: 30px;
            color: #333;
        }
        .container {
            max-width: 750px;
            margin: 0 auto;
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            border-top: 6px solid #2e4053; /* Garis atas abu-abu gelap */
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        h2 {
            margin-top: 0;
            color: #2e4053;
            text-align: center;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }
        
        /* Flexbox untuk membagi 2 kolom bersandingan */
        .grup-kolom {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .kolom {
            flex: 1;
            min-width: 0; /* Mencegah konten meluber keluar */
        }
        h4 {
            margin-bottom: 8px;
            color: #2e4053;
            font-size: 14px;
            text-transform: uppercase;
        }
        
        /* Gaya boks hitam mirip text editor (VS Code) */
        pre {
            background-color: #1e1e1e; /* Warna latar hitam pekat */
            padding: 15px;
            border-radius: 6px;
            overflow-x: auto; /* Memunculkan scrollbar jika teks terlalu lebar */
            margin-top: 0;
            max-height: 400px; /* Batasi tinggi boks agar tidak terlalu panjang ke bawah */
        }
        
        /* Warna teks kode di dalam boks */
        .teks-array {
            color: #4fc1ff; /* Biru cerah khas variabel */
            font-family: 'Courier New', Courier, monospace;
            font-size: 13px;
        }
        .teks-json {
            color: #6a9955; /* Hijau Emerald khas string JSON */
            font-family: 'Courier New', Courier, monospace;
            font-size: 13px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Konversi Array PHP ke JSON</h2>
    
    <div class="grup-kolom">
        
        <div class="kolom">
            <h4>1. Format Array PHP (print_r):</h4>
            <pre><code class="teks-array"><?php print_r($data); ?></code></pre>
        </div>
        
        <div class="kolom">
            <h4>2. Hasil Format JSON:</h4>
            <pre><code class="teks-json"><?php echo $json_hasil; ?></code></pre>
        </div>
        
    </div>
</div>

</body>
</html>