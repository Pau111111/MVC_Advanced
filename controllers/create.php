<?php
class Create extends Controller{
    function __construct(){
        if(EXECUTION_FLOW)
        echo "<p>Create controller</p>";
        
        parent::__construct();

        $this->view->message = "";
    }

    function render(){
        $this->view->render('create/index');
    }

    function newContent(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $text = $_POST['text'];

        $message = "";

        //Goes to create model function insert
        $result = $this->model->insert(['name' => $name, 'email' => $email, 'text' => $text]);
        if($result == "OK"){
            $message = 'New content created';
        }else{
            $message = $result;
        }

        $this->view->message = $message;
        $this->render();
    }
}
?>