<?php require 'header.php' ?>
    

<main>
    <section>
        <div class="container-fluid w-75 m-auto pt-4">
            <div class="row">
                    <div class="col-lg-3">
                        <h3 class="text-uppercase">nos coordonnées</h3>
                        <img src="images/bg_titre.jpg" alt="">
                        <p class="fw-bold my-0">Studio Sport & Coaching</p>
                        <p class="my-0">01 Allée Marie Politzer</p>
                        <p class="my-0">64200 Biarritz</p>
                    
                        <p class="fw-bold my-0 pt-3">Téléphone</p>
                        <p class="my-0">05 59 47 84 18</p>
                    
                        <p class="fw-bold my-0 pt-3">Horraires</p>
                        <p class="my-0">Du lundi au vendredi</p>
                        <p class="my-0">de 8h à 14h, de 16h à 21h</p>
                        <p class="my-0">Le samedi</p>
                        <p class="my-0">de 10h à 13h</p>
                    
                        <p class="fw-bold my-0 pt-3">Email</p>
                        <p class="my-0">contact (at) studioniarritz.com</p>
                        <p class="my-0">ou via ce formulaire</p>
                    </div>
             
                    <div class="col-lg-9 ">
                    <h3 class="text-uppercase">formulaires de contact</h3>
                    <img src="images/bg_titre.jpg" alt="">
                    <form id="form" action="message.php" method="POST">
                    <div class="row">

                            <?php 
                                ?>
                            <div class="col-lg-7 col-sm-7">
                                <input class="form-control" id="nom" class="p-2 w-100 " name="nom" type="text " placeholder="VOTRE NOM">
                               
                            </div>
                            <div class="col-lg-5 col-sm-5">
                                <input class="form-control" id="prenom" class="p-2 w-100  " name="prenom"  type="text" placeholder="VOTRE PRENOM">
                              
                            </div>
                            <div class="row pe-0 mt-3">
                                <div class="col-lg-4 col-sm-4 pe-0 ">
                                    <input class="form-control" id="tel" class="p-2 w-100 " name="tel"  type="text" placeholder="VOTRE TELEPHONE">
                                   
                                </div>
                                <div class="col-lg-8 col-sm-8 pe-0">
                                    <input class="form-control" id="mail" class="p-2 w-100 " name="mail"  type="text" placeholder="VOTRE EMAIL">
                               
                                </div>
                            </div>
                             <div class="row pe-0 mt-3">
                                    <div class="col-12 pe-0">
                                        <input class="form-control" id="sujet" class="p-2 w-100  " name="sujet" type="text" placeholder="SUJET">
                                     
                                    </div>
                                </div>
                                <div class="row pe-0 mt-3">
                                <div class="col-12 pe-0">
                                    <input placeholder="" type="text"  name="message" class="w-100 px-2 form-control"  id="message"></input>
                                  
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <button name="send" class="text-uppercase p-2 px-5 bg-gold text-white border-0 mb-5">envoyer</button>
                                    </div>
                                </div>

                        </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <img class="w-100" src="images/map.png" alt="">
    </section>
</main>





<?php require 'footer.php' ?>