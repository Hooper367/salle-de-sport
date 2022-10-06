<?php
$domaine = 'http://localhost/site_salle_de_sport/';

$index_page = $domaine;
$presentations_page = $domaine . 'presentations.php';
$contact_page = $domaine . 'contact.php';

$index_title = 'Bienvenue au studio';
$presentations_title = 'Voici nos prestations';
$contact_title = 'Nous contacter';


$current_url = explode("/", $_SERVER ["SCRIPT_NAME"]);
$current_url = end($current_url);


// if(strpos($index_page, $current_url) !== false || strpos($index_page . 'index.php', $current_url) !== false ){
//     $title = $index_title;
// } elseif(strpos ($presentations_page , $current_url)!== false) {
//     $title = $presentations_title;
// }elseif(strpos($contact_page , $current_url)!== false) {
//     $title = $contact_title;
// }



?>


<?php require 'functions.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="http://localhost/site_salle_de_sport/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <script defer src="index.js"></script> -->
    <script defer src="query.js"></script>
    <title><?=$title ?></title>
</head>
<body>
    <header class="<?php echo chooseClass() ?>">
    <nav class="navbar navbar-dark navbar-expand-lg z-index-2 position-absolute w-100">
            <div class="container-fluid">
                <div class="toggler-container">
                    <div class="toggler">
                        <div class="burger"></div>
                    </div>
                </div>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                    </div>
                    <div class="offcanvas-body align-items-center justify-content-between text-uppercase">
                        <a class="navbar-brand" href="index.php"><img class="img-logo" src="images/logo.png" alt="logo"></a>
                        <ul class="navbar-nav text-white">
                            <?php
                            $dropDown = [
                                    "parentItemClass" => "nav-item dropdown",
                                    "parentLinkClass" => "nav-link dropdown-toggle",
                                    "parentLinkName" => "les activités",
                                    "listClass" => "dropdown-menu dropdown-menu-dark",
                                    "childLinksClass" => "dropdown-item",
                                    "childLinksNames" => ["le cycling", "le training fonctionnel", "le crossfit", "personnal training - coach personnel"],
                                    "childLinksLink" => ["cycling", "fonctionnalTraining", "crossfit", "personnalTraining"]
                                ];
                                createLi(1, ["l'équipe"], ["team"]);
                            chooseHeader(4, $dropDown);
                            createLi(4, ["nos offres", "planning", "le blog", "contact"], ["offers", "planning", "blog", "contact"])
                            ?>
                        </ul>

                        <div>
                            <a class="nav-link" href=""><i class="fa-solid fa-mobile-screen-button"></i>05 59 47 84 18</a>
                        </div>

                        <ul class="navbar-nav justify-content-center flex-row">
                            <li class="nav-item p-2"><a class="nav-link" href=""><i class="fa-brands fa-square-facebook"></i></a></li>
                            <li class="nav-item p-2"><a class="nav-link" href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="nav-item p-2"><a class="nav-link" href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <?php if(chooseHeader() == 'index.php') : ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-indicators z-index-1 mt-5">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-item active">
                    <img src="images/slider/slide_1.jpg" class="d-block w-100" alt="...">
                        <div class=" w-100 text-center infos1 position-absolute text-uppercase text-white">
                        <p>2 inscriptions simultanées = un 3eme abonnement de 6mois offert !</p>
                        <button class="px-3 py-2 text-uppercase bg-transparent text-white border-white ">plus d'infos</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider/slide_2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slider/slide_3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
           
        </div>
        <?php endif ;?>
    </header>
