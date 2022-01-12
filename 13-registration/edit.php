<?php
    include "functions.php";

    $id = $_GET["id"];

    $videogame = query("SELECT * FROM videogames WHERE id = $id")[0];

    if( isset($_POST["submit"]) ){
        // CHECK VALIDATION
        if(edit($_POST) > 0){
            // SUCCESS
            echo "<script>
                    alert(\"SUCCESS\");
                    document.location.href = \"index.php\";
                </script>";
        } else {
            // ERROR
            echo "<script>alert(\"ERROR\")</script>";
        }

    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Video Games | Edit Data</title>


  </head>
  <body>

    

    <div class="container mt-4 mb-4">
        <div class="row mb-2">
            <div class="col">
                <a class="w-100 fs-5 btn-menu btn btn-outline-secondary border-2" href="index.php" id="back-btn" role="button">Back</a>
            </div>
        </div>
        <div class="row">
            <form action="" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $videogame["id"]?>">
                <input type="hidden" name="image_old" value="<?= $videogame["image"]?>">
            
                <div class="mb-3">
                    <label for="title" class="form-label fs-2">Title</label>
                    <input value="<?= $videogame["title"]?>" required type="text" class="form-control form-control-sm" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label fs-2">Year</label>
                    <input value="<?= $videogame["year"]?>" required type="text" pattern="\d\d\d\d" class="form-control form-control-sm" id="year" name="year" title="Example: 2022">
                </div>

                <div class="mb-3">
                    <label for="developer" class="form-label fs-2">Developer</label>
                    <input value="<?= $videogame["developer"]?>" required type="text" class="form-control form-control-sm" id="developer" name="developer">
                </div>
                
                <div class="mb-3">
                    <label for="platform" class="form-label fs-2">Platform</label>
                    <input value="<?= $videogame["platform"]?>" required type="text" class="form-control form-control-sm" id="platform" name="platform">
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label fs-2">Genre</label>
                    <input value="<?= $videogame["genre"]?>" required type="text" class="form-control form-control-sm" id="genre" name="genre">
                </div>

                <div class="mb-3">
                    <label for="mode" class="form-label fs-2">Mode</label>
                    <input value="<?= $videogame["mode"]?>" required type="text" class="form-control form-control-sm" id="mode" name="mode">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label fs-2">
                        <p class="mb-1">Image</p>
                        <img src="img/<?= $videogame["image"]?>" class="img-thumbnail">
                    </label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <button type="submit" class="mt-4 w-100 fs-5 btn btn-primary" name="submit">Save Changes</button>
            </form>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>