<?php
    include 'koneksi.php';
    if(isset($_GET['id_penjualan'])){
        $id_penjualan = $_GET['id_penjualan'];
        mysqli_query($koneksi, "DELETE FROM detail_penjualan_billy where id_penjualan='$id_penjualan' ");
        header("location:penjualan_billy.php");
    }
?>