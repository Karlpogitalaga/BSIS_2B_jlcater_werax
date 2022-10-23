<?php
session_start()
    
    include("connection.php");
    include("function.php");
    
    $user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>websitewbootstrap group 7</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    </head>
<body background="images/burger-fries-rings-coke.jpg">
    <div class="full-page">
        <div class="navbar">
            <div>
                <header>
                    <h1 class="text-dark-bold">Cherry's Hut</h1>
                    <h3 class="text-dark">Hot and Delicious!</h3>
                </header>
            </div>
            <nav>
           <ul id="Menu Items" style="font-family: monospace">
                    <li><a href="#">Home</a></li>
                    <li><a href="About us.html">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="login.php">LogIn</a></li>
               
              
               <form class="d-inline-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Search</button>
                 </form> <div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
               </div>
     </div>
               
                </ul>
                </nav>
        </div>
        
        <br>
        
        <div class="row h-80">
            <div class="col-8">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                               <img src="images/pizza.jpg" alt="card image" class= "car-img-top rounded-circle" style="width: 100%">
                                <h1 class="card-title">Pizza</h1>
                                <p class="card-caption">Kadiit kang toppings</p>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                               <img src="images/burgir.jfif" alt="" class="card-img-top rounded-circle" style="width: 100%">
                                <h1 class="card-title">Burger</h1>
                                <p class="card-caption">Unang kagat tinapay lahat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                               <img src="images/AdobeStock_335944840-scaled.jpeg" alt="" class="card-img-top rounded-circle">
                                <h1 class="card-title">French Fries</h1>
                                <p class="card-caption">Humil na tas maaskadon pa</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        

</body>
<script src="js/bootstrap.js"></script>
</html>