<?php
session_start();
var_dump($_SESSION);
require 'header.php';

$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$tel = $_SESSION['tel'];
$mail = $_SESSION['mail'];
$sujet = $_SESSION['sujet'];
$msg = $_SESSION['msg'];

?>

<div>
            <form class="p-5 mt-5" action="update.php" method="POST">
                <div class="col-lg-7 col-sm-7">
                    <input class="p-2 w-100 bg-light" name="nom" type="text " placeholder="VOTRE NOM" value="<?= $nom ?>"></div>
                    <div class="col-lg-5 col-sm-5">
                        <input class="p-2 w-100 bg-light " name="prenom"  type="text" placeholder="VOTRE PRENOM"  value="<?= $prenom ?>"></div>
                        <div class="row pe-0 mt-3">
                            <div class="col-lg-4 col-sm-4 pe-0 ">
                                <input class="p-2 w-100 bg-light" name="tel"  type="text" placeholder="VOTRE TELEPHONE"  value="<?= $tel ?>"> </div>
                                <div class="col-lg-8 col-sm-8 pe-0">
                                    <input class="p-2 w-100 bg-light" name="mail"  type="text" placeholder="VOTRE EMAIL"  value="<?= $mail ?>"> </div>
                                </div>
                             <div class="row pe-0 mt-3">
                                    <div class="col-12 pe-0">
                                        <input class="p-2 w-100 bg-light " name="sujet" type="text" placeholder="SUJET"  value="<?= $sujet ?>"></div>
                                    </div>
                                    <div class="row pe-0 mt-3">
                                        <div class="col-12 pe-0">
                                            <textarea placeholder="VOTRE MESSAGE" name="message" class="w-100 px-2 bg-light" name="" id="" cols="30" rows="10" ><?= $msg ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <button class="text-uppercase p-2 px-5 bg-gold text-white border-0 mb-5">envoyer</button>
                                        </form>
                                    </div>