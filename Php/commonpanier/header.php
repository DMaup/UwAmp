<!-- header.php -->
<html>
    <head></head>
    <body>
        <?php if(islogged()){?>
            <nav>
                <ul>
                    <li>
                        <a href="?page=home">Homepage</a>
                    </li>
                    <li>
                        <a href="?page=login">Login</a>
                    </li>
                </ul>
            </nav>
        <h1> Bienvenue sur mon site </h1>
        <?php } ?>
<!-- -->