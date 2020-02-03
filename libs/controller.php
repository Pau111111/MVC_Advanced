<?php
class Controller{
    function __construct(){
        if(EXECUTION_FLOW)
        echo '<p>Base controller class</p>';
        $this->view = new View();
    }
}
?>