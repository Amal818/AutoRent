<?php 
include_once("main.php");

if(!empty($_GET["id"])){
    $query="delete from voiture where IdVoiture=:id";
    $stat1=$pdo->prepare($query);
    $stat1->execute(["id"=>$_GET["id"]]);
    $stat1->closeCursor();
    header("Location:voiture.php");
}

?>