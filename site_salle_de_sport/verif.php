
<?php
    require 'db.php' ;
                
//CREATE 

if(isset($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['tel'],$_POST['sujet'],$_POST['message']) 
&& !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['tel']) && !empty($_POST['sujet']) && !empty($_POST['message']))
{
   // print_r($_POST);
    $nom = filter_var(trim($_POST['nom']));
    $prenom = filter_var(trim($_POST['prenom']));
    $mail = filter_var(trim($_POST['mail']));
    $tel = filter_var(trim($_POST['tel']));
    $sujet = filter_var(trim($_POST['sujet']));
    $msg = filter_var(trim($_POST['message']));
   
    
$sql = "INSERT INTO articles (prenom, nom, mail, tel, sujet, message) VALUES ('$nom','$prenom','$mail','$tel','$sujet','$msg')";
if(mysqli_query($connect, $sql)){
    header('location: message.php');
}else{
    echo 'u failded ';
}
}
    
    





