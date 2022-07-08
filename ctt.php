<?php
include("header.php");
include('koneksi.php');
$query = mysqli_query($koneksi, "select * from dokumen");
?>

<body>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-white">The existence of this Tourism Web can make it easier for visitors who want
                            to
                            visit a
                            places by looking at the recommended tourist attractions in the area.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://getbootstrap.com/docs/5.2/examples/album/#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="https://getbootstrap.com/docs/5.2/examples/album/#" class="text-white">Like on Facebook</a></li>
                            <li><a href="logout.php" class="text-white">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="https://getbootstrap.com/docs/5.2/examples/album/#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <strong>Tourism Website</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <?php
        $sql2   = "select * from admin order by id desc";
        $q2     = mysqli_query($koneksi, $sql2);
        $urut   = 1;
        while ($r2 = mysqli_fetch_array($q2)) {
            $username         = $r2['username'];
        }
        ?>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Welcome,<?php echo $username ?>
                    </h1>
                    <p class="lead text-muted">Welcome to the Web of Tourism, find interesting places that you will
                        visit right now!</p>
                    <p>
                        <a href="profile.php" class="btn btn-primary my-2">Profile</a>
                        <a href="add.php" class="btn btn-secondary my-2">Add Tourist</a>
                    </p>
                </div>
            </div>
        </section>
        <div class="album py-5 bg-light">
            <?php
            $no = 1;
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <td>
                                <div class="card shadow-sm">
                                    <img src="berkas/<?php echo $row['file']; ?>" width="100" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <div class="card-body">
                                        <p class="card-text"><?php echo $row['coment']; ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="edit-wisata.php" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </div>
                        <div class="col">
                            <td>
                                <div class="card shadow-sm">
                                    <img src="berkas/<?php echo $row['file']; ?>" width="100" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <div class="card-body">
                                        <p class="card-text"><?php echo $row['coment']; ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="edit-wisata.php" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </div>
                        <div class="col">
                            <td>
                                <div class="card shadow-sm">
                                    <img src="berkas/<?php echo $row['file']; ?>" width="100" class=" img.kiri bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <div class="card-body">
                                        <p class="card-text"><?php echo $row['coment']; ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="edit-wisata.php" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <?php
        include("footer.php");
        ?>