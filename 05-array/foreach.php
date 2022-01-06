<?php
$numbers = [2, 102, 52, 16, 82, 123, 32, 5, 1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
    <style>
        div.box {
            background-color: lightcoral;
            width: 100px;
            height: 100px;
            font-size: 25px;
            font-weight: bold;
            text-align: center;
            line-height: 100px;
            font-family: 'Cascadia Code', monospace;
            box-sizing: border-box;
            box-shadow: 0px 0px 5px 1px black;
            margin: 7px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php for($i=0; $i < 9; $i++) : ?>
    <div class="box"><?= $numbers[$i] ?></div>
<?php endfor; ?>

<div class="clear"></div>

<?php foreach( $numbers as $num) : ?>
    <div class="box"><?= $num ?></div>
<?php endforeach; ?>
</body>
</html>