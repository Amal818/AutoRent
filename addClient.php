<?php
include_once("sidebar.php");
include_once("main.php");

if(!empty($_POST["inputFirst"]) && !empty($_POST["inputLast"]) && !empty($_POST["inputAdress"])){
    $query="insert into client (first,last,adresse) values(:first,:last,:adresse)";
    $stat=$pdo->prepare($query);
    $stat->execute(["first"=>$_POST["inputFirst"],"last"=>$_POST["inputLast"],"adresse"=>$_POST["inputAdress"]]);
    $stat->closeCursor();
    header("Location:client.php");
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/pm.png">
    <title>AutoRent</title>

</head>
<div class="col py-3" id="content">
    <h1>Add Client</h1>
    <div class="container">
        <form class="row g-3" method="POST">
            <div class="col-md-4">
                <label for="inputFirst" class="form-label">First name</label>
                <input type="text" class="form-control" id="inputFirst" name="inputFirst" required>
            </div>
            <div class="col-md-4">
                <label for="inputLast" class="form-label">Last name</label>
                <input type="text" class="form-control" id="inputLast" name="inputLast" required>
            </div>
            <div class="col-md-12">
            <div class="col-8">
                <label for="inputAdresse" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAdress" name="inputAdress" required>
            </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</div>

</div>
</main>
