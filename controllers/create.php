<?php
class Create extends Controller{
    function __construct(){
        if(EXECUTION_FLOW)
        echo "<p>Help controller</p>";
        
        parent::__construct();
        $this->view->render('create/index');
    }

    function newContent(){
        echo 'Content created';
        //Goes to create model function insert
        $this->model->insert();
    }
}
?>