<?php
    include "koneksi.php";

    if(isset($_POST['input'])){
        $id_kasir = $_POST['id_kasir'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $namakasir = $_POST['namakasir'];
        $alamat = $_POST['alamat'];
        $nomorhp = $_POST['nomorhp'];
        $nomorktp = $_POST['nomorktp'];

    mysqli_query($koneksi, "INSERT INTO kasir_billy VALUE ('$id_kasir','$username','$password','$namakasir','$alamat','$nomorhp','$nomorktp')");
    header("location:lihat_shift_billy.php");
    }
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
    <div align="center">
        <form method="post">
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>ID Kasir</td>
                    <td><input type="text" name="id_kasir" placeholder="masukkan id" required=""></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="masukkan username" required=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required=""></td>
                </tr>
                <tr>
                    <td>Nama Kasir</td>
                    <td><input type="text" name="namakasir" placeholder="masukkan nama kasir" required=""></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" placeholder="masukkan alamat" required=""></td>
                </tr>
                <tr>
                    <td>Nomor HP</td>
                    <td><input type="text" name="nomorhp" placeholder="masukkan nomor hp" required=""></td>
                </tr>
                <tr>
                    <td>Nomor KTP</td>
                    <td><input type="text" name="nomorktp" placeholder="masukkan nomor ktp" required=""></td>
                </tr>
                <tr>
                    <td>Aksi</td>
                    <td><input type="submit" name="input" value="Simpan">
                        <input type="reset" name="reset" value="Batal">
                    </td>
            </table>
        </form>

        <?php
        $view = $koneksi->query("SELECT * FROM kasir_billy");
        ?>
        <br><br>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>ID Kasir</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Kasir</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Nomor KTP</th>
                <th>Aksi</th>
            </tr>
        <?php
        while ($row = $view->fetch_array()) {
        ?>
            <tr>
                <td> <?=$row['id_kasir']?></td>
                <td> <?=$row['username']?></td>
                <td> <?=$row['password']?></td>
                <td> <?=$row['namakasir']?></td>
                <td> <?=$row['alamat']?></td>
                <td> <?=$row['nomorhp']?></td>
                <td> <?=$row['nomorktp']?></td>
                <td><a href="edit_kasir_billy.php?id_kasir=<?= $row['id_kasir']?>"><button>edit</button></a>
                    <a href="delete_kasir_billy.php?id_kasir=<?= $row['id_kasir']?>" onclick="return confirm('apa anda yakin')"><button>hapus</button></a>
                </td>
            </tr>
            <?php
        }?>
        </table>
        <br><br><h3>Kembali ke:<a href="master_billy.php"><button>Master Data</button></a>
    </div>
</body>