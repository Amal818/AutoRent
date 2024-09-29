<?php 
include_once("main.php");

if(!empty($_GET["Id"])){
    $query="delete from client where Id=:Id";
    $stat1=$pdo->prepare($query);
    $stat1->execute(["Id"=>$_GET["Id"]]);
    $stat1->closeCursor();
    header("Location:client.php");
}


?>