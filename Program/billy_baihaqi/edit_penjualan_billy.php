<?php
    require 'koneksi.php';

    $id_penjualan = $_GET['id_penjualan'];
    $sql_read = "SELECT * FROM detail_penjualan_billy WHERE id_penjualan='$id_penjualan'";
    $exe_read = mysqli_query($koneksi, $sql_read);
    $res_read = mysqli_fetch_assoc($exe_read);

    if(isset($_POST['input'])){
        $val_id_penjualan = $_POST['id_penjualan'];
        $val_id_barang = $_POST['id_barang'];
        $val_kuantitas = $_POST['kuantitas'];
        $val_harga_satuan = $_POST['harga_satuan'];
        $val_sub_total = $_POST['sub_total'];

        $sql = "UPDATE detail_penjualan_billy SET id_penjualan='$val_id_penjualan', id_barang='$val_id_barang', kuantitas='$val_kuantitas', harga_satuan='$val_harga_satuan', sub_total='$val_sub_total'";
        $execute = mysqli_query($koneksi, $sql);

        if($execute){
            header('location:penjualan_billy.php');
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
        <h1>Edit Data Kasir</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>ID</td>
                <td><input type="" name="id_penjualan" value="<?=$res_read['id_penjualan']?>" required="" readonly></td>
            </tr>
            <tr>
                <td>username</td>
                <td><input type="text" name="id_barang" value="<?=$res_read['id_barang']?>" required=""></td>
            </tr>
            <tr>
                <td>kuantitas</td>
                <td><input type="text" name="kuantitas" value="<?=$res_read['kuantitas']?>" required=""></td>
            </tr>
            <tr>
                <td>harga_satuan</td>
                <td><input type="text" name="harga_satuan" value="<?=$res_read['harga_satuan']?>" required=""></td>
            </tr>
            <tr>
                <td>sub_total</td>
                <td><input type="text" name="sub_total" value="<?=$res_read['sub_total']?>" required=""></td>
            </tr>
            <tr>
                <td>aksi</td>
                <td><input type="submit" name="input" value="simpan"></td>
            </tr>
        </table>
        </form>
        </div>
        <div align="center">
            <br><a href="penjualan_billy.php"><button>Kembali</button></a>
        </div>
    </body>
</html>