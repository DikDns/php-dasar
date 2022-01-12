<?php
    include "functions.php";
    $error = false;

    if( isset($_POST["login"]) ){

        $username = $_POST["username"];
        $password = $_POST["password"];

        // CHECK USERNAME
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        if( mysqli_num_rows($result) === 1 ){
            
            // CHECK PASSWORD
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                header("Location: index.php");
                exit;
            }
        }

        $error = true;

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

<title>Video Games | Login</title>
</head>
<body>

    <div class="container vh-100 " style="max-width: 800px; display:flex; flex-direction:column; justify-content:center;">
        <div class="row mb-4">
            <div class="col">
                <h1 class="fs-1 text-center">Login</h1>
            </div>
        </div>

        <?php if($error) : ?>
        <div class="mb-4 alert alert-danger d-flex align-items-center" role="alert">
            <div>
                Incorrect Username or Password!
            </div>
        </div>
        <?php endif ?>

        <div class="row mb-4">
            <div class="col">

                <form action="" method="POST">

                    <div class="mb-3">
                        <label for="username" class="form-label fs-3">Username</label>
                        <input required type="username" class="form-control-lg form-control" id="username" name="username" title="Please input username">
                    </div>

                    <div class="mb-5">
                        <label for="password" class="form-label fs-3">Password</label>
                        <input required type="password" class="form-control-lg form-control" id="password" name="password" title="Please input password">
                    </div>

                    <button type="submit" class="btn btn-primary fs-3 w-100" name="login">Login</button>
                
                </form>

            </div>
        </div>
    </div>

    
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>