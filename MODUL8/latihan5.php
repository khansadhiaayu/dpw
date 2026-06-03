<?php
// 1. BAGIAN LOGIKA PHP (Proses data)
$warna = "merah";

switch ($warna) {
    case "merah":
        $hasil = "Warna adalah merah";
        break; // Menghentikan pengecekan jika sudah cocok
    case "kuning":
        $hasil = "Warna adalah kuning";
        break; // Ditambahkan break agar tidak bocor ke bawah
    case "hijau":
        $hasil = "Warna adalah hijau";
        break;
    default:
        $hasil = "Warna tidak dikenal!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 5 - Switch</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .kotak-hasil {
            background-color: #eeeeee;
            padding: 15px;
            border-left: 4px solid #333333;
            display: inline-block;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h3>Hasil Pengecekan Switch:</h3>
    
    <div class="kotak-hasil">
        <?php echo $hasil; ?>
    </div>

</body>
</html>