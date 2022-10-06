<?php 
require 'db.php';
session_start();
$id = $_SESSION['id'];
$sql = "DELETE FROM articles WHERE id = $id";
$req = mysqli_query($connect,$sql);


if($req){
    header("location: message.php");
    

}else {
    echo 'u failed of the top ';
}




?>