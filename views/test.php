<!--Votre ID client-->
<!--399335338678-7jl81epn31t53utpji0hlllu3pv2g476.apps.googleusercontent.com-->
<!---->
<!--Votre code secret client-->
<!--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-->




<li class="comment-item">
    <div class="image"><img src="<?=$asset?>/media/anonym.png" alt="Blog image" class="img-responsive"></div>
    <div class="com-content">
        <h4><?=html_entity_decode(stripslashes($nom))?></h4>
        <span><i class="fa fa-circle" aria-hidden="true"></i> <?=date_lettre($com['date_comment']);?> </span>
        <p><?=html_entity_decode(stripslashes($com['message']))?></p>
        <a href="javascript:void(0)" class="" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?=$com['id_comment']?>" aria-expanded="false" aria-controls="flush-collapse<?=$com['id_comment']?>"><i class="fa fa-reply" aria-hidden="true"></i> Répondre</a>
    </div>
    <div class="accordion accordion-flush" id="reponse<?=$com['id_comment']?>">
        <div class="accordion-item">
            <div id="flush-collapse<?=$com['id_comment']?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?=$com['id_comment']?>" data-bs-parent="#reponse<?=$com['id_comment']?>">
                <div class="comment-form">
                    <form method="post" id="formRepondre">
                        <div class="succesR"></div>
                        <div class="errosR"></div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <input type="text" name="nomR" id="nomR" placeholder="Nom*" class="comment-input input-style" required>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <input type="email" name="emailR" id="emailR" placeholder="Email*" class="comment-input input-style" required>
                                <input type="hidden" class="form-control " name="formkey" value="<?= $token ?>">
                                <input type="hidden" class="form-control " name="article_id" value="<?= $data['id_article'] ?>">
                                <input type="hidden" class="form-control " name="com_id" id="com_id" value="<?=$com['id_comment']?>">
                            </div>
                        </div>
                        <textarea rows="3" name="messageR" id="messageR" class="comment-input input-style" placeholder="Message"></textarea>
                        <button type="submit" name="submit" class="comment-submit btn-transparence-orange mb-3" style="text-transform: inherit !important;font-weight: inherit !important;">Répondre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <ul>
        <?php
        while($respon = $rps->fetch()) {
            if($respon['nom'] == ''){
                $nomR ='Anonyme';
            }else{
                $nomR =$respon['nom'];
            }
            ?>
            <li class="comment-item">
                <div class="image"><img src="<?=$asset?>/media/anonym.png" alt="Blog image" class="img-responsive"></div>
                <div class="com-content">
                    <h4><?=html_entity_decode(stripslashes($nomR))?></h4>
                    <span><i class="fa fa-circle" aria-hidden="true"></i><?=date_lettre($respon['date_reponse']);?></span>
                    <p><?=html_entity_decode(stripslashes($respon['message']))?></p>
                    <a href="javascript:void(0)" class="" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?=$com['id_comment'].'_'.$respon['id_reponse']?>" aria-expanded="false" aria-controls="flush-collapse<?=$com['id_comment'].'_'.$respon['id_reponse']?>"><i class="fa fa-reply" aria-hidden="true"></i> Répondre</a>
                </div>
                <div class="accordion accordion-flush" id="reponse<?=$com['id_comment'].'_'.$respon['id_reponse']?>">
                    <div class="accordion-item">
                        <div id="flush-collapse<?=$com['id_comment'].'_'.$respon['id_reponse']?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?=$com['id_comment'].'_'.$respon['id_reponse']?>" data-bs-parent="#reponse<?=$com['id_comment'].'_'.$respon['id_reponse']?>">
                            <div class="comment-form">
                                <form method="post" id="formRepondreR">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-xs-12">
                                            <input type="text" name="nomR" id="nomR" placeholder="Nom*" class="comment-input input-style" required>
                                            <input type="hidden" class="form-control " name="article_id" value="<?= $data['id_article'] ?>">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-12">
                                            <input type="email" name="emailR" id="emailR" placeholder="Email*" class="comment-input input-style" required>
                                            <input type="hidden" class="form-control " name="formkey" value="<?= $token ?>">
                                            <input type="hidden" class="form-control " name="com_id" id="com_id" value="<?=$com['id_comment']?>">
                                            <input type="hidden" class="form-control " name="article_id" id="article_id" value="<?=$data['id_article']?>">
                                        </div>
                                    </div>
                                    <textarea rows="3" name="messageR" id="messageR" class="comment-input input-style" placeholder="Message"></textarea>
                                    <button type="submit" name="submit" class="comment-submit btn-transparence-orange mb-3" style="text-transform: inherit !important;font-weight: inherit !important;">Répondre</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>
</li>
