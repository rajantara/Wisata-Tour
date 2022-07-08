<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "select * from dokumen where id='$id'");
    $data_gambar = $query->fetch_array();

    $query_hapus = mysqli_query($koneksi, "delete from dokumen where id='$id'");
    unlink('files/' . $data_gambar['file']);
    header('location:admin_depan.php');
} else {
    header('location:admin_depan.php');
}
