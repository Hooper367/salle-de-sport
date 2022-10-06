<?php session_start(); 
$id = $_SESSION['id'];
 require 'header.php';
 require 'db.php';


if(isset($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['tel'],$_POST['sujet'],$_POST['message']) 
&& !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['tel']) && !empty($_POST['sujet']) && !empty($_POST['message']))
{
    
    $nom = filter_var(trim($_POST['nom']));
    $prenom = filter_var(trim($_POST['prenom']));
    $mail = filter_var(trim($_POST['mail']));
    $tel = filter_var(trim($_POST['tel']));
    $sujet = filter_var(trim($_POST['sujet']));
    $msg = filter_var(trim($_POST['message']));
    
    $sql = "UPDATE articles SET nom = '$nom',prenom = '$prenom',mail = '$mail',tel = '$tel',sujet = '$sujet',message = '$msg' WHERE id = $id"; 
    if(mysqli_query($connect, $sql)){
        header("location: read.php/?id=$id");
    }else{
        echo 'u failded ';
    }
}

   ?>



    
                                   
                                    

    



