<?php
    setcookie("PHPSESSID", "", time() - 3600, "/");
    unset($_SESSION);
    session_unset();
    session_destroy();

    header('Location: index.php');
?>