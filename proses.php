<?php
include "koneksi.php";

if (isset($_POST['proses'])) {
    $temp = $_FILES['file']['tmp_name'];
    $filename = rand(0, 9999) . $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type = $_FILES['file']['type'];
    $coment = $_POST['coment'];
    $folder = "berkas/";
    if ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png')) {
        move_uploaded_file($temp, $folder . $filename);
        mysqli_query($koneksi, "insert into dokumen (file,coment,tipe_file,ukuran_file) values ('$filename','$coment','$type','$size')");
        header('location:admin_depan.php');
    } else {
        echo "<b>Gagal Upload File</b>";
    }
}
