<?php
class akunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama; 

    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function tambahUang($jumlah)
    {
        $this->jmlUang += $jumlah;
    }

    public function kurangiUang($jumlah)
    {
        if ($this->jmlUang >= $jumlah) {
            $this->jmlUang -= $jumlah;
        } else {
            echo "<script>alert('Saldo tidak cukup!');</script>";
        }
    }

    public function getJmlUang()
    {
        return $this->jmlUang;
    }

    public function hitungPajak()
    {
        return $this->jmlUang * 0.11;
    }
}