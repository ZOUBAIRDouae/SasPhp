<?php

require("../DataAccess/AuthorDAO.php")

class AuthorService{

    private $authorDAO

    public function __construct(){
        $this->authorDAO = new AuthorDAO()
    }

    public function getAuthors(){
        return $this->authorDAO->getAuthors()
    }

    public function setAuthor($author){
        return $this->authorDAO->setAuthor($auhtor)
    }






}










?>