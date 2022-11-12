<?php
    session_start();
    echo $_SESSION['autorizado'];
    unset($_SESSION['autorizado']);
    session_destroy();
    header("Location:../html/login.php");
?>