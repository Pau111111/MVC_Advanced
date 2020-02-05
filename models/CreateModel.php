<?php

class CreateModel extends Model{
    public function __construct(){
        //This calls to the constructor of the class Model is extending
        parent::__construct();

        if(EXECUTION_FLOW)
        echo '<p>Create model</p>';
    }

    public function insert($data){
        try{
        //Insert data into DB
            $query = $this->db->connect()->prepare('INSERT INTO content (name, email, text) VALUES(:name, :email, :text)');
            $query->execute(['name' => $data['name'], 'email' => $data['email'], 'text' => $data['text']]);
           return true;
        } catch(PDOException $e){
            echo 'Error INSERT: ' . $e->getMessage();
            return false;
        }
    }
}

?>