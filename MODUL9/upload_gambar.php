<?php
// ===================================================
// 1. BAGIAN LOGIKA PHP (Proses Upload & Multi Validasi)
// ===================================================

$target_dir = "gambar/";
$uploadOk = 1;
$pesan_list = array(); // Menggunakan array agar bisa menampung banyak pesan error sekaligus
$tipe_pesan = "sukses";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["gambar"]) && !empty($_FILES["gambar"]["name"])) {
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Otomatis membuat folder 'gambar' jika belum ada
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Validasi 1: Cek apakah file adalah gambar asli
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        // Gambar asli lolos
    } else {
        $pesan_list[] = "File yang dipilih bukan gambar asli!";
        $uploadOk = 0;
    }

    // Validasi 2: Cek apakah file sudah ada di server
    if (file_exists($target_file)) {
        $pesan_list[] = "Nama file sudah digunakan, silakan ganti nama file kamu terlebih dahulu.";
        $uploadOk = 0;
    }

    // Validasi 3: Cek ukuran file (Maksimal 500 KB)
    if ($_FILES["gambar"]["size"] > 500000) {
        $pesan_list[] = "Ukuran file terlalu besar! Maksimal batas ukuran adalah 500 KB.";
        $uploadOk = 0;
    }

    // Validasi 4: Hanya izinkan format gambar tertentu
    $ekstensi_diizinkan = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $ekstensi_diizinkan)) {
        $pesan_list[] = "Format ditolak! Hanya file JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
        $uploadOk = 0;
    }

    // Proses Eksekusi Akhir
    if ($uploadOk == 0) {
        $tipe_pesan = "gagal";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $nama_file_saja = htmlspecialchars(basename($_FILES["gambar"]["name"]));
            $pesan_list[] = "Berhasil! File <b>$nama_file_saja</b> sukses disimpan ke server.";
            $tipe_pesan = "sukses";
        } else {
            $pesan_list[] = "Sistem Error! Terjadi kegagalan saat memindahkan file.";
            $tipe_pesan = "gagal";
        }
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_FILES["gambar"]["name"])) {
    $pesan_list[] = "Silakan pilih file gambar terlebih dahulu sebelum menekan tombol upload!";
    $tipe_pesan = "gagal";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Upload Gambar Secure</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f8f5; /* Latar belakang hijau mint super soft */
            padding: 40px;
            color: #2c3e50;
        }
        .container-upload {
            background-color: white;
            max-width: 460px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 12px;
            border-top: 6px solid #1abc9c; /* Garis atas warna Mint Green */
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        }
        h2 {
            margin-top: 0;
            color: #16a085;
            text-align: center;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }
        
        /* Desain komponen form pilih file */
        .grup-pilih {
            background-color: #f4fbf9;
            border: 2px dashed #1abc9c;
            border-radius: 6px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        .grup-pilih input[type="file"] {
            font-size: 14px;
            color: #555;
            cursor: pointer;
        }
        
        input[type="submit"] {
            background-color: #1abc9c;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            font-size: 15px;
            transition: background 0.2s;
        }
        input[type="submit"]:hover {
            background-color: #16a085;
        }
        
        /* Notifikasi Alert Berkelompok */
        .box-notif {
            padding: 12px 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .box-notif ul {
            margin: 0;
            padding-left: 20px;
        }
        .box-notif li {
            margin-bottom: 3px;
        }
        .box-notif li:last-child {
            margin-bottom: 0;
        }
        .sukses { background-color: #d4edda; color: #155724; border-left: 4px solid #28a745; }
        .gagal { background-color: #f8d7da; color: #721c24; border-left: 4px solid #dc3545; }
        
        .info-syarat {
            font-size: 12px;
            color: #7f8c8d;
            margin-top: 15px;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #eee;
        }
    </style>
</head>
<body>

<div class="container-upload">
    <h2>Secure Image Upload</h2>
    
    <?php if (!empty($pesan_list)) { ?>
        <div class="box-notif <?php echo $tipe_pesan; ?>">
            <ul>
                <?php foreach ($pesan_list as $p) { ?>
                    <li><?php echo $p; ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <div class="grup-pilih">
            <input type="file" name="gambar" id="gambar">
        </div>
        <input type="submit" value="Unggah Sekarang" name="submit">
    </form>

    <div class="info-syarat">
        <b>Ketentuan File Server:</b>
        <ul style="margin: 5px 0 0 0; padding-left: 18px;">
            <li>Format diizinkan: JPG, JPEG, PNG, GIF</li>
            <li>Ukuran maksimal file: 500 KB</li>
            <li>Nama file tidak boleh kembar</li>
        </ul>
    </div>
</div>

</body>
</html>