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

                $item->id_content = $row['id_content'];
                $item->name = $row['name'];
                $item->email = $row['email'];
                $item->text = $row['text'];

                array_push($items, $item);
            }

            return $items;
       }catch (PDOException $e){

       }
    }

    public function getById($id){
        $item = new Content();
        
        $query = $this->db->connect()->prepare("SELECT * FROM content WHERE id_content = :id_content");
        try{
            $query->execute(['id_content' => $id]);

            while($row = $query->fetch()){
                $item->id_content = $row['id_content'];
                $item->name = $row['name'];
                $item->email = $row['email'];
                $item->text = $row['text'];
            }

            return $item;
        }catch (PDOException $e){
            return null;
        }
    }

    public function update($item){
        $query = $this->db->connect()->prepare("UPDATE content SET name = :name, email = :email, text = :text WHERE id_content = :id_content");

        try{
            $query->execute([
                'id_content' => $item['id_content'],
                'name' => $item['name'],
                'email' => $item['email'],
                'text' => $item['text']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($item){
        $query = $this->db->connect()->prepare("DELETE FROM content WHERE id_content = :id_content");

        try{
            $query->execute([
                'id_content' => $item
            ]);
            return true;
        }catch (PDOException $e){
            return false;
        }
    }
}

?>