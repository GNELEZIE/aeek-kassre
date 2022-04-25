<?php
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
    <div class="blog-item">
        <div class="image">
            <a href="<?=$domaine?>/show"><img src="<?=$asset?>/media/aeek-2.jpeg" alt="Blog image"
                                       class="img-responsive"></a>
        </div>
        <div class="blog-content">
            <div>
                <ul class="post-meta">
                    <li><a href="#"><span>24</span>December, 2021</a></li>
                    <li><span class="icon flaticon-user"></span><a href="#">by admin</a></li>
                    <li><span class="icon flaticon-like"></span><a href="#">12 Like</a></li>
                    <li><span class="icon flaticon-chat"></span><a href="#">24 Comment</a></li>
                </ul>
                <div class="content">
                    <h4><a href="<?=$domaine?>/show">Competely actualze cententrc anstaled base</a></h4>
                    <p>Completelly actuaze cent centric coloration and idea saharing without
                        installed an base awesome theme of event aresourcescreative and awesome
                        event template Completely actuaze cent centric coloration and idea saharing
                        without installed and basie awesome theme of event aresourcescreative and
                        awesome event template.</p>
                    <a href="<?=$domaine?>/show" class="default-button">Lire la suite</a>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-item">
        <div class="image">
            <a href="<?=$domaine?>/show"><img src="<?=$asset?>/media/aeek-2.jpeg" alt="Blog image"
                                       class="img-responsive"></a>
        </div>
        <div class="blog-content">
            <div>
                <ul class="post-meta">
                    <li><a href="#"><span>24</span>December, 2021</a></li>
                    <li><span class="icon flaticon-user"></span><a href="#">by admin</a></li>
                    <li><span class="icon flaticon-like"></span><a href="#">12 Like</a></li>
                    <li><span class="icon flaticon-chat"></span><a href="#">24 Comment</a></li>
                </ul>
                <div class="content">
                    <h4><a href="<?=$domaine?>/show">Competely actualze cententrc anstaled base</a></h4>
                    <p>Completelly actuaze cent centric coloration and idea saharing without
                        installed an base awesome theme of event aresourcescreative and awesome
                        event template Completely actuaze cent centric coloration and idea saharing
                        without installed and basie awesome theme of event aresourcescreative and
                        awesome event template.</p>
                    <a href="<?=$domaine?>/show" class="default-button">Lire la suite</a>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-item">
        <div class="image">
            <a href="<?=$domaine?>/show"><img src="<?=$asset?>/media/aeek-2.jpeg" alt="Blog image"
                                       class="img-responsive"></a>
        </div>
        <div class="blog-content">
            <div>
                <ul class="post-meta">
                    <li><a href="#"><span>24</span>December, 2021</a></li>
                    <li><span class="icon flaticon-user"></span><a href="#">by admin</a></li>
                    <li><span class="icon flaticon-like"></span><a href="#">12 Like</a></li>
                    <li><span class="icon flaticon-chat"></span><a href="#">24 Comment</a></li>
                </ul>
                <div class="content">
                    <h4><a href="<?=$domaine?>/show">Competely actualze cententrc anstaled base</a></h4>
                    <p>Completelly actuaze cent centric coloration and idea saharing without
                        installed an base awesome theme of event aresourcescreative and awesome
                        event template Completely actuaze cent centric coloration and idea saharing
                        without installed and basie awesome theme of event aresourcescreative and
                        awesome event template.</p>
                    <a href="<?=$domaine?>/show" class="default-button">Lire la suite</a>
                </div>
            </div>
        </div>

    </div>

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