<?php
    include "koneksi.php";

    if(isset($_POST['input'])){
        $id_penjualan = $_POST['id_penjualan'];
        $id_barang = $_POST['id_barang'];
        $kuantitas = $_POST['kuantitas'];
        $harga_satuan = $_POST['harga_satuan'];
        $subtotal = $_POST['sub_total'];

    mysqli_query($koneksi, "INSERT INTO detail_penjualan_billy VALUE ('$id_penjualan','$id_barang','$kuantitas','$harga_satuan','$subtotal')");
    header("location:penjualan_billy.php");
    }
?>
<!DOCTYPE html>
<head>
    <title>Data Penjualan</title>
</head>
<body>
    <div align="center">
        <h1>Data Penjualan</h1>
        <form method="post">
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>ID penjualan</td>
                    <td><input type="text" name="id_penjualan" placeholder="masukkan id" required=""></td>
                </tr>
                <tr>
                    <td>ID Barang</td>
                    <td><input type="text" name="id_barang" placeholder="masukkan username" required=""></td>
                </tr>
                <tr>
                    <td>Kuantitas</td>
                    <td><input type="text" name="kuantitas" placeholder="masukan kuantitas" required=""></td>
                </tr>
                <tr>
                    <td>harga satuan</td>
                    <td><input type="text" name="harga_satuan" placeholder="masukkan harga_satuan" required=""></td>
                </tr>
                <tr>
                    <td>subtotal</td>
                    <td><input type="text" name="sub_total" placeholder="masukkan subtotal" required=""></td>
                </tr>
                <tr>
                    <td>Aksi</td>
                    <td><input type="submit" name="input" value="Simpan">
                        <input type="reset" name="reset" value="Batal">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        $view = $koneksi->query("SELECT * FROM detail_penjualan_billy");
        ?>
        <br><br>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>ID Penjualan</th>
                <th>ID Barang</th>
                <th>Kuantitas</th>
                <th>Harga Satuan</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
        <?php
        while ($row = $view->fetch_array()) {
        ?>
            <tr>
                <td> <?=$row['id_penjualan']?></td>
                <td> <?=$row['id_barang']?></td>
                <td> <?=$row['kuantitas']?></td>
                <td> <?=$row['harga_satuan']?></td>
                <td> <?=$row['sub_total']?></td>
                <td><a href="edit_penjualan_billy.php?id_penjualan=<?= $row['id_penjualan']?>"><button>edit</button></a>
                    <a href="delete_penjualan_billy.php?id_penjualan=<?= $row['id_penjualan']?>" onclick="return confirm('apa anda yakin')"><button>hapus</button></a>
                </td>
            </tr>
            <?php
        }?>
        </table>
        <br><br><h3>Kembali ke : <a href="index.php"><button>Dashboard</button></a>
    </div>
</body>