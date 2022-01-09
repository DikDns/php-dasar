<?php
    // Connect to Database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($querry){
        global $conn;

        // Query Data From table videogames
        $result = mysqli_query($conn, $querry);
        $rows = [];

        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;


        // Import Data (fetch) VideoGames from Result
        //  mysqli_fetch_row();     // return array numeric
        //  mysqli_fetch_assoc();   // return array associative
        //  mysqli_fetch_array();   // return both of array type
        //  mysqli_fetch_object();  // return object

        // while($videogames = mysqli_fetch_assoc($result)){
        //     var_dump($videogames["id"]);
        // }
    }

?>