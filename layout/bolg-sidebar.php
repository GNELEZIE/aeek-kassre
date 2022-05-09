<div class="sidebar">
<div class="sidebar-item">
    <h4 class="sidebar-title pt-3">Flash info</h4>
    <div id="nt-example2-container m-3">
     <div class="cont">
         <ul id="nt-example2" class="pt-3">
             <?php
             $sideArticle = $article->getAllArticleSide();
             $categ = $categorie->getAllCategorie();
             $lastArticle = $article->getLastArticleSide()->fetch();
             while($results = $sideArticle->fetch()){
                 $inf = reduit_text(html_entity_decode(stripslashes($results['description'])),'500','...');
                 ?>


                 <li data-infos=''>
                     <i class="fa fa-fw fa-play state"></i>
                     <span class="hour"><?=date_hour($results['date_article'])?></span> <?=reduit_text(html_entity_decode(stripslashes($results['titre'])),'100');?>
                 </li>

             <?php
             }
             ?>
         </ul>
     </div>
        <div id="nt-example2-infos-container">
            <div id="nt-example2-infos-triangle"></div>
            <div id="nt-example2-infos" class="row">
                <div class="col-xs-8">
                    <div class="infos-text"><?=reduit_text(html_entity_decode(stripslashes($lastArticle['description'])),'500','...');?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sidebar-item">
    <?php
    //setcookie('confirm','oui',time()+3600,'/',false,true,true);
    $inputSearch = '';
    if(isset($_GET['search'])){
        $inputSearch = $_GET['search'];
    }
    ?>
    <form method="get" action="<?=$domaine?>/recherche">
        <input type="text" name="search" value="<?=$inputSearch?>" placeholder="Recherche..." style="border-right:6px !important;">
        <button style="background: #040404;color: #fff;important;font-size: 16px;border-radius: 0 6px 6px 0;"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
</div>
<div class="sidebar-item">
    <h4 class="sidebar-title pt-3">Catégories</h4>
    <ul class="categores">
        <?php
        while($category = $categ->fetch()){
            $nbCat = $article->getNbrCatByArticle($category['id_categorie'])->fetch();
            ?>
            <li>
                <a href="<?=$domaine?>/categorie/<?=$category['slug']?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=html_entity_decode(stripslashes($category['nom']))?></a>
                <span><?=$nbCat['nb']?></span>
            </li>
        <?php
        }
        ?>

    </ul>
</div>
<div class="sidebar-item">
    <h4 class="sidebar-title pt-3">Articles récents</h4>

    <div class="latest-posts">
        <?php
        $sideArt = $article->getCinqArticle();
        while($cinqArticle = $sideArt->fetch()){
            ?>
            <div class="blog-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image">
                            <a href="<?=$domaine?>/show/<?=$cinqArticle['slug']?>"><img src="<?=$domaine?>/uploads/<?=$cinqArticle['couverture'];?>" alt="Blog image" class="img-responsive" style="object-fit: cover;height: 65px;"> </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="content">
                            <h4><a href="<?=$domaine?>/show/<?=$cinqArticle['slug']?>" class="font-15"><?=reduit_text(html_entity_decode(stripslashes($cinqArticle['titre'])),'40')?></a></h4>
                            <ul>
                                <li><a href="<?=$domaine?>/show/<?=$cinqArticle['slug']?>"><i class="fa fa-clock-o" aria-hidden="true"></i> <?=date_lettre($cinqArticle['date_article'])?> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>

    </div>
</div>
<div class="sidebar-item">
    <h4 class="sidebar-title pt-3">Tags populaires</h4>

    <ul class="tags">
        <li><a href="#">children</a></li>
        <li><a href="#">school</a></li>
        <li><a href="#">shop</a></li>
        <li><a href="#">water</a></li>
        <li><a href="#">charity</a></li>
        <li><a href="#">heaven</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contant</a></li>
        <li><a href="#">Design</a></li>
    </ul>

</div>
</div>