<?php
require_once(CONTROLLERS . '/failure.php');

class App{
    function __construct(){
        if(EXECUTION_FLOW)
        echo "<p>App Loaded</p>";
        //Position [0] it's for controllers
        //Position [1] it's for methods
        
        //We can GET the URL because we specified this in the htaccess
        //$url = isset($_GET['url']) ? explode('/', rtrim($_GET['url'], '/')) : null;
        // first line is like an IF and next the ? it's the true condition and next : it's the else condition
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if(empty($url[0])){
            $fileController = CONTROLLERS.'/' . 'main.php';
            require_once($fileController);
            $controller = new Main();
            return false;
        }
        
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