<?php
    require "access.php"; // equivalent a include du fichier access.php
    session_start(); //debute l'utilisation de session
?>
<html>
    <body>
        <?php
            if (isset($_GET["error"])){
                echo "<div class='error'>" . $_GET["error"] . "</div>";
            }
            if (isset($_SESSION["user"])){
                echo "<h2> Bienvenue " . $_SESSION["user"]["nom"] . "</h2>";
            }
        ?>
        <form method="post" action="traitement.php">
            <span>Login:</span>
            <input type="text" name="username" placeholder = "votre login"></input>
            </br>
            <span>Mot de passe:</span>
            <input type="password" name="password" placeholder = "votre mot de passe"></input>
            </br>
            <input type="submit" name="envoyer" value = "se connecter">
        </form>
    </body>
</html>
