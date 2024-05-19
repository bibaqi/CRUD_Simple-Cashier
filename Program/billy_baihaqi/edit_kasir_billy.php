<?php
    require 'koneksi.php';

    $id_kasir = $_GET['id_kasir'];
    $sql_read = "SELECT * FROM kasir_billy WHERE id_kasir='$id_kasir'";
    $exe_read = mysqli_query($koneksi, $sql_read);
    $res_read = mysqli_fetch_assoc($exe_read);

    if(isset($_POST['input'])){
        $val_username = $_POST['username'];
        $val_password = $_POST['password'];
        $val_namakasir = $_POST['namakasir'];
        $val_alamat = $_POST['alamat'];
        $val_nomorhp = $_POST['nomorhp'];
        $val_nomorktp = $_POST['nomorktp'];

        $sql = "UPDATE kasir_billy SET username='$val_username', password='$val_password', namakasir='$val_namakasir', alamat='$val_alamat', nomorhp='$val_nomorhp', nomorktp='$val_nomorktp' WHERE id_kasir='$id_kasir'";
        $execute = mysqli_query($koneksi, $sql);

        if($execute){
            header('location:kasir_billy.php');
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
                <td><input type="" name="id_kasir" value="<?=$res_read['id_kasir']?>" required="" readonly></td>
            </tr>
            <tr>
                <td>username</td>
                <td><input type="text" name="username" value="<?=$res_read['username']?>" required=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?=$res_read['password']?>" required=""></td>
            </tr>
            <tr>
                <td>Nama Kasir</td>
                <td><input type="text" name="namakasir" value="<?=$res_read['namakasir']?>" required=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?=$res_read['alamat']?>" required=""></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input type="text" name="nomorhp" value="<?=$res_read['nomorhp']?>" required=""></td>
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td><input type="text" name="nomorktp" value="<?=$res_read['nomorktp']?>" required=""></td>
            </tr>
            <tr>
                <td>aksi</td>
                <td><input type="submit" name="input" value="simpan"></td>
        </table>
        </form>
        </div>
        <div align="center">
            <br><a href="kasir_billy.php"><button>Kembali</button></a>
        </div>
    </body>
</html>