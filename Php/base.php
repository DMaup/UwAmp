<?php 
    $firstline = "Hello";
    $secondline = "World";

    $users = ["Pierre", "Paul", "Jacques"];

    array_push($users, "Stephane");
    $users["test"] = "Bernard";
    $users[] = "Didier";

    print_r($users); //print_r affiche des tableaux / objets
    var_dump("TEST"); //methode de debug
    var_dump($users);

    function seeLine(){
        //Attention à la portée des variables, ici une erreur sera déclenchée !
        //Pas de variable globale par default
        echo $firstline;
    }

    function addLetter( $str, $letter = "a" ){
        return $str . $letter;
    }

    $firstline = addLetter( $firstline );

?>
<html>
    <body>
        <?php 
            echo "<div>" . $firstline . " </div>";
        ?> 
        <span> ------------- </span> 
        <?php 
            echo "<div> " . $secondline . " </div>";
        ?>
        <h2> Utilisateurs : </h2>
        <ul>
            <?php
                // $array as $variable 
                foreach( $users as $key => $user ){
                    echo "<li>" . $user . "( ". $key ." ) </li>";
                }
            ?>
        </ul>
    </body>
</html>