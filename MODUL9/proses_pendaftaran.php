<?php
$nama   = isset($_POST["nama"]) && $_POST["nama"] !== "" ? htmlspecialchars($_POST["nama"]) : "Tamu Anonim";
$nim    = isset($_POST["nim"]) && $_POST["nim"] !== "" ? htmlspecialchars($_POST["nim"]) : "-";
$email  = isset($_POST["email"]) && $_POST["email"] !== "" ? htmlspecialchars($_POST["email"]) : "-";
$tempat = isset($_POST["tempat"]) && $_POST["tempat"] !== "" ? htmlspecialchars($_POST["tempat"]) : "-";
$ttl    = isset($_POST["ttl"]) && $_POST["ttl"] !== "" ? htmlspecialchars($_POST["ttl"]) : "-";
$alamat = isset($_POST["alamat"]) && $_POST["alamat"] !== "" ? htmlspecialchars($_POST["alamat"]) : "-";
$gender = isset($_POST["gender"]) && $_POST["gender"] !== "" ? htmlspecialchars($_POST["gender"]) : "-";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Proses Pendaftaran</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f2f8; /* Latar belakang ungu abu-abu super soft */
            padding: 40px 20px;
            color: #333;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        
        .box-debug {
            background-color: #2e4053;
            color: #f4f6f7;
            padding: 18px;
            border-radius: 12px;
            margin-bottom: 25px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 13px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        .judul-debug {
            color: #f1c40f;
            margin-top: 0;
            margin-bottom: 12px;
            font-size: 14px;
            font-weight: bold;
            border-bottom: 1px dashed #5d6d7e;
            padding-bottom: 6px;
        }
        .box-debug pre {
            margin: 5px 0 15px 0;
            background-color: #243342;
            padding: 10px;
            border-radius: 6px;
            overflow-x: auto;
            color: #34e7e4;
        }
        
        .card-hasil {
            background-color: white;
            padding: 35px;
            border-radius: 16px;
            border-top: 8px solid #8e44ad; /* Garis aksen atas warna Ungu Amethyst */
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        }
        h2 {
            margin-top: 0;
            color: #8e44ad;
            text-align: center;
            margin-bottom: 8px;
            font-size: 26px;
            font-weight: 700;
        }
        .wrapper-badge { 
            text-align: center; 
            margin-bottom: 30px;
        }
        .status-badge {
            font-size: 13px;
            color: #27ae60;
            font-weight: bold;
            background-color: #e8f8f5;
            padding: 6px 18px;
            border-radius: 20px;
            display: inline-block;
            border: 1px solid #a3e4d7;
        }
        
        /* 3. Desain Tabel Data */
        table.tabel-data {
            width: 100%;
            border-collapse: collapse;
            font-size: 15px;
        }
        table.tabel-data td {
            padding: 14px 10px;
            border-bottom: 1px solid #f2f0f5;
            vertical-align: top;
        }
        table.tabel-data tr:last-child td {
            border-bottom: none; /* Menghapus garis bawah pada baris terakhir */
        }
        .label-kolom {
            color: #7f8c8d;
            font-weight: 600;
            width: 32%;
        }
        .titik-dua {
            width: 5%;
            color: #95a5a6;
            text-align: center;
        }
        .isi-data {
            color: #2c3e50;
            font-weight: 500;
        }
        .highlight-nim {
            color: #8e44ad;
            font-family: monospace;
            font-size: 17px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="box-debug">
        <div class="judul-debug">DEBUGGING PARAMETER (Sistem Analisis Data)</div>
        <b>Isi $_GET :</b>
        <pre><?php print_r($_GET); ?></pre>
        
        <b>Isi $_POST :</b>
        <pre><?php print_r($_POST); ?></pre>
    </div>

    <div class="card-hasil">
        <h2>Selamat Datang, <?php echo $nama; ?>!</h2>
        
        <div class="wrapper-badge">
            <span class="status-badge">Data Pendaftaran Berhasil Diterima</span>
        </div>
        
        <table class="tabel-data">
            <tr>
                <td class="label-kolom">NIM</td>
                <td class="titik-dua">:</td>
                <td class="isi-data highlight-nim"><b><?php echo $nim; ?></b></td>
            </tr>
            <tr>
                <td class="label-kolom">Email</td>
                <td class="titik-dua">:</td>
                <td class="isi-data" style="color: #2980b9; text-decoration: underline;"><?php echo $email; ?></td>
            </tr>
            <tr>
                <td class="label-kolom">Tempat, Tgl Lahir</td>
                <td class="titik-dua">:</td>
                <td class="isi-data">
                    <?php 
                    if ($tempat === "-" && $ttl === "-") {
                        echo "-";
                    } else {
                        echo $tempat . ", " . $ttl; 
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="label-kolom">Alamat Tinggal</td>
                <td class="titik-dua">:</td>
                <td class="isi-data"><?php echo $alamat; ?></td>
            </tr>
            <tr>
                <td class="label-kolom">Jenis Kelamin</td>
                <td class="titik-dua">:</td>
                <td class="isi-data"><?php echo $gender; ?></td>
            </tr>
        </table>
    </div>

</div>

</body>
</html>