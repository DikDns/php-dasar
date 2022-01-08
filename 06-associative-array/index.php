<?php
    $data_game = [
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Game</title>
</head>
<body>

    <h1>Daftar Game</h1>

    <?php foreach($data_game as $data) : ?>
    <ul>
        <li>
            <img src="img/<?= $data["image"] ?>" alt="<?= $data["title"] ?>">
        </li>
        <li>
            Title    : 
            <?= $data["title"] ?>
        </li>
        <li>
            Year     : 
            <?= $data["year"] ?>
        </li>
        <li>
            Developer : 
            <?php 
            foreach($data["developer"] as $i => $dev){
                echo ($i == 0) ? $dev : ", $dev";
            }
            ?>
        </li>
        <li>
            Platform : 
            <?php 
            foreach($data["platform"] as $i => $dev){
                echo ($i == 0) ? $dev : ", $dev";
            }
            ?>
        </li>
        <li>
            Genre : 
            <?php 
            foreach($data["genre"] as $i => $dev){
                echo ($i == 0) ? $dev : ", $dev";
            }
            ?>
        </li>
        <li>
            Mode : 
            <?php 
            foreach($data["mode"] as $i => $dev){
                echo ($i == 0) ? $dev : ", $dev";
            }
            ?>
        </li>
        
    </ul>
    <?php endforeach; ?>
    
</body>
</html>