<?php
    
    require "data/articlepanier.php";
    
    $_SESSION["panier"]=$_POST;

    if( isset( $_POST )) { 
        foreach( $_POST as $key => $article ){
            echo "<span class='libelle'> " . $articles[(int)$_POST[$key]]["libarticle"] . "</span>";
            echo "<span class='prix'> " . $articles[(int)$_POST[$key]]["prixarticle"] . "</span>";
        }
    }
    echo "<a href='?page=home'>Compléter panier</a>";

    // if ($connected){
    //     header("Location: article.php");
    // }
    // else {
    //     $error = urlencode("identifiant ou mot de passe incorrect");
    //     header("Location: login.php?error=".$error);
    // }
?>