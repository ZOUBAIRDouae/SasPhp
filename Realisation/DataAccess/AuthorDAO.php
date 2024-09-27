<?php

require("../DB/DataBase.php")


class AuthorDAO{

    public function getAuthors(){
        $db = new DataBase()
        return $db->Authors
    }

    public function getAuthor($id){
        $db = new DataBase()
        $db->Authors[]  =  $id
        $db->save()
    }

    
}




?>