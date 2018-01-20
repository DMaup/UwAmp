<!-- index.php -->
<?php include "header.php"; ?>
    <?php
        $articles = [
            [
                "title"  => "article 1",
                "content" => "contenu article 1"
            ],
            [
                "title"  => "article 2",
                "content" => "contenu article 2"
            ],
        ];
    ?>
    <h2> L'article : </h2>
    <div>
        <?php 
            // isset() permet de vérifier l'existence d'une variable !
            if( isset( $_GET["title"] ) && isset( $_GET["content"] ) ){
                $title = $_GET["title"];
                $content = $_GET["content"];
                echo "<h3>" . $title . "</h3>";
                echo "<p>" . $content . "</p>";
            }
        ?>
    </div>
<?php include "footer.php"; ?>
<!-- -->