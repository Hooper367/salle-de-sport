<?php require 'db.php'?>

<?php 
$sql = 'SELECT * FROM articles';
$req = mysqli_query($connect, $sql);
?>
   
 <?php if($req) :?>
    <?php  foreach($req as $data): ?>
       <h1><a href="read.php/?id=<?= $data['id']?>"><?= $data['sujet'] ?> </a></h1>
        <p><?= $data['date'] ?></p>
        <p><?= $data['nom'].' '.$data['prenom'] ?></p>
        <p><?= $data['message'] ?></p>
           
            <?php endforeach ;?>
    <?php endif; ?>