<?php

require("../DB/DataBase.php")


class AuthorDAO{

    public function getAuthors(){
        $db = new DataBase()
        return $db->Authors
    }

    public function getAuthor($author){
        $db = new DataBase()
        $db->Authors[]  =  $author
        $db->save()
    }

    


}




?>