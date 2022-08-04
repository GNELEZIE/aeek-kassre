<?php

require_once 'layout/header.php';
?>


<section class="contact padding-120 bg-bleu-transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="contact-form ts-box">
                    <h3 class="text-center">Inscription</h3>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a href="javascript:void(0);" class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Email</a>
                            <a href="javascript:void(0);" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Téléphone</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <form method="post" class="text-center pt-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="name" placeholder="Nom & Prénom" class="contact-input input-styles">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" name="email" placeholder="Email" class="contact-input input-styles">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="password" name="password" placeholder="Mot de passe" class="contact-input input-styles">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="password" name="passwordC" placeholder="Confirmer mot de passe" class="contact-input input-styles">
                                    </div>
                                </div>
                                <button class="btn-transparence-orange">S'inscrire maintenant</button>
                            </form>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

















<?php
require_once 'layout/footer.php';
?>
