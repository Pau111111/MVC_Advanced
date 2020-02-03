<?php
//$documentRoot = dirname(__FILE__);
$documentRoot = getcwd();
//BASE PATH
define("BASE_PATH", $documentRoot);

//LIBS
define("LIBS", BASE_PATH . '/libs');

//CONTROLLERS
define("CONTROLLERS", BASE_PATH . '/controllers');

//VIEWS
define("VIEWS", BASE_PATH . '/views');

//MODELS
define("MODELS", BASE_PATH . '/models');

//SHOW EXECUTION FLOW
$executionFlow;
if(isset($_GET['execution_flow']) && $_GET['execution_flow'] == 'true'){
    $executionFlow = true;
}else{
    $executionFlow = false;
}

define("EXECUTION_FLOW", $executionFlow);
?>