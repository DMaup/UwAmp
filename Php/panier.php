<?php
require "functions.php";
if (isset($_GET["service"])){
    $service = $_GET[ "service"];
    switch ($service){
        case "login":
            include "servicespanier/service_login.php";
            break;
        case "service_panier":
            include "servicespanier/service_panier.php";
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
    $page_file = "pagespanier/home.php";
    break;

    case "login":
    $page_file = "pagespanier/login.php";
    break;

    default:
    $page_file = "pagespanier/404.php";
    break;
}
include "commonpanier/header.php";
include $page_file;
include "commonpanier/footer.php";
?>
