<?php
    include 'koneksi.php';
    if(isset($_GET['id_barang'])){
        $id_barang = $_GET['id_barang'];
        mysqli_query($koneksi, "DELETE FROM barang_billy where id_barang='$id_barang' ");
        header("location:barang_billy.php");
    }
?>