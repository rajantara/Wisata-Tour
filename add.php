<?php
include("header.php");
include("proses.php");
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
        <h2>Add Tourist</h2>
        <form action="proses.php" method="POST" enctype="multipart/form-data">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                </svg>
            </div>
            <div class="mb-3">
                <label class="form-label">Input File Here</label>
                <input class="form-control" type="file" name="file">
                <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tour name</label>
                <textarea class="form-control" name="coment" required="required" rows="3"></textarea>
            </div>
            <input type="submit" name="proses" class="btn btn-primary" value="Save">
            <a class="btn btn-dark my-2 my-sm-0" href="admin_depan.php" role="button">Back</a>
        </form>
        <br>
    </div>