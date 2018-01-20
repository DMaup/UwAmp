<?php
    define("SALT", "50U81P9jnXunpAxBVrFO"); //definit une constante salt
    $users = [
        [
            "nom" => "Pierre",
            "motdepasse" => "fa94ba2e6320f499bcb497e5d33a4f13be4920e0" // sha1(starwars est le mot de passe + SALT) soit = sha1(starwars50U81P9jnXunpAxBVrFO)
        ],                   
        [
            "nom" => "Paul",
            "motdepasse" => "1060336813aa121bf96ee74de069fc2ab04f70b8" // sha1(shubaka est le mot de passe + SALT) soit = sha1(shubaka50U81P9jnXunpAxBVrFO)
        ]
    ];

    $connected = false; // de login et mot de passe ok

    if( isset( $_POST["username"] ) && isset( $_POST["password"] ) ){
        $username = $_POST["username"];
        $password = sha1($_POST["password"] . SALT);
        foreach( $users as $user ){
            if ($user["nom"] == $username && $user["motdepasse"] == $password) {
                $_SESSION["user"] = $user;
                $connected = true;
                break;
            }
        }   
    }
    if ($connected){
        header("location: ?page_home.php");
    }
    else {
        // unset supprime une variable.
        unset($_SESSION["user"]);
        $error = urlencode("identifiant ou mot de passe incorrect");
        header("location: ?page=login&error=".$error);
    }
?>