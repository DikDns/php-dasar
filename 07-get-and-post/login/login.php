<?php
    if( isset($_POST["submit"]) ){
        if($_POST["username"] === "DikDns" && $_POST["password"] === "deedjha890321"){
            header("Location: admin.php");
            exit;
        } else {
            $error = true;
        }
    } else {   
        $error = false;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        form {
            width: 40vw;
            background-color: #ddd;
            margin: 25vh auto;
            display: flex;
            flex-direction: column;
            border-radius: 20px;
        }

        .child {
            margin: 20px 10px;
            font-size: 25px;
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .child input {
            height: 30px;
            width: 100%;
        }

        button {
            box-sizing: border-box;
            height: 50px;
            font-size: 25px;
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 10px;
            border-radius: 20px;
            border: none;
            outline:none;
            background-color: #aaa;
        }
        
        button:hover {
            box-sizing: border-box;
            background-color: lightgreen;
            cursor: pointer;
            border: none;
            outline:none;
        }

        p {
            text-align: center;
            color: red;
            font-size: large;
        }
    </style>
</head>
<body>


    
    <form action="" method="POST">
        <div class="child">
        <label for="username">username : </label>
        <input required type="text" name="username" id="username">
        </div>
        <div class="child">
        <label for="password">password : </label>
        <input required type="password" name="password" id="password">
        </div>
        <p>
            <?= $error ? "Incorrect Password / Username": ""; ?>
        </p>
        <button type="submit" name="submit">
            Submit
        </button>
    </form>

</body>
</html>