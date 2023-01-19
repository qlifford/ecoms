<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"/>
    


    <link rel="stylesheet" href="../style.css">
   
</head>
<body>
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
    <img src="../images/images.png" alt="" class="logo" width="50px">
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Welcome G</a>
                </li>
            </ul>
              </nav>
            </div>
          </div>
     </nav>
     <div class="bg-light">
        <h3 class="text-center p-1">Details Manager</h3>
     </div>

     <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <a href="#"><img src="../images/g2.jpeg" alt="" class="admin-image"></a>
                <p class="text-light text-center">Admin Name</p>
            </div>

            <div class="button text-center">
               <button class="my-1"><a href="insert_product.php" class="nav-link text-light 
               bg-info my-1">Insert Products</a></button>
               <button class="my-1"><a href="" class="nav-link text-light 
               bg-info my-1">View Products</a></button>
               <button class="my-1"><a href="index.php?insert_category" 
               class="nav-link text-light bg-info my-1">Insert
               Categories</a></button>
               <button class="my-1"><a href="" class="nav-link text-light 
               bg-info my-1">View Categories</a></button>
               <button class="my-1"><a href="index.php?insert_brand" class="nav-link text-light 
               bg-info my-1">Insert Brands</a></button>
               <button class="my-1"><a href="" class="nav-link text-light 
               bg-info my-1">View Brands</a></button>
               <button class="my-1"><a href="" class="nav-link text-light 
               bg-info my-1">All Orders</a></button>
               <button class="my-1"><a href="" class="nav-link text-light 
               bg-info my-1">All Payments</a></button>
               <button class="my-1"><a href="" class="nav-link text-light 
               bg-info my-1">List Users</a></button>
               <button ><a href="" class="nav-link text-light 
               bg-info my-1">Logout</a></button>
            </div>
        </div>
     </div>

     <div class="container my-3">
        <?php 
        if (isset($_GET['insert_category'])) {
            include('insert_category.php');
        }
        if (isset($_GET['insert_brand'])) {
            include('insert_brands.php');
        }

        ?>
     </div>



     <div class="bg-info p-3 text-center footer">
<p>All rights reserved @- Designed by Agwati Cliff 2022</p>
</div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>