<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="x-icon" href="img/pm.png">
    <title>AutoRent</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
   <style>
     body {
    background-color: #333;
    color: #fff;
  }

  table.dataTable {
    background-color: #444;
  }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 bg text-light min-vh-100">
        <a href="hero.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-light text-decoration-none">
    <span class="fs-5 d-none d-sm-inline">
        <h1 style="font-family: 'Roboto', 'Times New Roman', Times, serif; background: linear-gradient(to right, black, purple); -webkit-background-clip: text; color: transparent;">
        AutoRent
        </h1>
    </span>
</a>


                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center text-light align-items-sm-start" id="menu">
                    <li>
                        <a href="form.php" class="nav-link px-0 align-middle text-light ">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                    </li>
                    <li>
                        <a href="client.php" class="nav-link px-0 align-middle text-light ">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">List Client</span></a>
                    </li>
                    <li>
                        <a href="voiture.php" class="nav-link px-0 align-middle text-light ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">List voiture</span></a>
                    </li>
                    
                </ul>
        </nav>
    </div>
</div>
