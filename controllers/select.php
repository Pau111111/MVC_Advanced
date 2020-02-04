<?php
class Select extends Controller{
    function __construct(){
        if(EXECUTION_FLOW)
        echo "<p>Select controller</p>";
        
        parent::__construct();
        $this->view->render('select/index');

        
    }
}
?>