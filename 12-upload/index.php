<?php
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

    <title>Video Games | Admin</title>

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
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
    <div class="container mt-3">
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
                <a class="text-center w-100 fs-5 btn-menu btn btn-outline-success border-2" href="insert.php" role="button">Insert Data</a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12 table-responsive">
                <table class="table table-primary table-hover table-sm table-bordered">
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

    <!-- BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- MY SCRIPT -->
    <script>
        let menu = new bootstrap.Modal(document.getElementById('menu'));
        let deleteBtn = document.querySelector("#delete-btn");
        let editBtn =  document.querySelector("#edit-btn");
        let tablebody = document.querySelector("tbody");

        tablebody.addEventListener("click", function(e) {
            // GET ID OF ROWS
            const id = e.target.parentElement.querySelector("#data-id").innerHTML;
            // PUT ID IN THE HREF ATTRIBUTE
            deleteBtn.setAttribute("href", `delete.php?id=${id}`);
            editBtn.setAttribute("href", `edit.php?id=${id}`);
            // TOGGLE MODAL MENU
            menu.toggle();
        });
    </script>
  </body>
</html>