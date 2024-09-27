<?php

class Loan{
    private $id
    private $start_date
    private $return_date
    private $actual_return_date
    private $book_id
    private $reader_id

    public function __construct($start_date, $return_date, $actual_return_date, $book_id, $reader_id){
        $this->id = time();
        $this->start_date = $start_date;
        $this->return_date = $return_date;
        $this->actual_return_date = $actual_return_date;
        $this->book_id = $book_id;
        $this->reader_id = $reader_id;
    }

    public function getStartDate(){
        return $this->start_date
    }

    public function setStartDate($start_date){
        $this->start_date = $start_date
    }

    public function getReturnDate(){
        return $this->return_date
    }

    public function setReturnDate($return_date){
        $this->return_date = $return_date
    }

    public function getActualReturnDate(){
        return $this->actual_return_date
    }

    public function setActualReturnDate($actual_return_date){
        $this->actual_return_date = $actual_return_date
    }

    public function getBookId(){
        return $this->book_id
    }

    public function setBookId($book_id){
        $this->book_id = $book_id
    }

    public function getReaderId(){
        return $this->reader 
    }

    public function setReaderId($reader_id){
        $this->reader_id = $reader_id
    }
}









?>