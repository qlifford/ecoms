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
    <title>Ecomwebpage | Cart</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/CSS/style.css">

    <style>
   .cart_img
{
  width: 50px;
  height: 50px;
  object-fit: contain;
}


    </style>


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
                <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart text-black" aria-hidden="true"></i><sup class="text-danger"><?php getCartCount(); ?></sup></a>
              </li>
            
            </ul>
            
            </div>
              </div>
    </nav>

    <!-- calling cart -->
    <?php
      getCart();                       
    ?>

          <nav class= "navbar navbar-expand-lg navbar-dark bg-secondary">
                <ul class="navbar-nav me-auto">

                <li class="nav-item">
                      <a class="nav-link" href="#">Welcome Guest</a>
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

      <div class="container">
        <div class="row">
            <table class="table table-striped table-bordered">
                <thead>
                    
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th class="w-10">Quantity</th>
                        <th>Total Price</th>
                        <th>Remove</th>
                        <th colspan="2">Operation</th>
                    </tr>  
                </thead>   
                <tbody">

                <?php

                  global $con;
                  $getIpAdd = getIPAdd(); 
                
                  $total_price=0;
                  $product_qty=1;
                  $sql = "select * from carts where ip_add='$getIpAdd'";
                  $run = mysqli_query($con, $sql);
                  while($row = mysqli_fetch_array($run))
                  {
                    $product_id = $row['product_id'];    
                    $sel = "select * from products where product_id='$product_id'";
                    $run_sel = mysqli_query($con, $sel);
                    while($row_price = mysqli_fetch_array($run_sel))
                    {
                
                      $product_price=array($row_price['product_price']);
                      $price_table=$row_price['product_price'];
                      $product_title=$row_price['product_title'];
                      $product_image1=$row_price['product_image1'];
                      // $product_qty=$row_price['qty'];
                      $product_values=array_sum($product_price);
                      $total_price+=$product_values;
                    }
                  }
 
                 
              ?>
               
                
                </tbody>                                              
            </table>
            <div class="d-flex mb-5">
            <h4 class="px-3 fw-bold"><strong>Sub Total: </strong><strong class="text-info"><?= $total_price; ?></strong> /-</h4>
            <a href="index.php"><button class="text-dark btn btn-sm bg-warning mx-2 px-3 py-2 border-0">Continue Shopping</button></a>
            </div>
            <div class="">
              <a href=""><button class="btn btn-sm text-light bg-info px-3 py-2 border-0">Chechout</button></a>

            </div>
        </div>
      </div>

    <?php
    include('includes/footer.php');
            
    ?>
  </div>
            <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

 