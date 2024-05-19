<?php
    require 'koneksi.php';

    $id_barang = $_GET['id_barang'];
    $sql_read = "SELECT * FROM barang_billy WHERE id_barang='$id_barang'";
    $exe_read = mysqli_query($koneksi, $sql_read);
    $res_read = mysqli_fetch_assoc($exe_read);

    if(isset($_POST['input'])){
        $val_id_barang = $_POST['id_barang'];
        $val_namabarang = $_POST['namabarang'];
        $val_satuan = $_POST['satuan'];
        $val_harga_satuan = $_POST['harga_satuan'];

        $sql = "UPDATE barang_billy SET id_barang='$val_id_barang', namabarang='$val_namabarang', satuan='$val_satuan', harga_satuan='$val_harga_satuan'";
        $execute = mysqli_query($koneksi, $sql);

        if($execute){
            header('location:barang_billy.php');
        }else{
            echo "Gagal Update Data !";
        }
    }
?>

<!DOCTYPE html>
    <head>
        <title></title>
    </head>
    <body>
        <div align="center">
        <h1>Edit Data Penjualan</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>ID</td>
                <td><input type="" name="id_barang" value="<?=$res_read['id_barang']?>" required="" readonly></td>
            </tr>
            <tr>
                <td>nama_barang</td>
                <td><input type="text" name="namabarang" value="<?=$res_read['namabarang']?>" required=""></td>
            </tr>
            <tr>
                <td>satuan</td>
                <td><input type="text" name="satuan" value="<?=$res_read['satuan']?>" required=""></td>
            </tr>
            <tr>
                <td>harga_satuan</td>
                <td><input type="text" name="harga_satuan" value="<?=$res_read['harga_satuan']?>" required=""></td>
            </tr>
            <tr>
                <td>aksi</td>
                <td><input type="submit" name="input" value="simpan"></td>
            </tr>
        </table>
        </form>
        </div>
        <div align="center">
            <br><a href="barang_billy.php"><button>Kembali</button></a>
        </div>
    </body>
</html>