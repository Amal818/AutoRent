<?php
include_once("sidebar.php");
include_once("main.php");

if(!empty($_POST["inputCar"]) && !empty($_POST["inputModel"]) && !empty($_POST["inputColor"])&& !empty($_POST["inputPrice"])&& !empty($_POST["inputImage"])){
    $query="insert into voiture (name,model,color,price,img) values(:name,:model,:color,:price,:img)";
    $stat=$pdo->prepare($query);
    $stat->execute(["name"=>$_POST["inputCar"],"model"=>$_POST["inputModel"],"color"=>$_POST["inputColor"],"price"=>$_POST["inputPrice"],"img"=>$_POST["inputImage"]]);
    $stat->closeCursor();
    header("Location:voiture.php");
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/pm.png">
    <title>AutoRent</title>

</head>
<div class="col py-3" id="content">
    <h1>Add Car</h1>
    <div class="container">
        <form class="row g-3" method="POST">
           <div class="col-md-4">
            <label for="inputCar" class="form-label">Car</label>
            <input type="text" class="form-control" id="inputCar" name="inputCar">
        </div>
        <div class="col-md-4">
            <label for="inputModel" class="form-label">Model</label>
            <input type="text" class="form-control" id="inputModel" name="inputModel">
        </div>
        <div class="col-md-4">
            <label for="inputColor" class="form-label">Color</label>
            <input type="text" class="form-control" id="inputColor" name="inputColor">
        </div> 
        <div class="col-md-4">
            <label for="inputPrice" class="form-label">Price</label>
            <input type="text" class="form-control" id="inputPrice" name="inputPrice">
        </div> 
        <div class="col-md-4">
            <label for="inputImage" class="form-label">Image</label>
            <input type="file" class="form-control" id="inputImage" name="inputImage">
        </div> 
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</div>

</div>
</main>
