<?php
    $row = 11;
    $col = 7;
    $pattern = "odd";

    if($pattern === "even"){
        $pattern = 0;
    } else if ($pattern === "odd"){
        $pattern = 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Flow</title>
    <style>
        .warna-baris{
            background-color: lightgray;
        }
    </style>
</head>
<body>

    <table border="1" cellspacing="0" cellpadding="10">
        <?php for($i = 1; $i <= $row; $i++) : ?>
            <?php if($i % 2 == $pattern) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr class="">
            <?php endif; ?>
                <?php for($j = 1;  $j <= $col; $j++) : ?>
                    <td>
                        <?= "$i, $j" ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    
</body>
</html>