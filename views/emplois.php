<?php
//if(isset($doc[1])){
//    $return = $doc[0]."/".$doc[1];
//}else{
//    $return = $doc[0];
//}
//
//$vus = $compter->compter_visite();
//
//if(isset($_GET['page']) and is_numeric($_GET['page'])){
//    $numPage = $_GET['page'];
//    $fin = 4 * $numPage;
//    $debut = $fin - 4;
//}else{
//    $numPage = 1;
//    $debut = 0;
//    $fin = 4;
//}
//
//$res = $article->getAllNbrArticle();
//
//if($nbre = $res->fetch()){
//    $pages = $nbre['nb']/4;
//}else{
//    $pages = 1;
//}
//$myPage = '/blog';
//$liste = $article->getAllNbrArticles($debut,$fin);


require_once 'layout/header.php';
?>
<section class="banner banner-blog banner-five">
    <div class="banner-overlay"></div>

    <div class="p-3 text-center position-text"><h2><span class="bg-orange px-3 mb-3 text-white"> Offres d'emploi</span></h2>
    </div>
</section>
<section class="page-header">
    <div class="container">
        <div class="content">
            <h4>Pongala info</h4>
            <ul>
                <li><span><i class="fa fa-home" aria-hidden="true"></i></span> <a href="<?=$domaine?>">Acceuil</a>
                    <span>|</span></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</section>

<section class="become-sponsor padding-120">
    <div class="container">
        <div class="become-sponsor-list row">
            <div class="col-lg-4 col-md-6">
                <div class="become-sponsor-item">
                    <div class="sponsor-thumb">
                        <img src="images/become-sponsor/01.jpg" alt="sponsor">
                    </div>
                    <div class="sponsor-content">
                        <h4>Main Sponsor</h4>
                        <p>Dynamically simplfy awesome impactful intellectual capital rather than acvtve an
                            ontualy formulate unique networks</p>
                        <a href="#" class="sponsor-btn">Become a Sponsor</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="become-sponsor-item">
                    <div class="sponsor-thumb">
                        <img src="images/become-sponsor/02.jpg" alt="sponsor">
                    </div>
                    <div class="sponsor-content">
                        <h4>Platinum Sponsor</h4>
                        <p>Dynamically simplfy awesome impactful intellectual capital rather than acvtve an
                            ontualy formulate unique networks</p>
                        <a href="#" class="sponsor-btn">Become a Sponsor</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="become-sponsor-item">
                    <div class="sponsor-thumb">
                        <img src="images/become-sponsor/03.jpg" alt="sponsor">
                    </div>
                    <div class="sponsor-content">
                        <h4>Gold Sponsor</h4>
                        <p>Dynamically simplfy awesome impactful intellectual capital rather than acvtve an
                            ontualy formulate unique networks</p>
                        <a href="#" class="sponsor-btn">Become a Sponsor</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="become-sponsor-item">
                    <div class="sponsor-thumb">
                        <img src="images/become-sponsor/04.jpg" alt="sponsor">
                    </div>
                    <div class="sponsor-content">
                        <h4>Silver Sponsor</h4>
                        <p>Dynamically simplfy awesome impactful intellectual capital rather than acvtve an
                            ontualy formulate unique networks</p>
                        <a href="#" class="sponsor-btn">Become a Sponsor</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="become-sponsor-item">
                    <div class="sponsor-thumb">
                        <img src="images/become-sponsor/05.jpg" alt="sponsor">
                    </div>
                    <div class="sponsor-content">
                        <h4>Break Sponsor</h4>
                        <p>Dynamically simplfy awesome impactful intellectual capital rather than acvtve an
                            ontualy formulate unique networks</p>
                        <a href="#" class="sponsor-btn">Become a Sponsor</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="become-sponsor-item">
                    <div class="sponsor-thumb">
                        <img src="images/become-sponsor/06.jpg" alt="sponsor">
                    </div>
                    <div class="sponsor-content">
                        <h4>Hosting Sponsor</h4>
                        <p>Dynamically simplfy awesome impactful intellectual capital rather than acvtve an
                            ontualy formulate unique networks</p>
                        <a href="#" class="sponsor-btn">Become a Sponsor</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="become-sponsor-item">
                    <div class="sponsor-thumb">
                        <img src="images/become-sponsor/07.jpg" alt="sponsor">
                    </div>
                    <div class="sponsor-content">
                        <h4>Social Sponsor</h4>
                        <p>Dynamically simplfy awesome impactful intellectual capital rather than acvtve an
                            ontualy formulate unique networks</p>
                        <a href="#" class="sponsor-btn">Become a Sponsor</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="become-sponsor-item">
                    <div class="sponsor-thumb">
                        <img src="images/become-sponsor/08.jpg" alt="sponsor">
                    </div>
                    <div class="sponsor-content">
                        <h4>Giveaway Sponsor</h4>
                        <p>Dynamically simplfy awesome impactful intellectual capital rather than acvtve an
                            ontualy formulate unique networks</p>
                        <a href="#" class="sponsor-btn">Become a Sponsor</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="become-sponsor-item">
                    <div class="sponsor-thumb">
                        <img src="images/become-sponsor/09.jpg" alt="sponsor">
                    </div>
                    <div class="sponsor-content">
                        <h4>Community Sponsor</h4>
                        <p>Dynamically simplfy awesome impactful intellectual capital rather than acvtve an
                            ontualy formulate unique networks</p>
                        <a href="#" class="sponsor-btn">Become a Sponsor</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center">
                <a href="#" class="become-btn">Become a sponsor</a>
            </div>
        </div>
    </div>
</section>

















<?php
require_once 'layout/footer.php';
?>
<script>




</script>