<?php

class Article{
    public function  __construct(){
        $this->bdd = bdd();
    }



    //Read

    public function getAllArticle(){
        $query = "SELECT * FROM article
          ORDER BY id_article DESC ";
        $rs = $this->bdd->query($query);
        return $rs;
    }

    public function getArticleById($id){
        $query = "SELECT * FROM article
        WHERE id_article = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "id" => $id
        ));
        return $rs;
    }
    public function getArticleBySlug($slug){
        $query = "SELECT * FROM article
        WHERE slug = :slug";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "slug" => $slug
        ));
        return $rs;
    }

//Update
    public function updateArticle($etat,$id){
        $query = "UPDATE article
            SET statut = :etat
            WHERE id_article = :id ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "etat" => $etat,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;

    }
    public function updateArticleInfo($titre,$categorie_id,$description,$id){
        $query = "UPDATE article
            SET titre = :titre,categorie_id = :categorie_id, description =:description
            WHERE id_article = :id ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "titre" => $titre,
            "categorie_id" => $categorie_id,
            "description" => $description,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;

    }

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
    // Verification valeur existant
    public function verifArticle($propriete,$val){
        $query = "SELECT * FROM article WHERE $propriete = :val";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val" => $val
        ));

        return $rs;
    }

}

$article = new Article();