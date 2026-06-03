<?php
$jumlah = 1387500;
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);
$sisa = $jumlah;

$list_pecahan = "";

foreach ($pecahan as $nominal) {
    $lembar = intdiv($sisa, $nominal);
    $sisa = $sisa % $nominal;
    
    // Hanya tampilkan pecahan yang mendapatkan lembaran (lebih dari 0)
    if ($lembar > 0) {
        $list_pecahan .= "<div class='baris-pecahan'>
                            <span>Rp. " . number_format($nominal, 0, ',', '.') . "</span>
                            <b>$lembar lembar/koin</b>
                          </div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 2 - Pecahan Uang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f7;
            padding: 20px;
        }
        .kotak-bank {
            background-color: white;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #2980b9;
            margin-top: 0;
        }
        .total-box {
            background-color: #ebf5fb;
            color: #2c3e50;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .baris-pecahan {
            display: flex;
            justify-content: space-between;
            padding: 6px 10px;
            background-color: #fcfcfc;
            border: 1px solid #eee;
            margin-bottom: 4px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="kotak-bank">
    <h2>Rincian Penarikan Uang</h2>
    
    <div class="total-box">
        Total: Rp. <?php echo number_format($jumlah, 0, ',', '.'); ?>
    </div>
    
    <?php echo $list_pecahan; ?>
    
    <div class="baris-pecahan" style="background-color: #fcf3cf; border-color: #f4d03f;">
        <span>Sisa Kembalian:</span>
        <b>Rp. <?php echo number_format($sisa, 0, ',', '.'); ?></b>
    </div>
</div>

</body>
</html>