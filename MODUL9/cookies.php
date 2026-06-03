<?php
$nama_file_ini = basename($_SERVER['PHP_SELF']);

// A. PROSES SIMPAN COOKIES (Ketika tombol simpan diklik)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["simpan"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nim = $_POST["nim"];
    
    // Set cookies yang berlaku selama 1 hari (86400 detik)
    setcookie("nama", $nama, time() + 86400, "/");
    setcookie("email", $email, time() + 86400, "/");
    setcookie("nim", $nim, time() + 86400, "/");
    
    // Redirect otomatis kembali ke file ini sendiri agar tampilan langsung berubah
    header("Location: " . $nama_file_ini);
    exit();
}

// B. PROSES HAPUS COOKIES (Ketika link hapus diklik)
if (isset($_GET["hapus"])) {
    // Cara menghapus cookie adalah dengan memundurkan waktunya ke masa lalu (-3600 detik)
    setcookie("nama", "", time() - 3600, "/");
    setcookie("email", "", time() - 3600, "/");
    setcookie("nim", "", time() - 3600, "/");
    
    header("Location: " . $nama_file_ini);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Cookies - Identitas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fcf3f7; /* Latar belakang pink super soft */
            padding: 30px;
            color: #333;
        }
        .kotak-ktm {
            background-color: white;
            max-width: 400px;
            margin: 0 auto;
            padding: 25px;
            border-radius: 12px;
            border-top: 6px solid #e91e63; /* Garis atas warna Magenta/Pink tegas */
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        h3 {
            margin-top: 0;
            color: #e91e63;
            text-align: center;
            border-bottom: 2px dashed #fcd1e1;
            padding-bottom: 10px;
        }
        label {
            font-size: 14px;
            font-weight: bold;
            color: #666;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin: 6px 0 15px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #e91e63;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
        }
        .data-list {
            background-color: #fdf2f5;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #e91e63;
            margin-bottom: 15px;
        }
        .btn-hapus {
            display: block;
            text-align: center;
            background-color: #7f8c8d;
            color: white;
            padding: 8px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
        }
        .btn-hapus:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<div class="kotak-ktm">
    
    <?php if (isset($_COOKIE["nama"]) && !empty($_COOKIE["nama"])) { ?>
        
        <h3>Profil Mahasiswa</h3>
        
        <div class="data-list">
            NIM : <b><?php echo htmlspecialchars($_COOKIE["nim"]); ?></b> <br><br>
            Nama : <b><?php echo htmlspecialchars($_COOKIE["nama"]); ?></b> <br><br>
            Email : <b><?php echo htmlspecialchars($_COOKIE["email"]); ?></b>
        </div>
        
        <a href="<?php echo $nama_file_ini; ?>?hapus=1" class="btn-hapus">Hapus Identitas</a>

    <?php } else { ?>
        
        <h3>Input Identitas</h3>
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>NIM:</label>
            <input type="text" name="nim" placeholder= >

            <label>Nama Lengkap:</label>
            <input type="text" name="nama" placeholder= >

            <label>Email:</label>
            <input type="email" name="email" placeholder= >
            
            <input type="submit" name="simpan" value="Simpan">
        </form>

    <?php } ?>

</div>

</body>
</html>