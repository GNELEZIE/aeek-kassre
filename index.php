<?php
require_once 'layout/init.php';

$slug = trim(utf8_decode(trim(substr($_SERVER["REQUEST_URI"], strlen(dirname($_SERVER["SCRIPT_NAME"]))))), "/");

$doc = explode('/',$slug);
$lien = $doc[0];

if($lien =='' || $lien =='index'){
    $lien = 'home';
    $page = '';
}else{
    $page = $lien;
}
if(isset($_GET)){
    $g = explode('?',$lien);
    $lien = $g[0];
    $page = $lien;
}
if(file_exists('views/'.$lien.'.php')){
    require_once 'views/'.$lien.'.php';
}else{
    header('location:'.$domaine.'/error');
}