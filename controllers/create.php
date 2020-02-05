<?php
class Create extends Controller{
    function __construct(){
        if(EXECUTION_FLOW)
        echo "<p>Help controller</p>";
        
        parent::__construct();
        $this->view->render('create/index');
    }

    function newContent(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $text = $_POST['text'];

        //Goes to create model function insert
        if($this->model->insert(['name' => $name, 'email' => $email, 'text' => $text])){
            echo 'New content created';
        }
         
    }
}
?>