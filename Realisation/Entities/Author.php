<?php

class Author {
    private $id
    private $firstName
    private $lastName
    private $birthDate
    private $nationality

    public function __construct($firstName, $lastName, $birthDate, $nationality){
        $this->firstName = $firstName
        $this->lastName = $lastName
        $this->birthDate = $birthDate
        $this->nationality = $nationality
    }

    public function getId(){
        return $this->id
    }

    public function setId($id){
        $this->id = $id
    }

    public function getFirstName(){
        return $this->firstName
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName
    }

    public function getLastName(){
        return $this->lastName
    }

    public function setLastName($lastName){
        $this->lastName = $lastName
    }

    public function getBirthDate(){
        return $this->birthDate
    }

    public function setBirthDate($birthDate){
        $this->birthDate = $birthDate
    }

    public function getNationality(){
        return $this->nationality
    }

    public function setNationality($nationality){
        $this->nationality = $nationality
    }
}



?>