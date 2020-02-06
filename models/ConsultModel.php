<?php

include_once ENTITIES . '/Content.php';

class ConsultModel extends Model{
    public function __construct(){
        //This calls to the constructor of the class Model is extending
        parent::__construct();

        if(EXECUTION_FLOW)
        echo '<p>Consult model</p>';
    }

    public function get(){
       $items = [];

       try{
            $query = $this->db->connect()->query("SELECT * FROM content");

            while($row = $query->fetch()){
                $item = new Content();

                $item->name = $row['name'];
                $item->email = $row['email'];
                $item->text = $row['text'];

                array_push($items, $item);
            }

            return $items;
       }catch (PDOException $e){

       }
    }
}

?>