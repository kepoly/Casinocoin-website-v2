<?php
session_start();
define("WEBSITE_PATH", "http://localhost/casino/");

$errors = array();
if(isset($_GET["id"])) {
    $_GET["id"] = $_GET["id"];
} else {
    $_GET["id"] = null;
}
require_once 'language_routing.php';
include_once $_SESSION["language"] . '/languages.php';
include_once 'inc/header.php'; 
include_once 'inc/nav.php';

if(isset($_GET["id"])) {

switch ($_GET["id"]) {
    case 'casinocoin-for-users':
        require 'templates/casinocoin-for-users.php';
        break;
    case 'casinocoin-for-miners':
        require 'templates/casinocoin-for-miners.php';
        break;
    case 'casinocoin-for-developers':
        require 'templates/casinocoin-for-developers.php';
        break;
    case 'code-examples':
        require 'templates/code-examples.php';
        break;
    case 'how-casinocoin-works':
        require 'templates/how-casinocoin-works.php';
        break;
    case 'how-to-participate':
        require 'templates/how-to-participate.php';
        break;
    case 'getting-started':
        require 'templates/getting-started.php';
        break;
    case 'casinocoin-faq':
        require 'templates/casinocoin-faq.php';
        break;
    case 'casinocoin-resources':
        require 'templates/casinocoin-resources.php';
        break;
    case 'casinocoin-communities':
        require 'templates/casinocoin-communities.php';
        break;
    case 'casinocoin-documentation':
        require 'templates/casinocoin-documentation.php';
        break;
    case 'responsible-gambling':
        require 'templates/responsible-gambling.php';
        break;
    case 'press-kit':
        require 'templates/casinocoin-press.php';
        break;
    case 'casinocoin-alerts':
        require 'templates/casinocoin-alerts.php';
        break;
    case 'download':
        require 'templates/download.php';
        break;
    case 'casinocoin-merchants':
        require 'templates/casinocoin-merchants.php';
        break;   
    case 'casinocoin-gambling':
        require 'templates/casinocoin-gambling.php';
        break;  
   case 'timeline':
        require 'templates/timeline.php';
        break;
   case 'privacy':
        require 'templates/privacy.php';
        break;
        default: include_once 'templates/home.php';
} 
} else {
	require_once 'templates/home.php';
}

include_once 'inc/footer.php'; 

?>