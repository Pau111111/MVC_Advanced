<?php

class CreateModel extends Model{
    public function __construct(){
        //This calls to the constructor of the class Model is extending
        parent::__construct();

        if(EXECUTION_FLOW)
        echo '<p>Create model</p>';
    }

    public function insert(){
        //Insert data into DB

        echo 'Insert Data';
    }
}

?>