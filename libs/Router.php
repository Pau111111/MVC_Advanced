<?php
require_once(CONTROLLERS . '/FailureController.php');

class Router
{
    function __construct()
    {
        if (EXECUTION_FLOW)
            echo "<p>Router Loaded</p>";
        //Position [0] it's for controllers
        //Position [1] it's for methods

        //We can GET the URL because we specified this in the htaccess
        //$url = isset($_GET['url']) ? explode('/', rtrim($_GET['url'], '/')) : null;
        // first line is like an IF and next the ? it's the true condition and next : it's the else condition
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //When there is no controller in the URL
        if (empty($url[0]) || $url[0] == "main") {
            $fileController = CONTROLLERS . '/' . 'MainController.php';
            require_once($fileController);
            $controller = new MainController();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }
        //var_dump($url);

        $class = ucfirst($url[0]);
        $fileController = CONTROLLERS . '/' . $class . 'Controller.php';
        $classController = $class . 'Controller';

        if(file_exists($fileController)) {
            require_once($fileController);

            //Inicialize the controller 
            $controller = new $classController; //Its the same than writte Main
            $controller->loadModel($class);

            //Number of array elements
            $nParam = sizeof($url);

            echo $nParam;

            if ($nParam > 1) {
                //If url have more than 2 params, it means that have value like and id
                if ($nParam > 2) {
                    $params = [];
                    for ($i = 2; $i < $nParam; $i++) {
                        array_push($params, $url[$i]);
                    }
                    //Llamamos a la función que está en la URL del controlador
                    $controller->{$url[1]}($params);
                } else {
                    $controller->{$url[1]}();
                }
            } else {
                $controller->render();
            }
        } else {
            //echo $url[0] . " controller doesn't exist!";
            $controller = new FailureController();
        }

        // //This will call the method that you set in the URL
        // if(isset($url[1])){
        // }else{
        //     //If there is no method we need to render the default view for this controller
        //     //The methods shoud implement a view, that why this render is in the ELSE part
        //     $controller->render();
        // }
        // }else{
        //     //echo $url[0] . " controller doesn't exist!";
        //     $controller = new Failure();
        // }
    }
}
