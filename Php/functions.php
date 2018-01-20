<?php
    session_start();
    function islogged() {
        return isset( $_SESSION["user"]);
    }

    function connexionRequired() {
        if (!isset($_SESSION["user"])){
            header("Location: ?page=login");
            die();
        }
    }
    
    function debug( $arg, $printr = false){
       if ($printr){
           echo "<pre>";
           print_r($arg);
           echo "<pre>";  
       }
       else {
           var_dump( $arg );
       }
       die();
    }
?>