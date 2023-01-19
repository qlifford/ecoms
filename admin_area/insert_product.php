<?php include('../dbCon/connect.php'); 

    if (isset($_POST['insert_product'])) 
{

        $product_title          = $_POST['product_title'];
        $description            = $_POST['description'];
        $product_keywords       = $_POST['product_keywords'];
        $product_category       = $_POST['product_category'];
        $product_brand          = $_POST['product_brand'];
        $product_price          = $_POST['product_price'];
        $product_status         = 'true';

        $product_image1 = $_FILES['product_image1']['name'];
        $product_image2 = $_FILES['product_image2']['name'];
        $product_image3 = $_FILES['product_image3']['name'];


        $temp_image1 = $_FILES['product_image1']['tmp_name'];
        $temp_image2 = $_FILES['product_image2']['tmp_name'];
        $temp_image3 = $_FILES['product_image3']['tmp_name'];

          
                    // checking empty fields
            if ($product_title == '' or $product_price =='' ) 
            {

                    echo "<script>alert('All fields required!')</script>";
            }
            else
    {
                move_uploaded_file($temp_image1,"./product_images/$product_image1");
                move_uploaded_file($temp_image2,"./product_images/$product_image2");
                move_uploaded_file($temp_image3,"./product_images/$product_image3");

            
                $select_query="Select * from products where product_title='$product_title'";
                $res=mysqli_query($con, $select_query);
                $number=mysqli_num_rows($res);
                        if($number > 0)
                        {
            
                            echo "<script>alert('Product already added!')</script>";

                        }
                         else
            {

                    $insert_products = "insert into products(product_title,product_desc,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,product_price,status,date) values('$product_title','$description','$product_keywords','$product_category','$product_brand','$product_image1','$product_image2','$product_image3','$product_price','$product_status',NOW())";

                        $result_query = mysqli_query($con,$insert_products);
                            if ($result_query) 
                    {
                            echo "<script>alert('Product added successfully!')</script>";
                    }
                   
            }
    }
    
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Prodcts</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="bg-light">
         <div class="container mt-3 w-50 m-auto">
        <h1 class="text-center">Insert Products</h1>

            <form action="" method="post" enctype="multipart/form-data">

<div class="form-outline mb-2">
    <label for="" class="form_label">Product Title</label>
    <input type="text" name="product_title" id="product_title" 
    class="form-control"
    placeholder="Product name">
</div>

<div class="form-outline mb-2">
    <label for="" class="form_label">Product Description</label>
    <input type="text" name="description" id="description" 
    class="form-control"
    placeholder="Product description">
</div>

<div class="form-outline mb-2">
<label for="" class="form_label">Product Keywords</label>
<input type="text" name="product_keywords" id="product_keywords" 
class="form-control"
placeholder="Keywords for search">
</div>

<div class="form-outline mb-2">
    <select name="product_category" id="product_category" class="form-select">
        <option value="">Select Category</option>
            <?php
            $select_query="Select * from categories";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $category_title=$row['category_title'];
                $category_id=$row['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
            }
            ?>
        

    </select>
</div>

<div class="form-outline mb-2">
    <select name="product_brand" id="product_brand" class="form-select" >
        <option value="">Select brand</option>

       <?php
        $select_query="Select * from brands";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
            $brand_title=$row['brand_title'];
            $brand_id=$row['brand_id'];
                echo "<option value='$brand_id'>$brand_title</option>";
        
        }
       ?>

        </select>
</div>

        <div class="form-outline mb-2">
        <label for="" class="form_label">Product image1</label>
        <input type="file" name="product_image1" id="product_image1" 
        class="form-control">
        </div>

        <div class="form-outline mb-2">
        <label for="" class="form_label">Product image2</label>
        <input type="file" name="product_image2" id="product_image2" 
        class="form-control">
        </div>

        <div class="form-outline mb-2">
        <label for="" class="form_label">Product image3</label>
        <input type="file" name="product_image3" id="product_image3" 
        class="form-control">
        </div>

<div class="form-outline mb-2">
    <label for="" class="form-label">Product Price</label>
    <input type="text" name="product_price" id="product_price"
     class="form-control" 
    placeholder="Price">
    </div>

    <div class="form-outline mb-2">
    <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" 
    value="Submit">
    </div>

</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></scripProduct>


</body>
</html>