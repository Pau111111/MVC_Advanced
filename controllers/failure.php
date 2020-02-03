<?php
class Failure extends Controller{
    function __construct(){
        if(EXECUTION_FLOW)
        echo "<p>Failure Controller</p>";

        parent::__construct();
        //This creates a variable inside the view class and you can use it in the view HTML with $this->message
        $this->view->message = "This is the error view";
        $this->view->render('error/index');

        
    }
}
?>