<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location: login.php");
        exit;
    }
    
    require 'functions.php';

    $videogames = query("SELECT * FROM videogames");

    if (isset($_POST["search"])){
        $videogames = search($_POST["keyword"]);
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Video Games | Admin <?= $_SESSION["username"] ?></title>

  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> -->
            </ul>
            <div class="d-flex">
                <a role="button" class="btn btn-outline-danger" id="logout-btn" href="logout.php">Logout</a>
            </div>
            </div>
        </div>
    </nav>

    <!-- MENU -->
    <div class="modal fade" id="menu" tabindex="-1" aria-labelledby="menuLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="menuLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 my-4">
                                <a class="w-100 btn-menu btn btn-primary btn-lg" href="#" id="edit-btn" role="button">Edit</a>
                            </div>
                            <div class="col-md-6 my-4">
                                <a class="w-100 btn-menu btn btn-danger btn-lg" href="#" id="delete-btn" role="button" onclick="return confirm('Delete this row?');">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN -->
    <div class="container" style="margin-top: 100px;">
        <div class="row mb-3">
            <div class="col-md-12">
                <h1 class="text-center fs-1">Data Video Games</h1>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="input-group">
                        <input type="search" class="form-control fs-5" placeholder="Search Keyword" aria-label="Search Keyword" aria-describedby="search" name="keyword" autocomplete="off" class="border-2">
                        <button class="btn btn-outline-primary fs-5 border-2" type="submit" id="search" name="search">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <a class="text-center w-100 fs-5 btn btn-outline-success border-2" href="insert.php" role="button">Insert Data</a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12 table-responsive">
                <table class="table table-info table-hover table-sm table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Year</th>
                            <th scope="col">Developer</th>
                            <th scope="col">Platform</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Mode</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($videogames as $row) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td>
                                    <img style="width: 200px;" class="img-thumbnail" src="img/<?= $row["image"] ?>" alt="<?= $row["title"] ?> Image">
                                </td>
                                <td><?= $row["title"] ?></td>
                                <td><?= $row["year"] ?></td>
                                <td><?= $row["developer"] ?></td>
                                <td><?= $row["platform"] ?></td>
                                <td><?= $row["genre"] ?></td>
                                <td><?= $row["mode"] ?></td>
                                <td style="display: none;" id="data-id"><?= $row["id"] ?></td>
                            </tr>
                        <?php  $i++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- MY SCRIPT -->
    <script src="main.js"></script>
    
  </body>
</html>