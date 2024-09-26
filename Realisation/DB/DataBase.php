<?php

class DadaBase{

    public $Books = [];

    public function __construct(){

        $this->getData();
    }

    private function getData(){
        $filepath = "../DB/DataBase.txt";
        
        if(file_exists($filepath)){
            $file_content = file_get_content($filepath);
            $data = unserialize($file_content);
            $this->Books = $data->Books;
        }
    }

    public function setData(){
        $filepath = "../DB/DataBase.txt"
        $data = serialize($this);
        $file_put_content($filepath, $data)
    }

    

    public function saveData(){
        $this->setData()
    }

}


    

    
 
    
    











?>