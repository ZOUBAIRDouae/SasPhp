<?php

class Reader {
    private $id
    private $numCart
    private $last_name
    private $first_name
    private $adress

    public function __construct($numCart, $last_name, $first_name, $adress){
        $this->id = time()
        $this->numCart = $numCart
        $this->last_name = $last_name
        $this->first_name = $first_name
        $this->adress = $adress
    }

    public function getId(){
        return $this->id
    }

    public function setId($id){
        $this->id = $id
    }

    public function getNumCart(){
        return $this->numCart
    }

    public function setNumCart($numCart){
        $this->numCart = $numCart
    }

    public function getLastName(){
        return $this->last_name
    }

    public function setLastName($last_name){
        $this->last_name = $last_name
    }

    public function getFirstName(){
        return $this->first_name
    }

    public function setFirstName($first_name){
        $this->first_name = $first_name
    }

    public function getAdress(){
        return $this->adress
    }

    public function setAdress($adress){
        $this->adress = $adress
    }


}











?>