<?php
    $data_video_game = [
        [
            "title"     => "Genshin Impact",
            "year"      => 2020,
            "developer" => ["miHoYo"],
            "platform"  => ["Windows","PlayStation","Android","iOS"],
            "genre"     => ["action", "role-playing"],
            "mode"      => ["Single-player", "Multiplayer"],
            "image"     => "genshin-impact.png"
        ],
        [
            "title"     => "The Last of Us",
            "year"      => 2013,
            "developer" => ["Naughty Dog"],
            "platform"  => ["PlayStation"],
            "genre"     => ["action", "adventure"],
            "mode"      => ["Single-player"],
            "image"     => "the-last-of-us.png"
        ],
        [
            "title"     => "Unravel",
            "year"      => 2016,
            "developer" => ["Coldwood Interactive"],
            "platform"  => ["Windows","PlayStation"],
            "genre"     => ["puzzle", "platform"],
            "mode"      => ["Single-player"],
            "image"     => "unravel.png"
        ],
        [
            "title"     => "Subnautica",
            "year"      => 2018,
            "developer" => ["Unknown Worlds Entertainment"],
            "platform"  => ["Windows", "MacOS", "PlayStation"],
            "genre"     => ["survival", "action", "adventure"],
            "mode"      => ["Single-player"],
            "image"     => "subnautica.png"
        ],
        [
            "title"     => "Detroit: Become Human",
            "year"      => 2018,
            "developer" => ["Quantic Dream"],
            "platform"  => ["Windows", "PlayStation"],
            "genre"     => ["adventure", "sci-fi"],
            "mode"      => ["Single-player"],
            "image"     => "detroit-become-human.png"
        ],
        [
            "title"     => "It Takes Two",
            "year"      => 2021,
            "developer" => ["Hazelight Studios"],
            "platform"  => ["Windows", "PlayStation"],
            "genre"     => ["adventure", "platform"],
            "mode"      => ["Multiplayer"],
            "image"     => "it-takes-two.png"
        ],
        [
            "title"     => "Little Nightmares",
            "year"      => 2017,
            "developer" => ["Tarsier Studios"],
            "platform"  => ["Windows", "PlayStation"],
            "genre"     => ["horror","puzzle","platform"],
            "mode"      => ["Single-player"],
            "image"     => "little-nightmares.png"
        ],
        [
            "title"     => "Roblox",
            "year"      => 2006,
            "developer" => ["Roblox Corporation"],
            "platform"  => ["Windows", "MacOS", "Android", "iOS"],
            "genre"     => ["game creation system", "massively multiplayer online"],
            "mode"      => ["Single-player", "Multiplayer"],
            "image"     => "roblox.png"
        ],
        [
            "title"     => "Minecraft Bedrock Edition",
            "year"      => 2017,
            "developer" => ["Mojang Studios"],
            "platform"  => ["Windows", "PlayStation", "Android", "iOS"],
            "genre"     => ["sandbox","survival"],
            "mode"      => ["Single-player", "Multiplayer"],
            "image"     => "minecraft-bedrock-edition.png"
        ],
        [
            "title"     => "Among Us",
            "year"      => 2018,
            "developer" => ["Innersloth"],
            "platform"  => ["Windows", "PlayStation", "Android", "iOS"],
            "genre"     => ["party"],
            "mode"      => ["Multiplayer"],
            "image"     => "among-us.png"
        ]
    ]


    // SUPERGLOBALS VARIABLE
    // $_SERVER, $_GET, $_POST, $_REQUEST, $_COOKIE, $_SESSION

    // CONTOH MENGGUNAKA $_GET

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Video Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>

    <h1>Daftar Video Game</h1>

    <ul>
        <?php foreach($data_video_game as $data) : ?>
        <?php
            // CODE UNTUK NGIRIM DATA MELALUI $_GET
            // $link untuk menyimpan link href di string dulu
            $link = "details.php?";
            $link .= "image=" . $data["image"];
            $link .= "&";
            $link .= "title=" . $data["title"];
            $link .= "&";
            $link .= "year=" . $data["year"];
            
            foreach($data["developer"] as $value){
                $link .= "&";
                $link .= "developer[]=" . $value;
            }
            
            foreach($data["platform"] as $value){
                $link .= "&";
                $link .= "platform[]=" . $value;
            }

            foreach($data["genre"] as $value){
                $link .= "&";
                $link .= "genre[]=" . $value;
            }
            
            foreach($data["mode"] as $value){
                $link .= "&";
                $link .= "mode[]=" . $value;
            }
        ?>
        <a href="<?= $link ?>">
        <li>
            
                <img src="img/<?= $data["image"] ?>" alt="<?= $data["title"] ?>">
                <h2>
                    <?= $data["title"] ?>
                </h2>
            
        </li>
        </a>
        <?php endforeach; ?>
    </ul>
</main>
</body>
</html>