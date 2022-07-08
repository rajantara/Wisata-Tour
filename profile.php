<?php
include("koneksi.php");
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fresca&display=swap" rel="stylesheet">

    <title>Profile</title>
</head>

<body style="font-family: 'Fresca', sans-serif;">
    <?php
    $sql2   = "select * from admin order by id desc";
    $q2     = mysqli_query($koneksi, $sql2);
    $urut   = 1;
    while ($r2 = mysqli_fetch_array($q2)) {
        $id         = $r2['id'];
        $username         = $r2['username'];
        $password         = $r2['password'];
    }
    ?>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="mb-4" src="./Signin Template · Bootstrap v5.2_files/camera.png" alt="" width="30" height="24">
                Tourism Website
            </a>
        </div>
    </nav>
    <div class="container">
        <h2>Profile <h3> <small>Hello, <?php echo htmlspecialchars($_SESSION["username"]); ?></small> </h3> <br></h2>
        <form action="proses.php" method="post">
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo htmlspecialchars($_SESSION["username"]); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="Password">
                </div>
            </div>
            <a class="btn btn-dark my-2 my-sm-0" href="admin_depan.php" role="button">Back</a>
        </form>
        <br>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>