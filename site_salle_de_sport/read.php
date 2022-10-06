<?php require 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM articles WHERE id = $id";
$req = mysqli_query($connect,$sql);
session_start();
?>

<?php if($req) : ?>
    <?php foreach($req as $data) :
        $_SESSION['id'] = $data['id'];
        $_SESSION['nom'] = $data['nom'];
        $_SESSION['prenom'] = $data['prenom'];
        $_SESSION['tel'] = $data['tel'];
        $_SESSION['mail']=   $data['mail'];
        $_SESSION['sujet']=  $data['sujet'];
        $_SESSION['msg'] =  $data['message'];
?>
    <div>
        <h1><?= $data['sujet']?></h1>
        <h4>Créé le : <?= $data['date']?></h4>
        <p>Auteur de l'article : <?= $data['nom'].' '.$data['prenom']?></p>
        <p><?= $data['message']?></p>
        <p><?= $data['mail']?></p>
        <p><?= $data['tel']?></p>
        <a href="/site_salle_de_sport/modify.php">Modifier</a>
        <a href="/site_salle_de_sport/delete.php">delete</a>
    </div>
    
    <?php endforeach ;?>

<?php endif ; ?>

