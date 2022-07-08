<?php
include("koneksi.php");
include("header.php");

$data = mysqli_query($koneksi, "SELECT * FROM dokumen WHERE id = '" . $_GET['id'] . "'");
$r = mysqli_fetch_array($data);

$file = $r['file'];
$coment = $r['coment'];

//edit dokumen foto dan coment
if (isset($_POST['kirim'])) {
    $temp = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];
    $coment = $_POST['coment'];
    $folder = "berkas/";
    if ($filename != '') {
        move_uploaded_file($temp, $folder . $filename);
        $update = mysqli_query($koneksi, "UPDATE dokumen SET 
        coment = '" . $coment . "',
        file = '" . $filename . "'
        WHERE id = '" . $_GET['id'] . "'
        ");
        if ($update) {
            header('location:admin_depan.php');
        } else {
            echo "gagal";
        }
    } else {
        $update = mysqli_query($koneksi, "UPDATE dokumen SET 
        coment = '" . $coment . "',
        file = '" . $filename . "'
        WHERE id = '" . $_GET['id'] . "'
        ");
        if ($update) {
            header('location:admin_depan.php');
        } else {
            echo "gagal";
        }
    }
}

?>

<body style="font-family: 'Fresca', sans-serif;">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="mb-4" src="./Signin Template · Bootstrap v5.2_files/camera.png" alt="" width="30" height="24">
                Tourism Website
            </a>
        </div>
    </nav>
    <div class="container">
        <h2>Edit Tourist</h2>
        <?php
        $sql2   = "select * from admin order by id desc";
        $q2     = mysqli_query($koneksi, $sql2);
        $urut   = 1;
        while ($r2 = mysqli_fetch_array($q2)) {
            $username         = $r2['username'];
        }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card shadow-sm">
                <img src="berkas/<?php echo $r['file']; ?>">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Input File Here</label>
                <input class="form-control" type="file" name="file">
                <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tour name</label>
                <input type="text" class="form-control" name="coment" placeholder="coment" value="<?php echo $coment ?>">
            </div>
            <button name="kirim" type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-dark my-2 my-sm-0" href="admin_depan.php" role="button">Back</a>
        </form>
        <br>
    </div>