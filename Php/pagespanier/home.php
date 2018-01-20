<h1>
Welcome to panier
<?php
echo $_SESSION["user"]["nom"]; 
require "data/articlepanier.php";
?>
</h1>
<div id=articles>
    <form action="?service=service_panier" method="POST">
        <?php
        foreach( $articles as $key => $article ){
            echo "<input type='checkbox' class='check' name='" . $article["libarticle"] . "' value='" . $key . "'>";
            echo "<span class='libelle'> " . $article["libarticle"] . "</span>";
            echo "<span class='prix'> " . $article["prixarticle"] . "</span>";
        }
        echo "<input type='submit'>";
        ?>
        
    </form>
</div>