<?php
if(isset($doc[1])){
    $return = $doc[0]."/".$doc[1];
}else{
    $return = $doc[0];
}
//echo $return;
//exit;
if(!isset($_SESSION['membreaeek'])){
    header('location:'.$domaine.'/connexion?return='.str_replace('+', '-', my_encrypt($return)));
    exit();
}

$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;
require_once 'layout/header.php';
?>

    <div class="container-fluid bgimg1 py-5">
        <div class="container py-5">
            <div class="row pt-5">
                <div class="col-md-3">
                    <div class="tsbox">
                        <img src="<?=$asset?>/media/me.jpg" alt=""/>
                        <a href="#">Modifier la photo</a>
                    </div>
                    <div class="tsbox">

                    </div>
                </div>
                <div class="col-md-9">

                </div>
            </div>
        </div>
    </div>

<?php
require_once 'layout/footer.php';
?>