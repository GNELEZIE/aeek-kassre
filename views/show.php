<?php
if(isset($doc[1]) and !isset($doc[2])) {

    $liste = $article->getArticleBySlug($doc[1]);

    if ($data = $liste->fetch()) {
        $authors = $admin->getAdminById($data['user_id'])->fetch();
    } else {
        header('location:' . $domaine . '/error');
        exit();
    }
}
require_once 'layout/header.php';
?>

<section class="blog-page padding-120">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-12 col-xs-12 sticky-widget">
    <div class="blog-item single">
        <div class="image">
            <img src="<?=$domaine?>/uploads/<?=$data['couverture'];?>" alt="Blog image" class="img-responsive">
        </div>
        <!-- image -->
        <div class="blog-content">
            <div>
                <ul class="post-meta">
                    <li><a href="#"><span><?=(date('N', strtotime($data['date_article'])))?></span><?=month_fr(date('m', strtotime($data['date_article']))).','.date('Y', strtotime($data['date_article']))?></a></li>
                    <li><span class="icon flaticon-user"></span><a href="#">Par <?=$authors['nom']?></a></li>
                    <li><span class="icon flaticon-like"></span><a href="#">12 Like</a></li>
                    <li><span class="icon flaticon-chat"></span><a href="#">24 Comment</a></li>
                </ul>
                <!-- post-meta -->
                <div class="content">
                    <h4><?=html_entity_decode(stripslashes($data['titre']));?></h4>
                    <div class="cont"><?=html_entity_decode(stripslashes($data['description']));?></div>
                </div>
                <!-- content -->
            </div>
        </div>
        <!-- blog-content -->
        <div class="post-bottom">
            <ul class="tags">
                <li><span>Tags :</span></li>
                <li><a href="#">Business,</a></li>
                <li><a href="#">Event,</a></li>
                <li><a href="#">Marketing</a></li>
            </ul>
            <ul class="share event-social">
                <li><span>Share Post :</span></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- blog item -->

    <div class="comments">
        <h4>04 Comments</h4>

        <ul>
            <li class="comment-item">
                <div class="image"><img src="<?=$asset?>/media/comment.jpg" alt="Blog image"
                                        class="img-responsive"></div>
                <div class="com-content">
                    <h4><a href="#">JANATON DOE</a></h4>
                                        <span><i class="fa fa-circle" aria-hidden="true"></i> 02 Days Ago At
                                            10:30pm</span>
                    <p>Professionally optimize intermandated data rather than goal and oriented and
                        band width Seamlesly and the extend distinctive awesome charity web
                        services.</p>
                    <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                </div>
                <ul>
                    <li class="comment-item">
                        <div class="image"><img src="<?=$asset?>/media/comment.jpg" alt="Blog image"
                                                class="img-responsive"></div>
                        <div class="com-content">
                            <h4><a href="#">robot smith</a></h4>
                                                <span><i class="fa fa-circle" aria-hidden="true"></i> 02 Days Ago At
                                                    10:30pm</span>
                            <p>Professionally optimize intermandated data rather than goal and
                                oriented and band width Seamlesly and the extend distinctive awesome
                                charity web services.</p>
                            <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="comment-item">
                <div class="image"><img src="<?=$asset?>/media/comment.jpg" alt="Blog image"
                                        class="img-responsive"></div>
                <div class="com-content">
                    <h4><a href="#">joly khan</a></h4>
                                        <span><i class="fa fa-circle" aria-hidden="true"></i> 02 Days Ago At
                                            10:30pm</span>
                    <p>Professionally optimize intermandated data rather than goal and oriented and
                        band width Seamlesly and the extend distinctive awesome charity web
                        services.</p>
                    <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                </div>
            </li>
            <li class="comment-item">
                <div class="image"><img src="<?=$asset?>/media/comment.jpg" alt="Blog image"
                                        class="img-responsive"></div>
                <div class="com-content">
                    <h4><a href="#">smith jhonson</a></h4>
                                        <span><i class="fa fa-circle" aria-hidden="true"></i> 02 Days Ago At
                                            10:30pm</span>
                    <p>Professionally optimize intermandated data rather than goal and oriented and
                        band width Seamlesly and the extend distinctive awesome charity web
                        services.</p>
                    <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- comment -->
    <div class="comment-form">
        <h4>Leave A Reply</h4>

        <form>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <input type="text" name="name" placeholder="Name*" class="comment-input">
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <input type="email" name="email" placeholder="Emial*" class="comment-input">
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <input type="text" name="website" placeholder="Website" class="comment-input">
                </div>
            </div>
            <textarea rows="6" class="comment-input">Comment</textarea>
            <input type="submit" name="submit" value="submit comment" class="comment-submit">
        </form>
    </div>
    <!-- comment-form -->

</div>
<div class="col-lg-4 col-md-12 col-xs-12 sticky-widget">
    <?php include_once "layout/bolg-sidebar.php"; ?>
</div>
</div>
<!-- row -->
</div>
<!-- container -->
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