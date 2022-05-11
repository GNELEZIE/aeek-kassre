<div class="row">
    <div class="section-header style2">
        <h3>Notre actualité</h3>
        <p>Synergistically Visualize Competitive Action Ttems For Open Source Opportunities Professionaly
            Develop Vertical Oportunities Rather Than
        </p>
    </div>

    <div class="section-wrapper">
        <div class="row">
            <?php

            while($dat = $listes->fetch()){
                $commentExiste = $comment->getCommentById($dat['id_article']);
                if($nbCom = $commentExiste->fetch()){
                    $nbComments = $comment->nbComment($dat['id_article'])->fetch();
                    $nbCom = $comment->getCommentByIdNb($dat['id_article'])->fetch();
                    $nbRepon = $reponse->nbReponses($nbCom['id_comment']);
                    if($nbReponses = $nbRepon->fetch()) {
                        $nbreps = $nbReponses['nb'];
                    }else{
                        $nbreps = 0;
                    }
                    $nbrComt = $nbComments['nb'] + $nbreps ;
                }else{
                    $nbrComt = 0;
                }
                ?>
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <a href="<?=$domaine?>/show/<?=$dat['slug']?>"><img src="<?=$domaine?>/uploads/<?=$dat['couverture'];?>" style="object-fit: cover; height: 250px;" alt="thumb"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="meta-post style2">
                                <li><img src="<?=$asset?>/images/12-09-18/blog/icon/share.png" alt="icon">
                                    <ul class="social-media-list">
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </li>
                                <li><img src="<?=$asset?>/images/12-09-18/blog/icon/comment.png" alt="icon"><span><?=$nbrComt?></span></li>
                                <li><img src="<?=$asset?>/images/12-09-18/blog/icon/heart.png" alt="icon"><span>25</span></li>
                            </ul>
                            <div class="content-part">
                                <h4><a href="<?=$domaine?>/show/<?=$dat['slug']?>" class="font-20"  style="text-transform: initial !important;"><?=reduit_text(html_entity_decode(stripslashes($dat['titre'])),'20');?></a></h4>
                                <div class="cont">
                                    <?=reduit_text(html_entity_decode(stripslashes($dat['description'])),'250');?>
                                </div>
                                <a href="<?=$domaine?>/show/<?=$dat['slug']?>" class="btn-transparence-orange" style="padding: 10px 18px !important;">Lire plus <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="read text-center">
            <a href="<?=$domaine?>/blog" class="btn-green-transparent p-3" style="padding: 12px 44px !important; border-radius: 3px;">Lire plus <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
        </div>

    </div>
</div>