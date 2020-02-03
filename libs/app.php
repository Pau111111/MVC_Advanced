<?php
require_once(CONTROLLERS . '/failure.php');

class App{
    function __construct(){
        if(EXECUTION_FLOW)
        echo "<p>Nueva APP</p>";
        //Position [0] it's for controllers
        //Position [1] it's for methods
        
        //We can GET the URL because we specified this in the htaccess
        $url = explode('/', rtrim($_GET['url'], '/'));
        //var_dump($url);

        $fileController = CONTROLLERS.'/' . $url[0] . '.php';

        if(file_exists($fileController)){
            require_once($fileController);
            $controller = new $url[0]; //Its the same than writte Main

            if(isset($url[1])){
                $controller->{$url[1]}(); //This will call the method that you set in the URL
            }
        }else{
            //echo $url[0] . " controller doesn't exist!";
            $controller = new Failure();
        }

        
    }
}
?>