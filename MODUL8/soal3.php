<?php
$siswa = array(
    array("no" => 1, "poin" => 75, "nama" => "Adi"),
    array("no" => 2, "poin" => 80, "nama" => "Joni"),
    array("no" => 3, "poin" => 65, "nama" => "Jihan"),
    array("no" => 4, "poin" => 70, "nama" => "Aya"),
    array("no" => 5, "poin" => 85, "nama" => "Ita"),
    array("no" => 6, "poin" => 90, "nama" => "Budi"),
    array("no" => 7, "poin" => 95, "nama" => "Tini"),
    array("no" => 8, "poin" => 65, "nama" => "Sari")
);

// a) Poin siswa nomor urut 5 (Indeks array dimulai dari 0, jadi nomor 5 ada di indeks ke-4)
$siswa_no5_nama = $siswa[4]['nama'];
$siswa_no5_poin = $siswa[4]['poin'];

// b) Cari siswa yang memiliki poin 90
$output_poin90 = "";
foreach ($siswa as $s) {
    if ($s['poin'] == 90) {
        $output_poin90 .= "• Nama: <b>" . $s['nama'] . "</b> (Poin: " . $s['poin'] . ")<br>";
    }
}
if (empty($output_poin90)) { $output_poin90 = "Tidak ada siswa dengan poin 90"; }

// c) Cari siswa yang memiliki poin 100
$output_poin100 = "";
foreach ($siswa as $s) {
    if ($s['poin'] == 100) {
        $output_poin100 .= "• Nama: <b>" . $s['nama'] . "</b> (Poin: " . $s['poin'] . ")<br>";
    }
}
if (empty($output_poin100)) { $output_poin100 = "Tidak ada siswa dengan poin 100"; }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 3 - Nilai Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
        }
        .sub-kotak {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .judul-sub {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 15px;
            color: #e67e22;
            border-bottom: 1px solid #eee;
            padding-bottom: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Nilai Akhir Kelas</h2>

    <div class="sub-kotak">
        <h4 class="judul-sub">a) Poin Siswa Nomor Urut 5:</h4>
        Nama: <b><?php echo $siswa_no5_nama; ?></b> <br>
        Poin: <b><?php echo $siswa_no5_poin; ?></b>
    </div>

    <div class="sub-kotak">
        <h4 class="judul-sub">b) Siswa dengan Poin 90:</h4>
        <?php echo $output_poin90; ?>
    </div>

    <div class="sub-kotak">
        <h4 class="judul-sub">c) Siswa dengan Poin 100:</h4>
        <?php echo $output_poin100; ?>
    </div>
</div>

</body>
</html>