<?php

require("../DataAccess/BookDAO.php");

class BookService{

    private $bookDAO;

    public function __construct(){
        $this->bookDAO = new BookDAO();
    }

    public function getBooks(){
        return $this->bookDAO->getBooks();

    }

    public function setBook($book){
        return $this->bookDAO->setBook($book);

    }




        
    
}










?>