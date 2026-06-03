<?php
class Database {
    private $host   = "localhost";
    private $user   = "root";
    private $passwd = "";           // sesuaikan password MySQL kamu
    private $name   = "koneksi_dbphp";
    public  $con;

    public function __construct() {
        $this->con = new mysqli($this->host, $this->user, $this->passwd, $this->name);
        if ($this->con->connect_error) {
            die("Koneksi dengan database gagal: " . $this->con->connect_errno .
                " - " . $this->con->connect_error);
        }
    }

    public function getConnection() {
        return $this->con;
    }

    public function close() {
        $this->con->close();
    }
}
?>