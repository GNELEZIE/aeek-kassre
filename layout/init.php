<?php
ini_set("session.cookie_httponly", True);
session_start();

// include function
include_once "function/domaine.php";
include_once "function/mailing.php";
include_once "function/function.php";



//Include Connexion
include_once 'model/Connexion.class.php';

// appelle des class






// if(isset($_COOKIE['ecoldecroshi']) AND !isset($_SESSION['userecoldecroshi'])){
//    $email = my_decrypt($_COOKIE['ecoldecroshi']);
//    $result = $utilisateur->getUtilisateurByEmail($email);
//    if($data = $result->fetch()){
//        if($data['bloquer'] == 0){
//            $_SESSION['userecoldecroshi'] = $data;
//        }else{
//            setcookie('ecoldecroshi',null,time()-60*60*24*30,'/',$cookies_domaine,true,true);
//        }
//    }else{
//        setcookie('ecoldecroshi',null,time()-60*60*24*30,'/',$cookies_domaine,true,true);
//    }
// }

// if(isset($_SESSION['userecoldecroshi'])){
//     $result = $utilisateur->getUtilisateurById($_SESSION['userecoldecroshi']['id_utilisateur']);
//     if($data = $result->fetch()){
//         if($data['bloquer'] != 0){
// //            if(isset($_COOKIE['ecoldecroshi'])) {
// //                setcookie('ecoldecroshi',null,time()-60*60*24*30,'/',$cookies_domaine,true,true);
// //            }
//             unset($_SESSION['userecoldecroshi']);
//         }
//     }else{
//         unset($_SESSION['userecoldecroshi']);
//     }
// }