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
}














?>