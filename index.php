<?php
require_once "config.php";

if (!isset($_GET['pages'])) {

    include_once "homepage.php";

} else {

    switch ($_GET['pages']) {

        case "cv":
            include_once "curriculum.php";
            break;

        case "tuto":
            include_once "tutoriel.php";
            break;

        case "liens":
            include_once "liens.php";
            break;

        case "contact":
            include_once "contact.php";
            break;

        case "galeries":
            include_once "galeries.php";
            break;

            case "login":
                include_once "login.php";
                break;

            default:
            include_once "homepage.php";
    }

}
