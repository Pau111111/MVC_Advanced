<?php

class ContentController extends Controller
{
    function __construct()
    {
        if (EXECUTION_FLOW)
            echo "<p>Content controller</p>";

        parent::__construct();

        $this->view->message = "";
        $this->view->data = [];
    }

    function seeContent($param = null)
    {
        $id_content = $param[0];

        $content = $this->model->getById($id_content);

        session_start();
        $_SESSION['id_seeContent'] = $content->id_content;
        //Create a attribute in the VIEW for using in the HTML code
        $this->view->content = $content;
        $this->view->message = "";
        $this->view->render('consult/detail');
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

    function updateContent()
    {
        session_start();
        $id_content = $_SESSION['id_seeContent'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $text = $_POST['text'];

        unset($_SESSION['id_seeContent']);

        if ($this->model->update(['id_content' => $id_content, 'name' => $name, 'email' => $email, 'text' => $text])) {
            //Content updated correctly
            $content = new Content();
            $content->id_content = $id_content;
            $content->name = $name;
            $content->email = $email;
            $content->text = $text;

            $this->view->content = $content;
            $this->view->message = "Content updated correctly";
        } else {
            //Error updating content
            $this->view->message = "Error updating content";
        }
        $this->view->render('consult/detail');
    }

    function deleteContent($param){
        $id_content = $param[0];

        if($this->model->delete($id_content)){
            //$this->view->message = "Content deleted correctly";
            $message = "Content deleted correctly";
        }else{
            //$this->view->message = "Error deleting content";
            $message = "Error deleting content";
        }
        //$this->render();
        //$this->view->render('consult/index');

        echo $message;
    }

    //This is called from 'Router.php'
    function render()
    {
        //TODO Refactor this
        // $contents = $this->model->get();
        // $this->view->contents = $contents;
        // $this->view->render('consult/index');
    }
}
