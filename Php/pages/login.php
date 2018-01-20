<h1>welcome to login page</h1>
<html>
    <body>
        <?php
            if (isset($_GET["error"])){
                echo "<div class='error'>" . $_GET["error"] . "</div>";
            }
        ?>
        <form method="POST" action="?service=login">
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