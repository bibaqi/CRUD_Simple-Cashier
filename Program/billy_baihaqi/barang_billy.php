<?php
    include 'koneksi.php';

    if(isset($_POST['input'])){
        $id_barang = $_POST['id_barang'];
        $namabarang = $_POST['namabarang'];
        $satuan = $_POST['satuan'];
        $harga_satuan = $_POST['harga_satuan'];
        
        mysqli_query($koneksi, "INSERT INTO barang_billy VALUE ('$id_barang','$namabarang','$satuan','$harga_satuan')");
        header("location:barang_billy.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
</head>
<body>
    <div align="center">
        <h1>MASTER BARANG</h1>
    </div>
    <div align="center">
        <form method="post">
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>ID Barang :</td>
                    <td><input type="text" name="id_barang" placeholder="Masukan ID Barang" required=""></td>
                    <td>Satuan :</td>
                    <td><input type="text" name="satuan" placeholder="Masukan Stok" required=""></td>
                    <td>Aksi</td>
                </tr>
                <tr>
                    <td>Nama Barang :</td>
                    <td><input type="text" name="namabarang" placeholder="Masukan Barang" required=""></td>
                    <td>Harga Satuan :</td>
                    <td><input type="text" name="harga_satuan" placeholder="Masukan jumlah satuan" required=""></td>
                    <td><input type="submit" name="input" value="Simpan">
                        <input type="reset" name="reset" value="Batal">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        $view = $koneksi->query("SELECT * FROM barang_billy");
        ?>
        <br><br>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Harga Satuan</th>
                <th>Aksi</th>
            </tr>
        <?php
        while ($row = $view->fetch_array()) {
        ?>
            <tr>
                <td> <?=$row['id_barang']?></td>
                <td> <?=$row['namabarang']?></td>
                <td> <?=$row['satuan']?></td>
                <td> <?=$row['harga_satuan']?></td>
                <td><a href="edit_barang_billy.php?id_barang=<?= $row['id_barang']?>"><button>edit</button></a>
                    <a href="delete_penjualan_billy.php?id_barang=<?= $row['id_barang']?>" onclick="return confirm('apa anda yakin')"><button>hapus</button></a>
                </td>
            </tr>
            <?php
        }?>
        </table>
        <br><br><h3>Kembali ke:<a href="master_billy.php"><button>Master Data</button></a>
    </div>
</body>
    </div>
</body>
</html>