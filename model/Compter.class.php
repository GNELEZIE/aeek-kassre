<?php

class Compter{
    public function  __construct(){
        $this->bdd = bdd();
    }



    //Read
    public function compter_visite(){
        $ip   = $_SERVER['REMOTE_ADDR']; // L'adresse IP du visiteur
        $date = date('Y-m-d');
        $query = "INSERT INTO stats_visite(ip , date_visite , pages_vues)
            VALUES (:ip , :date , 1) ON DUPLICATE KEY UPDATE pages_vues = pages_vues + 1";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            'ip'   => $ip,
            'date' => $date

        ));
        $nb = $rs->rowCount();
        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }



}

$compter = new Compter();