<?php

class Comment{
    public function  __construct(){
        $this->bdd = bdd();
    }


    //Create
    public function addComment($date_comment,$nom,$email,$message){
        $query = "INSERT INTO comment(date_comment,nom,email,message)
            VALUES (:date_comment,:nom,:email,:message)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "date_comment" => $date_comment,
            "nom" => $nom,
            "email" => $email,
            "message" => $message
        ));
        $nb = $rs->rowCount();
        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }

    //Read
    public function getAllComment(){
        $query = "SELECT * FROM comment
          WHERE statut =!1  ORDER BY id_comment DESC ";
        $rs = $this->bdd->query($query);
        return $rs;
    }


//Count
    public function nbComments(){

        $query = "SELECT COUNT(*) as nb FROM comment";
        $rs = $this->bdd->query($query);

        return $rs;
    }
//Update



    public function updateCouverturePhoto($couverture,$id){
        $query = "UPDATE article
            SET couverture = :couverture
            WHERE id_article = :id ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "couverture" => $couverture,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;

    }


}

$comment = new Comment();