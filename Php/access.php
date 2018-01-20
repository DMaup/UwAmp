<?php
    session_start(); //debute l'utilisation de session

    if (isset($_SESSION["user"])){

       header("location: article.php");

    }
?>