<?php


$liste = $article->getAllArticle();




require_once 'layout/header.php';
?>
<section class="banner banner-blog banner-five">
    <div class="banner-overlay"></div>

    <div class="p-3 text-center position-text"><h2><span class="bg-orange px-3 mb-3 text-white"> Actualité</span></h2>
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
<section class="blog-page padding-120">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-12 col-xs-12 sticky-widget">

    <?php
    while($data = $liste->fetch()){
 $authors = $admin->getAdminById($data['user_id'])->fetch();

    ?>
        <div class="blog-item">
            <div class="image">
                <a href="<?=$domaine?>/show"><img src="<?=$domaine?>/uploads/<?=$data['couverture'];?>" alt="Blog image" class="img-responsive"></a>
            </div>
            <div class="blog-content">
                <div>
                    <ul class="post-meta">
                        <li><a href="#"><span><?=(date('N', strtotime($data['date_article'])))?></span><?=month_fr(date('m', strtotime($data['date_article']))).','.date('Y', strtotime($data['date_article']))?></a></li>
                        <li><span class="icon flaticon-user"></span><a href="#">Par <?=$authors['nom']?></a></li>
                        <li><span class="icon flaticon-like"></span><a href="#">12 Like</a></li>
                        <li><span class="icon flaticon-chat"></span><a href="#">24 Comment</a></li>
                    </ul>
                    <div class="content">
                        <h4><a href="<?=$domaine?>/show/<?=$data['slug']?>"><?=html_entity_decode(stripslashes($data['titre']));?></a></h4>
                      <div class="cont pt-3"> <?=reduit_text(html_entity_decode(stripslashes($data['description'])),'500');?></div>
                        <a href="<?=$domaine?>/show/<?=$data['slug']?>" class="default-button">Lire la suite</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>




    <ul class="pagination">
        <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a></li>
        <li><a href="#">10</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
    </ul>
</div>
<div class="col-lg-4 col-md-12 col-xs-12 sticky-widget">
<?php include_once "layout/bolg-sidebar.php"; ?>
</div>
</div>

</div>
</section>

















<?php
require_once 'layout/footer.php';
?>
<script src="<?=$asset?>/plugins/ticker/js/jquery.newsTicker.js"></script>
<script>


    var nt_example2 = $('#nt-example2').newsTicker({
        row_height: 60,
        max_rows: 1,
        speed: 300,
        duration: 6000,
        prevButton: $('#nt-example2-prev'),
        nextButton: $('#nt-example2-next'),
        hasMoved: function() {
            $('#nt-example2-infos-container').fadeOut(200, function(){
                $('#nt-example2-infos .infos-hour').text($('#nt-example2 li:first span').text());
                $('#nt-example2-infos .infos-text').text($('#nt-example2 li:first').data('infos'));
                $(this).fadeIn(400);
            });
        },
        pause: function() {
            $('#nt-example2 li i').removeClass('fa-play').addClass('fa-pause');
        },
        unpause: function() {
            $('#nt-example2 li i').removeClass('fa-pause').addClass('fa-play');
        }
    });
    $('#nt-example2-infos').hover(function() {
        nt_example2.newsTicker('pause');
    }, function() {
        nt_example2.newsTicker('unpause');
    });
    var state = 'stopped';
    var speed;
    var add;



</script>