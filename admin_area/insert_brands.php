<?php
include('../dbCon/connect.php');

if(isset($_POST['insert_brand'])){
  $brand_title=$_POST['brand_title'];

  $select_query="Select * from brands where brand_title='$brand_title'";
  $result_select=mysqli_query($con, $select_query);
  $number=mysqli_num_rows( $result_select);
  if($number>0){
    echo "<script>alert('brand already added !')</script>";
  }else{
  $insert_query="insert into brands(brand_title) values('$brand_title')";
  $result=mysqli_query($con, $insert_query);
  if($result){
    echo "<script>alert('Brand Added Successfully')</script>";
  }
}
}
?>
<h4 class="text-center">Insert Brands</h4>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i 
    class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title" 
  placeholder="Insert a brand" aria-label="brands"
  aria-describedby="basic-addon1" required>
</div>
<div class="input-group w-10 mb-2 m-auto" required>
   
  <input type="submit" class="bg-primary border-1 p-2 my-3 btn" name="insert_brand" value="Submit">

</div>

</form>