<?php
include('../dbCon/connect.php');

if(isset($_POST['insert_cat'])){
  $category_title=$_POST['cat_title'];

  $select_query="Select * from categories where category_title='$category_title'";
  $result_select=mysqli_query($con, $select_query);
  $number=mysqli_num_rows( $result_select);
  if($number>0){
    echo "<script>alert('Category already added !')</script>";
  }else{
  $insert_query="insert into categories(category_title) values('$category_title')";
  $result=mysqli_query($con, $insert_query);
  if($result){
    echo "<script>alert('Category Added Successfully')</script>";
  }
}
}
?>
<h4 class="text-center">Insert Category</h4>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i 
    class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" 
  placeholder="Insert a Category" aria-label="Categories"
  aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto"  required>
   
  <input type="submit" class="bg-primary border-1 p-2 my-3 btn" 
  name="insert_cat" value="Submit">

</div>

</form>