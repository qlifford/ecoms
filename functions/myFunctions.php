<?php
include "dbCon/connect.php";

function getProducts()
{
      global $con;

    if(!isset($_GET['category']))
    {
      if (!isset($_GET['brand']))
      { 

      $select_query = "Select * from products order by rand() limit 0,6";
      $result_query = mysqli_query($con, $select_query);
        while($row = mysqli_fetch_assoc($result_query))
        {
            $product_id         = $row['product_id'];
            $product_title      = $row['product_title'];
            $description        = $row['product_desc']; 
            $product_image1     = $row['product_image1'];
            $price              = $row['product_price'];
            $category_title     = $row['category_id'];
            $brand_title        = $row['brand_id'];

          echo "<div class='col-md-4 mb-2'>
          <div class='card'>
              <h5 class='card-title'>$product_title</h5>
                  <img class='card-img-top' src='admin_area/product_images/$product_image1' alt='$product_image1'>
                  <div class='card-body'>  
                  <p class='card-text'>$description</p>
                  <p >$price</p>
                  <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Buy now</a>
                  <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                 
              </div>
            </div>
        </div>";
      }
      } 
  }
}

function getAllProducts()
{
  global $con;

  if(!isset($_GET['category'])){
    if (!isset($_GET['brand']))
    { 

    $select_query = "Select * from `products` order by rand()";
    $result_query = mysqli_query($con, $select_query);
      while($row = mysqli_fetch_assoc($result_query))
      {
          $product_id         = $row['product_id'];
          $product_title      = $row['product_title'];
          $description        = $row['product_desc']; 
          $product_image1     = $row['product_image1'];
          $product_image2     = $row['product_image2'];
          $product_image3     = $row['product_image3'];
          $price              = $row['product_price'];
          $category_title     = $row['category_id'];
          $brand_title        = $row['brand_id'];
      
          echo "<div class='col-md-4 mb-2'>
          <div class='card'>
              <h5 class='card-title'>$product_title</h5>
                  <img class='card-img-top' src='./admin_area/product_images/$product_image1' alt='$product_image1'>
                  <div class='card-body'>  
                  <p class='card-text'>$description</p>
                  <p >$price</p>
                  <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Buy now</a>
                  <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>

              </div>
            </div>
        </div>";
    }
    } 
  }  
}

function getUniqCategories()
{
   global $con;
   if(isset($_GET['category'])){

    $category_id = $_GET['category']; 

     $select_query = "Select * from `products` where category_id = $category_id";
     $result_query = mysqli_query($con, $select_query);
     $num_rows = mysqli_num_rows($result_query);

     if($num_rows == 0)
     {
      echo '<h2>No stock in this category</h2>';
     }
       while($row = mysqli_fetch_assoc($result_query)){
           $product_id         = $row['product_id'];
           $product_title      = $row['product_title'];
           $description        = $row['product_desc']; 
          //  $product_keywords   = $row['product_keywords'];
           $product_image1     = $row['product_image1'];
           $price              = $row['product_price'];
           $category_title     = $row['category_id'];
           $brand_title        = $row['brand_id'];
       
           echo "<div class='col-md-4 mb-2'>
           <div class='card'>
               <h5 class='card-title'>$product_title</h5>
                   <img class='card-img-top' src='./admin_area/product_images/$product_image1' alt='$product_image1'>
                   <div class='card-body'>  
                   <p class='card-text'>$description</p>
                   <p >$price</p>
                   <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Buy now</a>
                   <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
 
               </div>
             </div>
         </div>";
       }
    } 
 
}

function getUniqBrands()
{
    global $con;
    if(isset($_GET['brand'])){
 
     $brand_id = $_GET['brand']; 
 
      $select_query = "Select * from `products` where brand_id = $brand_id";
      $result_query = mysqli_query($con, $select_query);
      $num_rows = mysqli_num_rows($result_query);
 
      if($num_rows == 0)
      {
       echo '<h2>This brand is not available</h2>';
      }
        while($row = mysqli_fetch_assoc($result_query)){
            $product_id         = $row['product_id'];
            $product_title      = $row['product_title'];
            $description        = $row['product_desc']; 
            $product_image1     = $row['product_image1'];
            $price              = $row['product_price'];
            $category_title        = $row['category_id'];
            $brand_title           = $row['brand_id'];
        
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
                <h5 class='card-title'>$product_title</h5>
                    <img class='card-img-top' src='./admin_area/product_images/$product_image1' alt='$product_image1'>
                    <div class='card-body'>  
                    <p class='card-text'>$description</p>
                    <p >$price</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Buy now</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
  
                </div>
              </div>
          </div>";
      }
    } 
  
}

function getBrands()
{

      global $con;
      $select_brand="Select * from `brands`";
      $result_brand=mysqli_query($con, $select_brand);
        while($row_data=mysqli_fetch_assoc($result_brand)){
        $brand_title= $row_data['brand_title'];
        $brand_id=$row_data['brand_id'];
            echo  "<li class='nav-item'>
            <a href='index.php?brand=$brand_id' class='nav-link 
            text-light'>$brand_title</a>
        </li>";

    }
  }
  

    function getCategories(){
      global $con;
      $select_category="Select * from categories";
      $result_category=mysqli_query($con, $select_category);     
        while($row_data=mysqli_fetch_assoc($result_category)){
          $category_title= $row_data['category_title'];
          $category_id=$row_data['category_id'];
              echo  "<li class='nav-item'>
      <a href='index.php?category=$category_id' class='nav-link 
      text-light'>$category_title</a>
      </li>";

     }
}

function searchProducts()
{
  global $con;
  if (isset($_GET['search_data_product'])) 
  {
    $search_data_value = $_GET['search_data'];

    $search_query = "Select * from `products` where product_keywords like '%$search_data_value%'";
    $result_query = mysqli_query($con, $search_query);
    $num_rows = mysqli_num_rows($result_query);

    if($num_rows == 0)
    {
     echo "<h2 class='text-danger text-centre'>No result matches your search here!</h2>";
    }
    $result_query = mysqli_query($con, $search_query);
      while($row = mysqli_fetch_assoc($result_query)){
          $product_id         = $row['product_id'];
          $product_title      = $row['product_title'];
          $description        = $row['product_desc']; 
          $product_keywords   = $row['product_keywords']; 
          $product_image1     = $row['product_image1'];
          $price              = $row['product_price'];
          $category_title     = $row['category_id'];
          $brand_title        = $row['brand_id']; 

          echo "<div class='col-md-4 mb-2'>
          <div class='card'>
              <h5 class='card-title'>$product_title</h5>
                  <img class='card-img-top' src='./admin_area/product_images/$product_image1' alt='$product_image1'>
                  <div class='card-body'>  
                  <p class='card-text'>$description</p>
                  <p >$price</p>
                  <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Buy now</a>
                  <a href='product_details.php?product_id = $product_id' class='btn btn-secondary'>Details</a>

              </div>
            </div>
        </div>";
    }
    } 
}

function viewDetails()
{
  global $con;
  if (isset($_GET['product_id'])) 
  {
    if(!isset($_GET['category']))
    {
      if (!isset($_GET['brand']))
      {    

      $product_id = $_GET['product_id'];

      $select_query = "Select * from products where product_id='$product_id'";
      $result_query = mysqli_query($con, $select_query);
        while($row = mysqli_fetch_assoc($result_query))
        {
            $product_id         = $row['product_id'];
            $product_title      = $row['product_title'];
            $description        = $row['product_desc']; 
            $product_image1     = $row['product_image1'];
            $product_image2     = $row['product_image2'];
            $product_image3     = $row['product_image3'];
            $price              = $row['product_price'];
            $category_title     = $row['category_id'];
            $brand_title        = $row['brand_id'];

          echo "<div class='col-md-4 mb-2'>
          <div class='card'>
              <h5 class='card-title'>$product_title</h5>
                  <img class='card-img-top' src='admin_area/product_images/$product_image1' alt='$product_image1'>
                  <div class='card-body'>  
                  <p class='card-text'>$description</p>
                  <p >$price</p>
                  <a href='index.php?add_to_cart=$product_id' class='btn btn-warning'>Add to Cart</a>
                  <a href='index.php' type='button' class='btn btn-info'>Go Home</a>
              </div>
            </div>
        </div>

        <div class='col-md-8'>
        <div class='row'>
          <div class='col-md-12 text-center text-primary mb-5'>
            <h4>Related Products</h4>
          </div>
          <hr>
          <div class='col-md-6'>
            <img src='admin_area/product_images/$product_image2' width='250px' alt='$product_title'>
          </div>
          <div class='col-md-6'>
            <img src='admin_area/product_images/$product_image3' width='250px' alt='$product_title'>
          </div>
        </div>
      </div>
        
        ";
      }
      } 
    }
  }
}

function getIPAdd()
{  
  if(!empty($_SERVER['HTTP_CLIENT_IP']))
  {
  $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
 
  elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  {
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
  $ip=$_SERVER['REMOTE_ADDR'];
  }
  return$ip;
}

function getCart()
{
  if(isset($_GET['add_to_cart']))
  {
    global $con;
   $getIpAdd = getIPAdd();    
   $getProdId = $_GET['add_to_cart'];

   $sql = "select * from carts where ip_add='$getIpAdd' and product_id=$getProdId";
   $run = mysqli_query($con, $sql);
   $num = mysqli_num_rows($run);

   if ($num>0) 
   {
    echo "<script>alert('Item already in Cart')</script>";
    echo "<script>open.window('index.php','_self')</script>";
   }
   else
   {
    $insert = "INSERT INTO carts (product_id, ip_add, qty) VALUES($getProdId,'$getIpAdd',0)";
    $run = mysqli_query($con, $insert);
      echo "<script>alert('Item added to Cart')</script>";
      echo "<script>open.window('index.php','_self')</script>";
    

    



   }
                                  
  }
 

}

   ?>

