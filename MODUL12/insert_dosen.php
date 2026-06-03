<?php
require_once 'Database.php';
$db = new Database();
$con = $db->getConnection();

$stmt = $con->prepare("INSERT INTO t_dosen (idDosen, namaDosen, noHP) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $idDosen, $namaDosen, $noHP);

$idDosen   = 10;
$namaDosen = 'Rahmat Dwi Prasetya';
$noHP      = '081122334455';

$hasil = $stmt->execute();

if ($hasil === TRUE) {
    echo "Data dosen berhasil ditambahkan";
} else {
    echo "Error: " . $con->error;
}

$stmt->close();
$db->close();
?>