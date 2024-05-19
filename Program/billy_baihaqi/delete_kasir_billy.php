<?php
    include 'koneksi.php';
    if(isset($_GET['id_kasir'])){
        $id_kasir = $_GET['id_kasir'];
        mysqli_query($koneksi, "DELETE FROM kasir_billy where id_kasir='$id_kasir' ");
        header("location:kasir_billy.php");
    }
?>