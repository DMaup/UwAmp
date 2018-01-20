<?php
require "functions.php";
if (isset($_GET["service"])){
    $service = $_GET[ "service"];
    switch ($service){
        case "login":
            include "services/service_login.php";
            break;
        default:
            header("Location: ?page=home");
    }
    die();
}

$page = "home";
$page_file = "";

if( isset( $_GET["page"] )) {
    $page = $_GET["page"];

}

switch ( $page ) {

    case "home":
    connexionRequired();
    $page_file = "pages/home.php";
    break;

    case "login":
    $page_file = "pages/login.php";
    break;

    default:
    $page_file = "pages/404.php";
    break;
}
include "common/header.php";
include $page_file;
include "common/footer.php";
?>
