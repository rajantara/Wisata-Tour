<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("location:admin_depan.php");
}
include("koneksi.php");
$username = "";
$pass = "";
$err = "";
if (isset($_POST['login'])) {
    $username   = $_POST['username'];
    $pass   = $_POST['pass'];
    if ($username == '' or $pass == '') {
        $err .= "<li>Silakan masukkan username dan password</li>";
    }
    if (empty($err)) {
        $sql1 = "select * from admin where username = '$username'";
        $q1 = mysqli_query($koneksi, $sql1);
        $r1 = mysqli_fetch_array($q1);
        if ($r1['pass'] != md5($pass)) {
            $err .= "<li>Akun tidak ditemukan</li>";
        }
    }
    if (empty($err)) {
        $_SESSION['admin_username'] = $username;
        header("location:admin_depan.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="app">
        <h1>Halaman Login</h1>
        <?php
        if ($err) {
            echo "<ul>$err</ul>";
        }
        ?>
        <form action="" method="post">
            <input type="text" name="username" class="input" placeholder="Isikan Username..." /><br /><br />
            <input type="password" name="pass" class="input" placeholder="Isikan Password" /><br /><br />
            <input type="submit" name="login" value="Masuk Ke Sistem" />
        </form>
    </div>
</body>

</html>