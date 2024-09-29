<?php
$voiture = true;
include_once("sidebar.php");
include_once("connection.php");
include_once("main.php");
$count = 0;
?>
<header>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/pm.png">
    <title>AutoRent</title>
</head>
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
    color: #f0f0f0;
    text-align: left;
    flex: 1;
    background-color:#222;
  }

  /* Button styles */
  .btn-danger, .btn-info, .btn-success {
    border-radius: 4px;
  }

  /* Image styles */
  .img {
    width: 70px;
    height: 40px;
    transition: transform 0.3s ease-in-out;
    transform-origin: center;
    cursor: pointer;
  }

  .img:hover {
    transform: scale(5);
  }

  /* Modal image styles */
  .img-modal {
    width: 80%;
    height: auto;
    transition: transform 0.3s ease-in-out;
  }

  /* Hover effect on the image inside the modal */
  .img-modal:hover {
    transform: scale(1.1); /* Slight zoom effect on hover */
  }
</style>
</header>
<div class="col py-3" id="content">
<div class="container mt-3">
    <h1>Our Cars</h1>
    <?php 
    $query = "select * from voiture";
    $stat = $pdo->prepare($query);
    $stat->execute();
    ?>
    <table id="myTable" class="display dataTable dt-dark">
    <thead>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Car Name</th>
        <th>Model</th>
        <th>Color</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <a href="addVoiture.php" class="btn btn-primary" style="float:right; margin-bottom:20px;">
        <i class="bi bi-plus-square-fill"></i>
    </a>
    <?php 
    $count = 0;
    while ($ligne = $stat->fetch(PDO::FETCH_ASSOC)): 
        $count++;
    ?>
    <tr>
        <td><?php echo $ligne["IdVoiture"]; ?></td>
        <td><img src="img/<?php echo $ligne["img"]; ?>" alt="Car Image" class="img" data-bs-toggle="modal" data-bs-target="#imageModal<?php echo $count ?>"></td>
        <td><?php echo $ligne["name"]; ?></td>
        <td><?php echo $ligne["model"]; ?></td>
        <td><?php echo $ligne["color"]; ?></td>
        <td><?php echo $ligne["price"]; ?></td>
        <td>
            <a href="modiVoiture.php?id=<?php echo $ligne["IdVoiture"] ?>" class="btn btn-success">
                <i class="bi bi-pencil-square"></i>
            </a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $count ?>">
                <i class="bi bi-trash"></i>
            </button>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailsModal<?php echo $count ?>">
                <i class="bi bi-info-circle-fill" style="color:white;"></i>
            </button>
        </td>
    </tr>

    <!-- Remove Modal -->
    <div class="modal fade" id="exampleModal<?php echo $count ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Remove</h5>
                    <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="deleteV.php?id=<?php echo $ligne["IdVoiture"] ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Details Modal -->
    <div class="modal fade" id="detailsModal<?php echo $count ?>" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Car Details</h5>
                    <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <img src="img/<?php echo $ligne["img"]; ?>" alt="Car Image" class="img-fluid">
                        </div>
                        <div class="col-md-5 my-4">
                            <p><strong>Name:</strong> <?php echo $ligne["name"]; ?></p>
                            <p><strong>Model:</strong> <?php echo $ligne["model"]; ?></p>
                            <p><strong>Color:</strong> <?php echo $ligne["color"]; ?></p>
                            <p><strong>Price:</strong> <?php echo $ligne["price"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal<?php echo $count ?>" tabindex="-1" aria-labelledby="imageModalLabel<?php echo $count ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="img/<?php echo $ligne["img"]; ?>" alt="Car Image" class="img-fluid img-modal">
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
    </tbody>
    </table>
</div>
</div>
