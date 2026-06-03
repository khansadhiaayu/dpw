<?php
// ===================================================
// 1. BAGIAN LOGIKA PHP (Membaca Folder Gambar untuk Didownload)
// ===================================================

$html_daftar_download = "";

// Kita gunakan folder 'gambar' yang sudah kamu buat sebelumnya
$dir_tujuan = 'gambar/*';
$daftar_file = glob($dir_tujuan);

if (!empty($daftar_file)) {
    foreach ($daftar_file as $path_file) {
        if (is_file($path_file)) {
            $nama_file_saja = basename($path_file);
            
            // Menyusun baris list download dengan memanfaatkan atribut HTML5 'download'
            $html_daftar_download .= "<div class='item-file'>";
            $html_daftar_download .= "  <span class='nama-berkas'>📄 $nama_file_saja</span>";
            $html_daftar_download .= "  <a href='$path_file' download='$nama_file_saja' class='btn-unduh'>Unduh</a>";
            $html_daftar_download .= "</div>";
        }
    }
} else {
    $html_daftar_download = "<p style='color: #999; text-align: center; padding: 20px;'>
                             Tidak ada file di folder 'gambar/'. Silakan isi foto/file terlebih dahulu.</p>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Pusat Unduhan File</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ebf5fb; /* Latar belakang biru awan super soft */
            padding: 40px;
            color: #333;
        }
        .kotak-download {
            background-color: white;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
            border-top: 6px solid #3498db; /* Garis atas warna Biru Cerah */
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        h2 {
            margin-top: 0;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 5px;
        }
        .sub-judul {
            text-align: center;
            color: #7f8c8d;
            font-size: 13px;
            margin-bottom: 25px;
        }
        
        /* Pembungkus daftar file */
        .list-container {
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            overflow: hidden;
        }
        
        /* Desain baris per file (flexbox kiri-kanan) */
        .item-file {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            background-color: #fafafa;
        }
        .item-file:last-child {
            border-bottom: none; /* Menghilangkan garis di baris paling terakhir */
        }
        .item-file:hover {
            background-color: #f1f9ff; /* Efek highlight biru tipis saat disorot mouse */
        }
        
        .nama-berkas {
            font-size: 14px;
            font-weight: 500;
            color: #34495e;
            /* Potong teks jika nama file terlalu panjang */
            max-width: 320px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        /* Tombol unduh bergaya minimalis murni CSS */
        .btn-unduh {
            background-color: #3498db;
            color: white;
            text-decoration: none;
            padding: 6px 14px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: bold;
            transition: background 0.2s;
        }
        .btn-unduh:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="kotak-download">
    <h2>Pusat Unduhan Berkas</h2>
    <div class="sub-judul">Klik tombol di samping kanan nama file untuk mengunduh</div>
    
    <div class="list-container">
        <?php echo $html_daftar_download; ?>
    </div>
</div>

</body>
</html>