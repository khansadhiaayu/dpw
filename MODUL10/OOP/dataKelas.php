<?php
require_once ('kelas/Mahasiswa.php');

$mhs = new Mahasiswa("Ayu Dhia Khansa");
$mhs->setNIM("253307009");
$mhs->setJurusan("Teknologi Informasi");
$mhs->setKelas("2A");

echo "<h3>Data Mahasiswa</h3>";
echo "Nama: " . $mhs->getNama() . "<br>";
echo "NIM: " . $mhs->getNIM() . "<br>";
echo "Jurusan: " . $mhs->getJurusan() . "<br>";
echo "Kelas: " . $mhs->getKelas() . "<br>";
?>