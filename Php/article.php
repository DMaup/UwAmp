<?php 
    // création d'un tableau de 3 tableaux
    $articles = [
        [
            "title" => "Premier article",
            "content" => "How are you"
        ],
        [
            "title" => "Second article",
            "content" => "This is a test"
        ],
        [
            "title" => "Troisième article",
            "content" => "This is a test 3"
        ]
    ];
    // utilisation d'un flag pour gérer la présence d'un article sinon erreur 404 ou si l'article est trouvé
    $error = false;
    // si la clé article est trouvé par le get
    if( isset($_GET["article"])) {
        // si la clef d'article est présente dans le tableau
        if ( array_key_exists($_GET["article"], $articles)){
            $index = $_GET["article"];
        }
        else { // clef d'article absente
            $error=true;
        }
    }
    else { // pas de paramètres GET alors on affiche le premier article
        $index = 0;
    }
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            if ( $error ) { // si erreur 404 alors on inclut le fichier 404.php
                include "views/404.php";
            }
            else { // sinon on affiche l'article en rechargeant les données au préalable
                $title = $articles[$index]["title"];
                $content = $articles[$index]["content"];
                $next = $index + 1;
                $prev = $index - 1;  
                include "views/article.php";
            }
        ?>
    </body>
</html>