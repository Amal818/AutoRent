<?php
$index = true;
include_once("sidebar.php");
include_once("main.php");

// Query to get the total number of clients
$queryClient = "SELECT COUNT(*) AS totalClient FROM client";
$statClient = $pdo->prepare($queryClient);
$statClient->execute();
$resultClient = $statClient->fetch(PDO::FETCH_ASSOC);

// Query to get the total number of cars
$queryCars = "SELECT COUNT(*) AS totalCars FROM voiture";
$statCars = $pdo->prepare($queryCars);
$statCars->execute();
$resultCars = $statCars->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/pm.png">
    <title>AutoRent</title>

</head>

<body>

    <div class="col py-3" id="content">
        <div class="container">
            <div class="row dow">
            <div class="col-md-3 d t py-3">
    <div class="d-flex justify-content-between align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
</svg>
        <h2 class="text-right"><?php echo $resultClient['totalClient']; ?></h2>
    </div>
    <h3 class="mt-3">Total clients</h3>
</div>

<div class="col-md-3 d l py-3">
    <div class="d-flex justify-content-between align-items-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
            <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
        </svg>
        <h2 class="text-right"><?php echo $resultCars['totalCars']; ?></h2>
    </div>
    <h3 class="mt-3">Total cars</h3>
</div>
<div class="col-md-3 d pr py-3">
    <div class="d-flex justify-content-between align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
</svg>
        <h2 class="text-right"><?php echo $resultClient['totalClient']; ?></h2>
    </div>
    <h3 class="mt-3">New clients</h3>
</div>
        </div>
            </div>

            <div class="GradientBorder">
               <div id="carouselExample" class="carousel slide col-md-12">
                    <div class="carousel-inner">
                        <?php
                        $active = true;
                        // Fetch the three latest cars for carousel items
                        $queryCarousel = "SELECT * FROM voiture ORDER BY IdVoiture DESC LIMIT 3";
                        $statCarousel = $pdo->prepare($queryCarousel);
                        $statCarousel->execute();

                        while ($ligne = $statCarousel->fetch(PDO::FETCH_ASSOC)) :
                        ?>
                            <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                                <div class="row">
                                    <div class="col-md-7">
                                        <img class="image" src="img/<?php echo $ligne["img"]; ?>" alt="image">
                                    </div>
                                    <div class="col-md-5 mt-3 text-dark">
                                        <h5>Name of car :<?php echo $ligne["name"]; ?></h5><br>
                                        <h5>Model of car :<?php echo $ligne["model"]; ?></h5><br>
                                        <h5>Color of car :<?php echo $ligne["color"]; ?></h5><br>
                                        <h5>Price of car :<?php echo $ligne["price"]; ?> MAD</h5><br>
                                    </div>
                                </div>
                            </div>

                        <?php
                            $active = false;
                        endwhile;
                        ?>
                    </div>
               
          

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
                    </div>
    </div>

</body>

</html>
