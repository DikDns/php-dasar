<?php
    if (
        !isset($_GET["title"]) ||
        !isset($_GET["image"]) ||
        !isset($_GET["year"]) ||
        !isset($_GET["developer"]) ||
        !isset($_GET["platform"]) ||
        !isset($_GET["genre"]) ||
        !isset($_GET["mode"])
        ) {
            header("Location: superglobals.php");
            exit;
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_GET["title"] ?></title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }


        main {
            width: 50vw;
            margin: 20px auto;
            text-align: center;
            font-size: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        ul {
            text-align: left;
            list-style: none;
            padding: 20px;
        }

        button {
            margin: 20px 0;
            width: 150%;
            font-size: 30px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
        }

        button:hover {
            cursor: pointer;
        }


    </style>
</head>
<body>
<main>
<h1><?= $_GET["title"] ?></h1>

<ul>
        <li>
            <img src="img/<?= $_GET["image"] ?>" alt="<?= $_GET["title"] ?>">
        </li>
        <li>
            Year     : 
            <?= $_GET["year"] ?>
        </li>
        <li>
            Developer : 
            <?php 
            foreach($_GET["developer"] as $i => $dev){
                echo ($i == 0) ? $dev : ", $dev";
            }
            ?>
        </li>
        <li>
            Platform : 
            <?php 
            foreach($_GET["platform"] as $i => $dev){
                echo ($i == 0) ? $dev : ", $dev";
            }
            ?>
        </li>
        <li>
            Genre : 
            <?php 
            foreach($_GET["genre"] as $i => $dev){
                echo ($i == 0) ? $dev : ", $dev";
            }
            ?>
        </li>
        <li>
            Mode : 
            <?php 
            foreach($_GET["mode"] as $i => $dev){
                echo ($i == 0) ? $dev : ", $dev";
            }
            ?>
        </li>
        
    </ul>

    <a href="superglobals.php">
        <button>
            HOME
        </button>
    </a>
</main>    
</body>
</html>