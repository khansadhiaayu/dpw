<?php
// Hubungkan dengan cetakan akunBank
require_once 'kelas/akunBank.php';

// Membuat objek akun bank pertama (Rexcy)
$data1 = new akunBank("801", 100000); // Saldo awal 100.000
$data1->setNama("Rexcy");
$data1->tambahUang(50000); // Rexcy menabung 50.000 -> Total jadi 150.000

// Membuat objek akun bank kedua (Michelle)
$data2 = new akunBank("802", 200000); // Saldo awal 200.000
$data2->setNama("Michelle");
$data2->kurangiUang(30000); // Michelle menarik uang 30.000 -> Total jadi 170.000
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Data Bank</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f7f6;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        table {
            background: white;
            border-collapse: collapse;
            width: 80% ;
            max-width: 800px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .money {
            font-weight: bold;
            color: #28a745;
        }
        .tax {
            color: #dc3545;
        }
    </style>
</head>
<body>

    <h2>Laporan Keuangan Nasabah Bank</h2>

    <table>
        <tr>
            <th>No. Akun</th>
            <th>Nama Nasabah</th>
            <th>Total Saldo</th>
            <th>Pajak (11%)</th>
        </tr>
        <tr>
            <td><?php echo $data1->getAccountNumber(); ?></td>
            <td><?php echo $data1->getNama(); ?></td>
            <td class="money">Rp <?php echo number_format($data1->getJmlUang(), 0, ',', '.'); ?></td>
            <td class="tax">Rp <?php echo number_format($data1->hitungPajak(), 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td><?php echo $data2->getAccountNumber(); ?></td>
            <td><?php echo $data2->getNama(); ?></td>
            <td class="money">Rp <?php echo number_format($data2->getJmlUang(), 0, ',', '.'); ?></td>
            <td class="tax">Rp <?php echo number_format($data2->hitungPajak(), 0, ',', '.'); ?></td>
        </tr>
    </table>

</body>
</html>