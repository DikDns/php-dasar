<?php
    session_start();

    // REMOVE COOKIE
    setcookie("id", "", time() - 3600);
    setcookie("key", "", time() - 3600);

    // REMOVE SESSION
    $_SESSION = [];
    session_unset();
    session_destroy();

    // REDIRECT USER
    header("Location: login.php");
    exit;
?>