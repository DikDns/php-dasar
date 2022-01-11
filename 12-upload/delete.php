<?php
    include "functions.php";

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