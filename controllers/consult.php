<?php
class Consult extends Controller{
    function __construct(){
        if(EXECUTION_FLOW)
        echo "<p>Consult controller</p>";
        
        parent::__construct();
        $this->view->render('consult/index');

        
    }
}
?>