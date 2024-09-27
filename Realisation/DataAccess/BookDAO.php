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
        $db->save(); //on sauvegarde le tableau dans le fichier

    }

    public function deleteBook($id){
        $db = new DataBase()
        foreach ($this->Books as $key => $book) {
            if ($book->id == $id) {
                unset($this->Books[$key]); 
                $db->save()
                break
            }
    }}

    public function updateBook($id, $book){
        $db = new DataBase()
        foreach($db->Books as $key => $book){
            if($book->id == $id) {
                
            }
        }
    }

}

?>