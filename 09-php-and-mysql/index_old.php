<?php
    // Connect to Database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // Query Data From table videogames
    $result = mysqli_query($conn, "SELECT * FROM videogames");

    // Import Data (fetch) VideoGames from Result
    //  mysqli_fetch_row();     // return array numeric
    //  mysqli_fetch_assoc();   // return array associative
    //  mysqli_fetch_array();   // return both of array type
    //  mysqli_fetch_object();  // return object

    // while($videogames = mysqli_fetch_assoc($result)){
    //     var_dump($videogames["id"]);
    // }

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
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save Changes</button>
            </div>
            </div>
        </div>
    </div>

    <!-- MAIN -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Data Video Games</h1>
            </div>
        </div>
        <div class="row">
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
                        <?php while($row = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <th scope="row" class="data-row"><?= $row["id"] ?></th>
                                <td class="data-row">
                                    <img class="data-row" src="img/<?= $row["image"] ?>" alt="">
                                </td>
                                <td class="data-row"><?= $row["title"] ?></td>
                                <td class="data-row"><?= $row["year"] ?></td>
                                <td class="data-row"><?= $row["developer"] ?></td>
                                <td class="data-row"><?= $row["platform"] ?></td>
                                <td class="data-row"><?= $row["genre"] ?></td>
                                <td class="data-row"><?= $row["mode"] ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- MY SCRIPT -->
    <script src="script.js"></script>
  </body>
</html>