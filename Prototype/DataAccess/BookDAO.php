<?php

require("../DB/DataBase.php");

class BookDAO {
    public function getBooks(){
        $database = new DataBase();
        return $database->Books;
    }

    public function getBook($book){
        $database = new DataBase();
        $database->Books[] = $book;
        $database->saveData();
    }
}














?>