<?php
include_once("sidebar.php");
include_once("main.php");

if (!empty($_POST)) {
    $query = "update voiture set img=:img, name=:name, model=:model, color=:color, price=:price where IdVoiture=:id";
    $stat = $pdo->prepare($query);
    $stat->execute(["img"=>$_POST["inputImage"],"name"=>$_POST["inputCar"],"model"=>$_POST["inputModel"],"color"=>$_POST["inputColor"],"price"=>$_POST["inputPrice"],"id"=>$_POST["myid"]]);
    header("Location:voiture.php");
}
if (!empty($_GET["id"])) {
    $query = "select * from voiture where IdVoiture=:id";
    $stat = $pdo->prepare($query);
    $stat->execute(["id" => $_GET["id"]]);
    while ($row = $stat->fetch(PDO::FETCH_ASSOC)):
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/pm.png">
    <title>AutoRent</title>

</head>
        <div class="col py-3" id="content">
            <h1>Update Client</h1>
            <div class="container">
                <form class="row g-3" method="POST">
                    <input type="hidden" name="myid" value=<?php echo $row["IdVoiture"]?>/>
                    <div class="col-md-4">
                        <label for="inputCar" class="form-label">Car</label>
                        <input type="text" class="form-control" id="inputCar" name="inputCar" value=<?php echo $row['name'];?>>
                    </div>
                    <div class="col-md-4">
                        <label for="inputModel" class="form-label">Model</label>
                        <input type="text" class="form-control" id="inputModel" name="inputModel" value=<?php echo $row['model'];?>>
                    </div>
                    <div class="col-md-4">
                        <label for="inputColor" class="form-label">Color</label>
                        <input type="text" class="form-control" id="inputColor" name="inputColor" value=<?php echo $row['color'];?>>
                    </div>
                    <div class="col-md-4">
                        <label for="inputPrice" class="form-label">Price</label>
                        <input type="text" class="form-control" id="inputPrice" name="inputPrice" value=<?php echo $row['price'];?>>
                    </div>
                    <div class="col-md-4">
                        <label for="inputImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="inputImage" name="inputImage" value=<?php echo $row['img'];?>>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
<?php
endwhile;
   $stat->closeCursor();
    }
   

?>
