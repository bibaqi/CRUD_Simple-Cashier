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
            header('location:buka_shift_billy.php');
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
        <h1>Buka Shift</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>Id Kasir</td>
                <td><input type="" name="id_kasir" value="<?=$res_read['id_kasir']?>" required="" readonly></td>
            </tr>
            <tr>
                <td>Nama Kasir</td>
                <td><input type="" name="nama" value="<?=$res_read['namakasir']?>" required="" readonly></td>
            </tr>
            <tr>
                <td>Saldo Awal</td>
                <td><input type="" name="saldo_awal" value="<?=$res_read['saldo_awal']?>" required=""></td>
            </tr>
            <tr>
                <td>aksi</td>
                <td><input type="submit" name="input" value="simpan"></td>
            </tr>
        </table>
        </form>
        </div>
        <div align="center">
            <br><a href="shift_billy.php"><button>Kembali</button></a>
        </div>
    </body>
</html>