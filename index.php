<?php

include('dbCon/connect.php');
include('functions/myFunctions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecomwebpage</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/CSS/style.css">



  </head>
<body>
<div class="container-fluid p-0"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <img src="./images/images.png" alt="" class="logo">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="display_all.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup>1</sup></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Total Price:100/-</a>
              </li>
            </ul>
            <form class="d-flex" action="search.php" method="get" enctype ="multipart/form-data">
              <input class="form-control mr-sm-1" type="search" name="search_data" placeholder="Search" aria-label="Search">
              <!-- <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button> -->

              <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product" >
            </form>
            </form>
            </div>
              </div>
    </nav>

    <!-- calling cart -->
    <?php
      getCart()                       
    ?>

          <nav class= "navbar navbar-expand-lg navbar-dark bg-secondary">
                <ul class="navbar-nav me-auto">

                <li class="nav-item">
                      <a class="nav-link" href="#">Welcome G</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Logout</a>
                    </li>

                </ul>
          </nav>

      <div class="bg-light">
          <h3 class ="text-center">Hidden Store</h3>
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>


      <div class="row px-3">
        <div class="col-md-10">
              <div class="row">

                      <?php
                       getProducts();                     
                      getUniqCategories();
                      getUniqBrands();
                     
                          ?>    
              </div> 
        </div>
    

          <div class="col-md-2 bg-secondary p-0">
            <ul class="navbar-nav me-auto text-center">
              <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4</a></h4>
                </li>
                  <?php
                getBrands();
                  ?>
                  </ul>

          <div class="col-md-2 bg-secondary p-0"></div>
            <ul class="navbar-nav me-auto text-center">
              <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Categories</h4</a></h4>
                </li>
              <?php
              getCategories();
                    ?>
                    </ul>


         </div>
 </div>
 </div>
            <?php
            include('includes/footer.php');
            
            ?>
            <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

          
