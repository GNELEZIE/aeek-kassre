<?php
require_once 'layout/header.php';
?>

<link href="<?=$asset?>/plugins/ticker/css/main.css" rel="stylesheet">




    <div class="white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-6 centered">
                    <div id="nt-example2-container">
                        <ul id="nt-example2">
                            <li data-infos="Cras sagittis nulla sit amet feugiat pulvinar. Fusce scelerisque aliquet purus, sit amet rutrum augue euismod ut. Aliquam erat volutpat. Integer convallis, ligula non bibendum dictum, ante lectus fringilla nunc, at euismod neque enim sit amet ante. In risus velit, porttitor blandit magna vel, adipiscing semper libero. ">
                                <i class="fa fa-fw fa-play state"></i>
                                <span class="hour">08:12</span> Etiam imperdiet volutpat libero eu tristique.
                            </li>
                            <li data-infos="Quisque imperdiet, tellus et tempus mattis, risus ipsum molestie leo, in tincidunt nisl nunc at magna. Suspendisse pretium ullamcorper feugiat. Nunc quis egestas odio, eu vestibulum nisl. In hac habitasse platea dictumst. Aliquam vel dapibus lacus. Curabitur pharetra quam purus. Suspendisse sed nulla condimentum nibh blandit consectetur non eget velit.">
                                <i class="fa fa-fw fa-play state"></i>
                                <span class="hour">08:41</span> Curabitur porttitor ante eget hendrerit adipi.
                            </li>
                            <li data-infos="Vestibulum ac interdum quam, tempus aliquet purus. Nunc luctus augue ut pellentesque faucibus. Proin urna nunc, feugiat ac bibendum non, cursus id orci. Integer porttitor diam et odio pharetra, sed congue augue dapibus. Fusce ac tristique tortor. Aliquam adipiscing ligula in dui pretium ultrices.">
                                <i class="fa fa-fw fa-play state"></i>
                                <span class="hour">10:02</span> Praesent ornare nisl lorem, ut condi.
                            </li>
                            <li data-infos="Proin vulputate mi pharetra tellus semper dapibus. Vestibulum non metus convallis, lobortis velit eu, facilisis mauris. Mauris mattis ante sit amet nulla egestas, ut consectetur tortor tristique. In porttitor non eros nec scelerisque. Sed eu condimentum tellus, et feugiat urna. Duis semper ligula a risus suscipit, ut vestibulum mi tempor.">
                                <i class="fa fa-fw fa-play state"></i>
                                <span class="hour">10:14</span> Nunc ultrices tortor eu massa placerat posuere.
                            </li>
                            <li data-infos="Sed facilisis, erat at accumsan tincidunt, metus diam convallis tortor, at facilisis tortor libero sed ante. Sed ut felis sed felis scelerisque bibendum. Ut quis aliquet magna. Phasellus elementum volutpat mattis. Proin in rutrum ante, at imperdiet dolor. Vivamus congue turpis facilisis congue ullamcorper. Etiam sollicitudin quis dolor hendrerit ultricies.">
                                <i class="fa fa-fw fa-play state"></i>
                                <span class="hour">11:23</span> Morbi sodales tellus sit amet leo congue bibendum.
                            </li>
                            <li data-infos="Raesent aliquam sapien quis pretium vestibulum. Vestibulum varius velit leo, quis facilisis enim mattis id. Proin et tempor ligula, id dapibus neque. Aliquam egestas adipiscing tellus. Morbi enim leo, fringilla eget vulputate tincidunt, fringilla et sapien. Curabitur ultricies auctor lectus, quis ultricies sem tincidunt sit amet. Mauris non tempor ipsum. Sed sed ipsum nulla. Quisque laoreet velit dolor, nec placerat odio ullamcorper eget.">
                                <i class="fa fa-fw fa-play state"></i>
                                <span class="hour">11:45</span> In pharetra suscipit orci sed viverra. Praesent at.
                            </li>
                            <li data-infos="Praesent ut eleifend lorem. Duis ut velit quis mauris molestie aliquam vitae id diam. Etiam eget mauris condimentum, lacinia lectus et, aliquet ligula. Nulla rutrum tincidunt tincidunt. Maecenas eu dolor vestibulum, pellentesque erat non, molestie nibh. Morbi ac semper quam. Aliquam erat volutpat.">
                                <i class="fa fa-fw fa-play state"></i>
                                <span class="hour">11:55</span> Maecenas nec ligula sed est suscipit aliquet sed.
                            </li>
                            <li data-infos="Duis euismod, mi nec posuere malesuada, nisl leo bibendum ligula, sit amet vestibulum est neque non sapien. Curabitur mi massa, bibendum cursus scelerisque imperdiet, semper eu lacus. Etiam mauris eros, faucibus eu pretium vitae, rutrum vel urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin laoreet pellentesque felis, sed vulputate justo rhoncus et. ">
                                <i class="fa fa-fw fa-play state"></i>
                                <span class="hour">12:00</span> Onec bibendum consectetur diam, nec eui.
                            </li>
                        </ul>
                        <div id="nt-example2-infos-container">
                            <div id="nt-example2-infos-triangle"></div>
                            <div id="nt-example2-infos" class="row">
                                <div class="col-xs-4 centered">
                                    <div class="infos-hour">
                                        08:12
                                    </div>
                                    <i class="fa fa-arrow-left" id="nt-example2-prev"></i>
                                    <i class="fa fa-arrow-right" id="nt-example2-next"></i>
                                </div>
                                <div class="col-xs-8">
                                    <div class="infos-text">Cras sagittis nulla sit amet feugiat pulvinar. Fusce scelerisque aliquet purus, sit amet rutrum augue euismod ut. Aliquam erat volutpat. Integer convallis, ligula non bibendum dictum, ante lectus fringilla nunc, at euismod neque enim sit amet ante. In risus velit, porttitor blandit magna vel, adipiscing semper libero.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-md-pull-6 centered">
                    <h3>ONE LINE TICKER WITH CALLBACKS & METHODS EXAMPLE</h3>

                </div>
            </div>
        </div>
    </div>


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


    </body>
    </html>

