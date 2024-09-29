<?php
include_once("sidebar.php");
include_once("main.php");

if (!empty($_POST)) {
    $query = "update client set first=:first, last=:last, adresse=:adresse where Id=:id";
    $stat = $pdo->prepare($query);
    $stat->execute(["first"=>$_POST["inputFirst"],"last"=>$_POST["inputLast"],"adresse"=>$_POST["inputAdress"],"id"=>$_POST["myid"]]);
    header("Location:client.php");
}
if (!empty($_GET["id"])) {
    $query = "select * from client where Id=:id";
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
                    <input type="hidden" name="myid" value=<?php echo $row["Id"]?>/>
                    <div class="col-md-4">
                        <label for="inputFirst" class="form-label">First name</label>
                        <input type="text" class="form-control" id="inputFirst" name="inputFirst" value=<?php echo $row['first']; ?> required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputLast" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="inputLast" name="inputLast" value=<?php echo $row['last']; ?> required>
                    </div>
                    <div class="col-md-12">
                        <div class="col-8">
                            <label for="inputAdresse" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAdress" name="inputAdress" value=<?php echo $row['adresse']; ?> required>
                        </div>
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
