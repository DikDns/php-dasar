<?php
    // Connect to Database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query){
        global $conn;

        // Query Data From table videogames
        $result = mysqli_query($conn, $query);
        $rows = [];

        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

    function delete($id){
        global $conn;

        mysqli_query($conn, "DELETE FROM videogames WHERE id = $id");

        return mysqli_affected_rows($conn);
    }



    function insert($data){
        global $conn;

        $title = htmlspecialchars($data["title"]);
        $year = htmlspecialchars($data["year"]);
        $developer = htmlspecialchars($data["developer"]);
        $platform = htmlspecialchars($data["platform"]);
        $genre = htmlspecialchars($data["genre"]);
        $mode = htmlspecialchars($data["mode"]);
        $image= htmlspecialchars($data["image"]);

        $query = 
            "INSERT INTO videogames VALUES " . 
            "('', '$title', '$year', '$developer', '$platform', '$genre', '$mode', '$image' )";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }



    function edit($data){
        global $conn;


        $id = $data["id"];
        $title = htmlspecialchars($data["title"]);
        $year = htmlspecialchars($data["year"]);
        $developer = htmlspecialchars($data["developer"]);
        $platform = htmlspecialchars($data["platform"]);
        $genre = htmlspecialchars($data["genre"]);
        $mode = htmlspecialchars($data["mode"]);
        $image= htmlspecialchars($data["image"]);

        $query = 
            "UPDATE videogames SET " . 
            "title = '$title', ".
            "year = '$year', ".
            "developer = '$developer', ".
            "platform = '$platform', ".
            "genre = '$genre', ".
            "mode = '$mode', ".
            "image = '$image' ".
            "WHERE id = $id"
            ;

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }



    function search($keyword){
        $query = "SELECT * FROM videogames WHERE 
            title LIKE '%$keyword%' OR
            year LIKE '%$keyword%' OR
            developer LIKE '%$keyword%' OR
            platform LIKE '%$keyword%' OR
            genre LIKE '%$keyword%' OR
            mode LIKE '%$keyword%'
            ";

        return query($query);
    }

?>