<?php
class Consult extends Controller{
    function __construct(){
        if(EXECUTION_FLOW)
        echo "<p>Consult controller</p>";
        
        parent::__construct();

        $this->view->data = [];
    }

    //This is called from 'app.php'
    function render(){
        $contents = $this->model->get();
        $this->view->contents = $contents;
        $this->view->render('consult/index');
    }
}
?>