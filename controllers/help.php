<?php
class Help extends Controller{
    function __construct(){
        if(EXECUTION_FLOW)
        echo "<p>Help controller</p>";
        
        parent::__construct();
    }

    function render(){
        $this->view->render('help/help');
    }
}
?>