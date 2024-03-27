<?php

class Database {
    var $host;
    var $uname;
    var $pass;
    var $db;
    var $conn;

    function __construct() 
    {
        $this->host = "localhost";
        $this->uname  = "root";
        $this->pass = "";
        $this->db = "db_akademik";

        $this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
    }

    public function tampil() {
        $sql = "SELECT * FROM `mahasiswa`";
        $result = mysqli_query($this->conn, $sql);

        return $result; 
    }

    public function tampilById($id) {
        $sql = "SELECT * FROM `mahasiswa` WHERE id=$id";
        $result = mysqli_query($this->conn, $sql);

        return $result; 
    }

    public function simpan($nama, $umur, $alamat) {

        $sql = "INSERT INTO `mahasiswa`(`id`, `nama`, `umur`, `alamat`) VALUES (NULL, '$nama', $umur, '$alamat')";

        $result = mysqli_query($this->conn, $sql);

        return $result;

    }

    public function edit($id, $nama, $umur, $alamat) {
        $sql = "UPDATE `mahasiswa` SET `nama`='$nama', `umur`=$umur, `alamat`='$alamat' WHERE id=$id";

        $result = mysqli_query($this->conn, $sql);

        return $result;
    }

    public function hapus($id) {
        $sql = "DELETE FROM `mahasiswa` WHERE id = $id";

        $result = mysqli_query($this->conn, $sql);

        return $result;
    }

}

    $obj = new Database;

?>