<?php
function CreateLi(int $count, array $titre, array $liens, array $LiensClasses = ["nav-link"], array $Liclasses = ["nav-item"] ){
   
    $LiensClasse = implode(' ',$LiensClasses);
    $Liclasse = implode(' ',$Liclasses);
    for ($i=0; $i < $count ; $i++) { 
        echo <<<HTML
    
        <li class=$Liclasse>
            
            <a href="$liens[$i].php" class=$LiensClasse>$titre[$i]</a>
        
        </li>
    
    HTML;
       
    }
}

// 1er param le nombre de fois que ma fonc soit iterer 2 et 3eme param valeur par defaut
function createDown(int $count,array $DropTitres, array $Classe = ["dropdown-menu"], array $classeA = ["dropdown-item"] ){

// j'implode = Rassembleer les éléments d'un tableau en une chaîne
$mainClasse = implode(' ', $Classe);
$dropA = implode(' ', $classeA);
// heredocs j'ecris de l'HTML dans le php
    echo <<<HTML

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">$DropTitres[Menu]</a>
                <ul class=$mainClasse>
 HTML;  
// je parcours ma fonction creer avant de base j'en demande un li avec la boucle for j'en crerai autant que le param rentrer dans le header (4)
          CreateLi($count, $DropTitres["Down"], $DropTitres["liens"],$classeA);    
      
         echo <<<HTML
                </ul>
            </li>

HTML;
 }      

function Test(int $count , array $divImg){
$Img = $divImg["src"];
$like = $divImg["like"];
$comment = $divImg["comment"];
    for ($i=0; $i <$count ; $i++) {
        echo <<<HTML
                    <div class="$divImg[col]">
                                
                            <img  src="images/coach/$Img[$i].jpg" class="$divImg[imgClasses]" alt="">
                                
                                <div class="$divImg[divI] ">
                                    
                                    <i class="$divImg[firstI]">$like[$i]</i>
                                    
                                        <i class="$divImg[secondI]">$comment[$i]</i>
                               
                                </div>
                     </div>
        
HTML;
        
    }

}



function chooseClass(){
    $class = "";
    $last = chooseHeader();
    
    if($last == 'presentations.php'){
        $class = 'header-presentation';

    }
   elseif($last == 'contact.php'){
        $class = 'header-contact';

    }
    return $class;
}

function chooseHeader(){
    $url = explode("/", $_SERVER['SCRIPT_NAME']);
    
    $last= end($url); 
    
    return $last;
}

// function chooseHeader(){
//     $class = "";
//     $url = explode("/",$_SERVER["SCRIPT_NAME"]);
//     if($url[count($url)-1] == 'presentations.php'){
//         $class = "header-presentation";
//     }
//     elseif($url[count($url)-1] == 'contact.php'){
//         $class = "header-contact";

//     }
// }
// ?>


