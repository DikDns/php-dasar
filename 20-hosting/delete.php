<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location: login.php");
        exit;
    }

    include "function/functions.php";

    $id = $_GET["id"];

    // CHECK VALIDATION
    if(delete($id) > 0){
        // SUCCESS
        echo "<script>
                document.location.href = \"index.php\";
            </script>";
    } else {
        // ERROR
        echo "<script>
                alert(\"ERROR\");
                document.location.href = \"index.php\";
            </script>";
    }
?>