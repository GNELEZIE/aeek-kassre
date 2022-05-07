<?php

class Reponse{
    public function  __construct(){
        $this->bdd = bdd();
    }


    //Create
    public function addReponse($date_reponse,$nom,$email,$message, $comment_id){
        $query = "INSERT INTO reponse(date_reponse,nom,email,message,comment_id)
            VALUES (:date_reponse,:nom,:email,:message, :comment_id)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "date_reponse" => $date_reponse,
            "nom" => $nom,
            "email" => $email,
            "message" => $message,
            "comment_id" => $comment_id,
        ));
        $nb = $rs->rowCount();
        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }

    //Read
    public function getAllReponse(){
        $query = "SELECT * FROM reponse
          WHERE statut =!1  ORDER BY id_reponse DESC ";
        $rs = $this->bdd->query($query);
        return $rs;
    }
    public function getReponseById($id){
        $query = "SELECT * FROM reponse
        WHERE comment_id = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "id" => $id
        ));
        return $rs;
    }

//Count
    public function nbReponses(){

        $query = "SELECT COUNT(*) as nb FROM reponse";
        $rs = $this->bdd->query($query);

        return $rs;
    }
//Update






}

$reponse = new Reponse();