<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <div align="center">
        <h1>Login</h1>
        <form action="login_billy.php" method="post">
            <table border="2" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="Masukan Username" required=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" placeholder="Masukan Password" required=""></td>
                </tr>
                <tr>
                    <td>Aksi</td>
                    <td><input type="submit" name="input" value="Submit">
                </tr>
            </table>
        </form>
        <h3>Keluar? : <a href="index.php"><button>Logout</button></a>
    </div>
</body>
</html>