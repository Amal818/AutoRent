 <?php
$client=true;
include_once("sidebar.php");
include_once("connection.php");
include_once("main.php");
$count=0;
?>
<header>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/pm.png">
    <title>AutoRent</title>
<style>
  /* Dark theme styles */
  body {
    background-color: #333;
    color: #fff;
  }

  table.dataTable {
    background-color: #444;
  }

  /* Modal styles */
  .modal-content {
    background-color: #222;
    color: #f0f0f0;
    border: 2px solid;
    border-image: linear-gradient(45deg, #f06, #4a90e2) 1;
  }

  .modal-header, .modal-footer {
    border-color: #444;
  }

  .modal-header .modal-title {
    color: #f0f0f0; /* Light color for the title */
    text-align: left; /* Align text to the left */
    flex: 1; /* Ensure it takes up available space */
    background-color:#222;
  }

  /* Button styles */
  .btn-danger, .btn-info, .btn-success {
    border-radius: 4px;
  }

  /* Add more styles as needed */
</style>
</header>
<body>
  <div class="col py-3" id="content">
        <div class="container mt-3">
        <h1> Our Client </h1>
            <?php 
            $query="select * from client";
            $stat=$pdo->prepare($query);
            $stat->execute();
            //var_dump($stat->fetchAll(PDO::FETCH_ASSOC));
            
            ?>
        <table id="myTable" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>First</th>
            <th>Last</th>
            <th>Adresse</th>
            <th>Action</th>


        </tr>
    </thead>
    <tbody>
    <a href="addClient.php" class="btn btn-primary" style="float:right;margin-bottom:20px;" ><i class="bi bi-person-plus-fill"></i></a>
        <?php while ($ligne=$stat->fetch(PDO::FETCH_ASSOC)): 
            $count++;
            ?>
        <tr>
            <td><?php echo $ligne["Id"]; ?></td>
            <td><?php echo $ligne["first"]; ?></td>
            <td><?php echo $ligne["last"]; ?></td>
            <td><?php echo $ligne["adresse"]; ?></td>
            <td>
            <a href="modiClient.php?id=<?php echo $ligne["Id"] ?>" class="btn btn-success" ><i class="bi bi-pencil-square"></i> </a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $count ?>" > <i class="bi bi-trash"></i></button>
           </td>
        </tr>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?php echo $count ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Remove</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="delete.php?Id=<?php echo $ligne["Id"] ?>" class="btn btn-danger">Delete</a>
            </div>
            </div>
        </div>
        </div>
       <?php endwhile; ?>
       
    </tbody>
</table>
</div>
        </div>
        </body>