<?php

date_default_timezone_set("Asia/Jakarta");

function greeting($name = "Admin", $time = "Datang") {
    if($time < 11){
        $time = "Pagi";
    } else if ($time < 16){
        $time = "Siang";
    } else if ($time < 19){
        $time = "Sore";
    } else {
        $time = "Malam";
    }
    
    return "Selamat $time, $name!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>

<h1> <?= greeting("DikDns", date("H")); ?> </h1>

    
</body>
</html>