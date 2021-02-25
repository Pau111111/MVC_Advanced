<?php
//$documentRoot = dirname(__FILE__);
$documentRoot = getcwd();

//BASE PATH -> FOR REFERENCE FILES
define("BASE_PATH", $documentRoot);

if (EXECUTION_FLOW)
    echo '<p>BASE_PATH -> ' . BASE_PATH . '</p>';

//BASE URL -> FOR LINK CSS 
$uri = $_SERVER['REQUEST_URI'];

if (isset($uri) && $uri !== null) {
    $uri = substr($uri, 1);
    $uri = explode('/', $uri);
    if (isset($uri[0])) {
        $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri[0] . "/";
    } else {
        $uri = "http://$_SERVER[HTTP_HOST]" . "/";
    }
} else {
    $uri = null;
}

define("BASE_URL", $uri);

if (EXECUTION_FLOW)
    echo '<p>BASE_URL -> ' . BASE_URL . '</p>';
