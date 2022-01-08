<?php
$numbers = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
    <style>
        div.kotak {
            box-sizing: border-box;
            width: 100px;
            height: 100px;
            background-color: salmon;
            margin: 10px;
            line-height: 100px;
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            float: left;
            transition: 750ms all;
        }
        div.kotak:hover {
            border-radius: 50%;
            transform: rotate(360deg);
        }

        div.clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php foreach( $numbers as $num ) : ?>
    <?php foreach( $num as $n ) : ?>
        <div class="kotak"><?= $n ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>
    
</body>
</html>