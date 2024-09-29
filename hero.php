<?php
include_once("connection.php");
include_once("main.php");
$count=0;
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" type="x-icon" href="img/pm.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
    <title>AutoRent</title>

<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/k.png");
  height:100vh;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
*,
*::after,
*::before{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

.html{
    font-size: 62.5%;
}

.navbar input[type="checkbox"],
.navbar .hamburger-lines{
    display: none;
}

.container{
    max-width: 1200px;
    width: 90%;
    margin: auto;
}

.navbar{
    width: 100%;
    color: #fff;
    opacity: 0.85;
    z-index: 100;
    font-family: 'Times New Roman', Times, serif;
}

.navbar-container{
    display: flex;
    justify-content: space-between;
    height: 64px;
    align-items: center;
}

.menu-items{
    order: 2;
    display: flex;
}
.logo{
    order: 1;
    font-size: 2.3rem;
}

.menu-items li{
    list-style: none;
    margin-left: 1.5rem;
    font-size: 1.3rem;
}

.navbar a{
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease-in-out;
}

.navbar a:hover{
    color: #117964;
}

@media (max-width: 768px){
    .navbar{
        opacity: 0.95;
    }

    .navbar-container input[type="checkbox"],
    .navbar-container .hamburger-lines{
        display: block;
    }

    .navbar-container{
        display: block;
        position: relative;
        height: 64px;
    }

    .navbar-container input[type="checkbox"]{
        position: absolute;
        display: block;
        height: 32px;
        width: 30px;
        top: 20px;
        left: 20px;
        z-index: 5;
        opacity: 0;
        cursor: pointer;
    }

    .navbar-container .hamburger-lines{
        display: block;
        height: 28px;
        width: 35px;
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .navbar-container .hamburger-lines .line{
        display: block;
        height: 4px;
        width: 100%;
        border-radius: 10px;
        background: #333;
    }
    
    .navbar-container .hamburger-lines .line1{
        transform-origin: 0% 0%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar-container .hamburger-lines .line2{
        transition: transform 0.2s ease-in-out;
    }

    .navbar-container .hamburger-lines .line3{
        transform-origin: 0% 100%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar .menu-items{
        padding-top: 100px;
        background: #000;
        height: 100vh;
        width: 200px;
        transform: translate(-150%);
        display: flex;
        flex-direction: column;
        margin-left: -50px;
        padding-left: 40px;
        transition: transform 0.5s ease-in-out;
        box-shadow:  5px 0px 10px 0px #aaa;
    }

    .navbar .menu-items li{
        margin-bottom: 1.8rem;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .logo{
        position: absolute;
        top: 10px;
        right: 15px;
        color: #fff;
        font-size: 2.5rem;
        font-family:'Times New Roman', Times, serif;
    }

    .navbar-container input[type="checkbox"]:checked ~ .menu-items{
        transform: translateX(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1{
        transform: rotate(45deg);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2{
        transform: scaleY(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3{
        transform: rotate(-45deg);
    }

}

@media (max-width: 500px){
    .navbar-container input[type="checkbox"]:checked ~ .logo{
        display: none;
    }
}



:root {
  --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
}

body {
  background: #111 !important;
}

.card {
  background: #222;
  border: 1px solid #dd2476;
  color: rgba(250, 250, 250, 0.8);
  margin-bottom: 2rem;
}

.btn {
  border: 2px solid;
  border-image-slice: 1;
  padding:10px 30px;
  background: var(--gradient) !important;
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
  border-image-source:  var(--gradient) !important; 
  text-decoration: none;
  transition: all .2s ease;
}

.btn:hover, .btn:focus {
      background: var(--gradient) !important;
  -webkit-background-clip: none !important;
  -webkit-text-fill-color: #000 !important;
  border: 2px solid #000 !important; 
  box-shadow: #222 1px 0 10px;
  text-decoration: underline;

}
.container{
    margin-left:110px;
}


/* Modal styling */
/* Enhanced Dark Theme Modal Styling */
.modal-content {
  background-color: #333;
  color: #f8f9fa;
  border-radius: 10px;
  overflow: hidden;
  border: none;
}

.modal-header {
  background-color: #222;
  border-bottom: 1px solid #444;
}

.modal-title {
  font-size: 1.5rem;
  font-weight: bold;
  color: #f8f9fa;
}

.modal-body {
  padding: 20px;
  background-color: #333;
  color: #f8f9fa;
}

.modal-car-title {
  margin-bottom: 1rem;
  color: #f8f9fa;
}

#car-details p {
  margin-bottom: 0.5rem;
  font-size: 1rem;
}

#car-image {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.3);
}

.form-group label {
  font-weight: bold;
  color: #f8f9fa;
}

.form-group small {
  font-size: 0.875rem;
  color: #f8f9fa;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #004085;
}

.btn-secondary {
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:hover {
  background-color: #5a6268;
  border-color: #545b62;
}


</style>
</head>
<body>

<div class="hero-image">
<nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="hero.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="form.php">Dashbord</a></li>
              
            </ul>
            <h1 class="logo">AutoRent</h1>
        </div>
    </nav>
  <div class="hero-text">
    <h1 style="font-size:50px">Drive the Road You Want</h1>
    <p>Freedom to Roam</p>
    <button>Rent now</button>
  </div>
</div>


<?php 
            $query="select * from voiture";
            $stat=$pdo->prepare($query);
            $stat->execute();
            //var_dump($stat->fetchAll(PDO::FETCH_ASSOC));
            
            ?>
<?php
// Define the number of cars to display per page
$carsPerPage = 6;

// Get the current page number from the URL or set it to 1 if not provided
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Calculate the offset based on the current page and cars per page
$offset = ($page - 1) * $carsPerPage;

// Fetch only the necessary rows using LIMIT and OFFSET
$query = "SELECT * FROM voiture LIMIT :offset, :limit";
$stat = $pdo->prepare($query);
$stat->bindParam(':offset', $offset, PDO::PARAM_INT);
$stat->bindParam(':limit', $carsPerPage, PDO::PARAM_INT);
$stat->execute();

// Display the cars
?>

<div class="container ml-5 mt-5">
  <div class="row">
  <?php while ($ligne=$stat->fetch(PDO::FETCH_ASSOC)): 
            $count++;
            ?>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
  <img src="img/<?php echo $ligne["img"]; ?>" class="card-img-top" alt="..." style="height: 10rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $ligne["name"]; ?> </h5>
    <div class="d-flex justify-content-between align-items-start">
        <h6 class="card-subtitle mb-2 text-light"><?php echo $ligne["model"]; ?> </h6>
        <div class="price-container text-right">
              <b><p class="card-text text-danger "><?php echo $ligne["price"]; ?> MAD</p></b>
            </div>
      </div>
        <p class="card-text"><?php echo $ligne["color"]; ?></p>
       
        <a href="#" class="btn mr-2" data-bs-toggle="modal" data-bs-target="#rentModal" 
   onclick="showRentModal('<?php echo $ligne["name"]; ?>', '<?php echo $ligne["model"]; ?>', 
   '<?php echo $ligne["price"]; ?>', 
   '<?php echo $ligne["color"]; ?>')">
   <i class="fas fa-link"></i> Rent
</a>



  </div>
  </div>
    </div>    
  <?php endwhile; ?>
  </div>
    
</div>

<div class="container mt-3 d-flex justify-content-center">
    <ul class="pagination">
        <?php
        // Calculate the total number of pages
        $totalCars = $pdo->query("SELECT COUNT(*) FROM voiture")->fetchColumn();
        $totalPages = ceil($totalCars / $carsPerPage);

        // Display pagination links
        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li class='page-item " . ($i == $page ? 'active' : '') . "'><a class='page-link' href='?page=$i'>$i</a></li>";
        }
        ?>
    </ul>
</div>


    <footer class="text-center bg-dark text-light mt-3">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-2">
    <!-- Your social media icons go here -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-3">
      <!-- Grid row -->
      <div class="row mt-2">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-3">
          <!-- Content -->
          <h5 class="text-uppercase fw-bold mb-4"  style="font-family: 'Roboto', 'Times New Roman', Times, serif; background: linear-gradient(to right, purple,#dd2476); -webkit-background-clip: text; color: transparent;">
            <i class="fas fa-gem me-2" ></i>AutoRent
          </h5>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-3">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="hero.php" class="text-reset">Home</a>
          </p>
          <p>
            <a href="#!" class="text-reset">About</a>
          </p>
          <p>
            <a href="form.php" class="text-reset">Dashbord</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-3">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact :</h6>
          <p><i class="fas fa-home me-2"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-2"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-2"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-2"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-3">
          <!-- Follow us links -->
          <h6 class="text-uppercase fw-bold mb-4">Follow us :</h6>
          <a href="" class="me-3 text-reset"><i class="fab fa-facebook-f"></i></a>
          <a href="" class="me-3 text-reset"><i class="fab fa-twitter"></i></a>
          <a href="" class="me-3 text-reset"><i class="fab fa-instagram"></i></a>
          <a href="" class="me-3 text-reset"><i class="fab fa-linkedin"></i></a>
        </div>

      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-2 py-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">AutoRent.com</a>
  </div>
  <!-- Copyright -->
</footer>

   
<!-- Enhanced Modal -->
<!-- Enhanced Modal -->
<div class="modal fade" id="rentModal" tabindex="-1" aria-labelledby="rentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h5 class="modal-title" id="rentModalLabel">Rent a Car</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-dark text-light">
        <div class="row">
          <div class="col-md-6">
            <div id="car-details" class="mb-3">
              <h4 class="modal-car-title">Car Details</h4>
              <p><strong>Make:</strong> <span id="car-make">Make</span></p>
              <p><strong>Model:</strong> <span id="car-model">Model</span></p>
              <p><strong>Color:</strong> <span id="car-color">Color</span></p>
              <p><strong>Price per Day:</strong> <span id="car-price">0 MAD</span></p>
            </div>
            </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="rental-days">Number of Days</label>
              <input type="number" id="rental-days" class="form-control" value="1" min="1">
              <small id="day-error" class="form-text text-danger d-none">Please enter a valid number of days.</small>
            </div>
            <div class="mt-3">
              <p>Total Price: <b><span id="total-price">0</span> MAD</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-dark text-light">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="confirm-rent">Proceed to Rent</button>
      </div>
    </div>
  </div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-light">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmModalLabel">Confirm Rental</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="confirmMessage">Are you sure you want to rent this car?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="confirmRentalBtn">Confirm</button>
      </div>
    </div>
  </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-light">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">Rental Successful</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="successMessage">You have successfully rented the car.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<script>
// Global variables to store car details
let selectedCarName = '';
let selectedCarModel = '';
let selectedCarPrice = 0;
let selectedCarColor = '';
let totalPrice = 0;

function showRentModal(name, model, price, color) {
  selectedCarName = name;
  selectedCarModel = model;
  selectedCarPrice = parseFloat(price);
  selectedCarColor = color;

  document.getElementById('car-make').innerText = selectedCarName;
  document.getElementById('car-model').innerText = selectedCarModel;
  document.getElementById('car-color').innerText = selectedCarColor;
  document.getElementById('car-price').innerText = selectedCarPrice + " MAD";
 
  const rentalDaysInput = document.getElementById('rental-days');
  const totalPriceElement = document.getElementById('total-price');
  const dayError = document.getElementById('day-error');

  // Reset rental days input and total price
  rentalDaysInput.value = 1;
  totalPrice = selectedCarPrice;
  totalPriceElement.innerText = totalPrice;

  rentalDaysInput.oninput = function() {
    const days = this.value;
    if (days < 1) {
      dayError.classList.remove('d-none');
      totalPriceElement.innerText = 0;
    } else {
      dayError.classList.add('d-none');
      totalPrice = days * selectedCarPrice;
      totalPriceElement.innerText = totalPrice;
    }
  };
}

// Proceed to Rent button click handler
document.getElementById('confirm-rent').onclick = function() {
  const rentalDaysInput = document.getElementById('rental-days');
  const totalPriceElement = document.getElementById('total-price');
  const dayError = document.getElementById('day-error');

  const rentalDays = rentalDaysInput.value;
  if (rentalDays < 1) {
    dayError.classList.remove('d-none');
  } else {
    dayError.classList.add('d-none');
    // Set the confirmation message
    const confirmMessage = document.getElementById('confirmMessage');
    confirmMessage.innerText = `Confirm to rent the ${selectedCarName} for ${rentalDays} days at ${totalPriceElement.innerText} MAD?`;

    // Hide the Rent Modal
    var rentModalEl = document.getElementById('rentModal');
    var rentModal = bootstrap.Modal.getInstance(rentModalEl);
    rentModal.hide();
    // Show the confirmation modal
    var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
    confirmModal.show();
  }
};

// Confirm Rental button click handler
document.getElementById('confirmRentalBtn').onclick = function() {
  // Hide the confirmation modal
  var confirmModalEl = document.getElementById('confirmModal');
  var confirmModal = bootstrap.Modal.getInstance(confirmModalEl);
  confirmModal.hide();

  // Show the success modal
  const successMessage = document.getElementById('successMessage');
  successMessage.innerText = `You have successfully rented the ${selectedCarName} for ${document.getElementById('rental-days').value} days.`;

  var successModal = new bootstrap.Modal(document.getElementById('successModal'));
  successModal.show();

  // Optionally, you can close the rentModal
  var rentModalEl = document.getElementById('rentModal');
  var rentModal = bootstrap.Modal.getInstance(rentModalEl);
  rentModal.hide();
};
</script>


</body>
</html>
