<?php

require("../DB/DataBase.php");

class BookDAO{

    public function getBooks(){
        $db = new DataBase();
        return $db->Books;

    }

    public function setBook($book){
        $db = new DataBase();
        $db->Books[] = $book;
        $db->save(); 

    }

    public function deleteBook($id){
        foreach ($this->Books as $key => $book) {
            if ($book->id == $id) {
                unset($this->Books[$key]); 
                
            }
    }

 

}
}













?>