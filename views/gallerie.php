<?php
if(isset($doc[1]) and !isset($doc[2])) {

    $liste = $events->getEventBySlug($doc[1]);

    if ($eventsData = $liste->fetch()) {
        $eventId =  $eventsData['id_events'];
    } else {
        header('location:' . $domaine_admin . '/error');
        exit();
    }

}else{
    header('location:' . $domaine_admin . '/error');
    exit();
}
require_once 'layout/header.php';
?>

<section class="container-fluid head-pag" style="margin-top: 75px">
    <div class="container text-center" style="padding-top: 29px;">
        <h1><?=html_entity_decode(stripcslashes($eventsData['nom'])).' '.month_fr(date('m', strtotime($eventsData['date_events']))).','.date('Y', strtotime($eventsData['date_events']));?></h1>
    </div>
</section>
<section class="gallery gallery-two gallery-uhv padding-120">
    <div class="container">


        <div class="section-wrapper">
            <div class="gallery-items grid">
                <div class="gallery-item grid-sizer"></div>
                <?php
                $liste = $gallerie->getGallerieById($eventsData['id_events']);
                while($galData = $liste->fetch()){
                    ?>


                <div class="gallery-item grid-item">
                    <div class="gallery-thumb">
                        <img src="<?=$domaine?>/uploads/<?=$galData['photo'];?>" alt="gallery image" class="img-responsive">
                        <div class="overlay"></div>
                        <a href="<?=$domaine?>/uploads/<?=$galData['photo'];?>" data-rel="lightcase:myCollection">
                            <img src="<?=$asset?>/media/galicon.png"  class="img-responsive">
                        </a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <a href="#" class="gallery-button default-button">lord more photos</a>
        </div>
    </div>
</section>


<?php
require_once 'layout/footer.php';
?>


