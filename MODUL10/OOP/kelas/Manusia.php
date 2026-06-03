<?php
class Manusia
{
    // Properti (diubah ke protected agar bisa diturunkan nanti) [cite: 24, 25]
    protected $name;
    protected $nik = "123212131243243"; // Default NIK [cite: 25]
    protected $umur;

    // Getter & Setter untuk Nama [cite: 26, 30]
    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }

    // Getter untuk NIK (diubah ke public agar bisa dipanggil di index.php) [cite: 50]
    public function getNIK()
    {
        return $this->nik;
    }

    // Getter & Setter untuk Umur (Tugas Modul) 
    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
}