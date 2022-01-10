<?php
    include "functions.php";

    if( isset($_POST["submit"]) ){
        // CHECK VALIDATION
        if(insert($_POST) > 0){
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

    <title>Video Games | Insert Data</title>


  </head>
  <body>

    

    <div class="container mt-4 mb-4">
        <div class="row mb-2">
            <div class="col">
                <a class="w-100 fs-5 btn-menu btn btn-secondary" href="index.php" id="back-btn" role="button">Back</a>
            </div>
        </div>
        <div class="row">
            <form action="" method="POST">
            
                <div class="mb-3">
                    <label for="title" class="form-label fs-2">Title</label>
                    <input required type="text" class="form-control form-control-sm" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label fs-2">Year</label>
                    <input required type="text" pattern="\d*" class="form-control form-control-sm" id="year" name="year" aria-describedby="yearHelp">
                    <div id="yearHelp" class="form-text fs-6">Numbers only.</div>
                </div>

                <div class="mb-3">
                    <label for="developer" class="form-label fs-2">Developer</label>
                    <input required type="text" class="form-control form-control-sm" id="developer" name="developer">
                </div>
                
                <div class="mb-3">
                    <label for="platform" class="form-label fs-2">Platform</label>
                    <input required type="text" class="form-control form-control-sm" id="platform" name="platform">
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label fs-2">Genre</label>
                    <input required type="text" class="form-control form-control-sm" id="genre" name="genre">
                </div>

                <div class="mb-3">
                    <label for="mode" class="form-label fs-2">Mode</label>
                    <input required type="text" class="form-control form-control-sm" id="mode" name="mode">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label fs-2">Image</label>
                    <input required type="text" class="form-control form-control-sm" id="image" name="image">
                </div>

                <button type="submit" class="w-100 fs-5 btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>