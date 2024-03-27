<?php
    include "database.php";
    $id = $_GET["id"];
    $db = new Database;

    $result = $db->hapus($id);
    if ($result) {
        header("Location: tampil.php?msg=Berhasil menghapus mahasiswa");
    } else {
        header("Location: tampil.php?msg=Gagal menghapus mahasiswa");
    }
?>