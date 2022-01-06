<?php

    // Looping
    //  for(){}
    //  while(){}
    //  do{} while()
    //  foreach()

    // for ($i = 0; $i < 5; $i++){
    //     echo "Hello World <br>";
    // }

    // $i = 0;
    // while(true){
    //     echo "Hello World <br>";
    //     $i++;
    //     if ($i > 5){
    //         break;
    //     }
    // }
    
    // $i = 0;
    // do{
    //     echo "Hello World <br>";
    //     $i++;
    // } while ($i<5)

    $row = 3;
    $col = 5;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Flow</title>
</head>
<body>

    <table border="1" cellspacing="0" cellpadding="10">
        <?php for($i = 1; $i <= $row; $i++) : ?>
            <tr>
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