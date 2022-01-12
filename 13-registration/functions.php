<?php
    //! Connect to Database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");



    //! QUERY FUNCTION TO COLLECT ROWS
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



    //! DELETE FUNCTION
    function delete($id){
        global $conn;

        // CONSTRUCT IMAGE STRING NAME
        $image = "img/";
        $image .= query("SELECT image FROM videogames WHERE id = $id")[0]["image"];

        // DELETE IMAGE FROM DIRECTORY
        unlink($image);

        // DELETE DATA ROWS IN TABLE
        mysqli_query($conn, "DELETE FROM videogames WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
    
    
    
    //! INSERT FUNCTION
    function insert($data){
        global $conn;

        $title = htmlspecialchars($data["title"]);
        $year = htmlspecialchars($data["year"]);
        $developer = htmlspecialchars($data["developer"]);
        $platform = htmlspecialchars($data["platform"]);
        $genre = htmlspecialchars($data["genre"]);
        $mode = htmlspecialchars($data["mode"]);
        //// $image= htmlspecialchars($data["image"]);
        
        $image = upload();
        if ( !$image ){
            // if upload failed then return false
            return false;
        }

        $query = 
            "INSERT INTO videogames VALUES " . 
            "('', '$title', '$year', '$developer', '$platform', '$genre', '$mode', '$image' )";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }



    //! EDIT FUNCTION
    function edit($data){
        global $conn;


        $id = $data["id"];
        $title = htmlspecialchars($data["title"]);
        $year = htmlspecialchars($data["year"]);
        $developer = htmlspecialchars($data["developer"]);
        $platform = htmlspecialchars($data["platform"]);
        $genre = htmlspecialchars($data["genre"]);
        $mode = htmlspecialchars($data["mode"]);
        $image_old = htmlspecialchars($data["image_old"]);

        // CHECK IF USER UPLOADED IMAGE OR NOT?
        if ( $_FILES["image"]["error"] === 4 ){
            $image = $image_old;
        } else {
            $image = upload();
            unlink("img/$image_old");
        }
        
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

    //! UPLOAD FUNCTION
    function upload(){

        $fileName = $_FILES["image"]["name"];
        $fileType = $_FILES["image"]["type"];
        $fileTmpName = $_FILES["image"]["tmp_name"];
        $fileSize = $_FILES["image"]["size"];
        $fileError = $_FILES["image"]["error"];

        // CHECK NOT INPUTED IMAGE
        if ($fileError === 4){
            echo "<script>alert('Image Empty!')";
        }

        // CHECK IMAGE EXTENSION
        $extensionValid  = ["jpg", "jpeg", "png", "webp", "svg", "gif"];
        $fileExtension = explode('.', $fileName);
        $fileExtension = strtolower(end($fileExtension));
        if ( !in_array($fileExtension, $extensionValid) ){
            echo "<script>alert('Error Image!\\nOnly Accept: .jpg, .jpeg, .png, .webp, .svg, .giv')";
            return false;
        }
        
        // CHECK FILE SIZE
        if ( $fileSize > 10000000 ){
            echo "<script>alert('Error Image!\\nFile Too Large: max-10mb')";
            return false;
        }

        // GENERATE NEW UNIQ FILE NAME
        $fileName_new = uniqid();
        $fileName_new .= ".$fileExtension";

        // UPLOAD FILES
        move_uploaded_file($fileTmpName, 'img/' . $fileName_new);

        return $fileName_new;
    }


    
    //! SEARCH FUNCTION
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



    //! SEARCH FUNCTION
    function registration($data){
        global $conn;

        $username = strtolower(stripslashes($data["username"])); 
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // CHECK IF THE USERNAME IS ALREADY EXIST
        $result = query("SELECT username FROM users WHERE username = '$username' ");
        if ($result){
            // ERROR
            echo "<script>alert(\"ERROR\\nUsername is already exist!\")</script>";
            return false;
        }
        
        // CONFIRM PASSWORD
        if( $password !== $password2 ){
            // ERROR
            echo "<script>alert(\"ERROR\\nPassword not match!\")</script>";
            return false;
        }

        // ENCRYPTION PASSWORD
        $password = password_hash($password, PASSWORD_DEFAULT);

        // SEND DATA
        return mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    }
?>