<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style="background-image:url('cart4.jpg');background-repeat:no-repeat;background-position:180px 30px;">
<h1 style="z-index:105;position:fixed;top:0;left:35%;text-transform:uppercase;color:white;">shopping buzzz</h1>
    <div style="position:fixed;top:0;left:0;width:100%;height:100px;background:rgb(220,20,60);z-index:101;"></div>
<a href="home.php" style="z-index:105;position:fixed;top:35px;right:350px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-home" aria-hidden="true"></i></a>
<?php
  session_start();
  $user = $_SESSION["uname"];

  $conn = mysqli_connect("localhost","root","","carts");
 
  $query = "select * from login where uname = '$user' ";

  $result = mysqli_query($conn,$query);

  $row = mysqli_fetch_assoc($result);

  if($row["about"] == "admin"){

   echo" <a href='add.php' style='z-index:105;position:fixed;top:40px;right:250px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;'><i class='fa fa-plus' aria-hidden='true'></i></a>";
   
   echo" <a href='delete.php' style='z-index:105;position:fixed;top:40px;right:150px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;'><i class='fa fa-trash-o' aria-hidden='true'></i></a>";

  }
  ?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">

   
   <label for="name" class="col-sm-2" style="position:absolute;top:20%;left:20px;font-size:20px;text-transform:uppercase;">product name:</label>

   <input type="text" name="name" style="opacity:0.6;color:white;position:absolute;top:25%;left:20px;width:400px;padding:10px;border-radius:10px;border:3px solid red;background:black;">

   
   <label for="about" class="col-sm-2" style="position:absolute;top:35%;left:20px;font-size:20px;text-transform:uppercase;">about the product:</label>

   <textarea name="about" id="" cols="30" rows="5" style="color:white;opacity:0.6;position:absolute;top:40%;left:20px;width:400px;padding:10px;border-radius:10px;border:3px solid red;background:black;"></textarea> 
   
   <label for="price" class="col-sm-2" style="position:absolute;top:60%;left:20px;font-size:20px;text-transform:uppercase;">product price:</label>

   <input type="text" name="price" style="opacity:0.6;color:white;position:absolute;top:65%;left:20px;width:100px;padding:10px;border-radius:10px;border:3px solid red;background:black;">

   <label for="image" class="col-sm-2" style="position:absolute;top:75%;left:20px;font-size:20px;text-transform:uppercase;">product image:</label>

   <input type="file" name="image" style="position:absolute;top:80%;left:20px;font-size:20px;text-transform:uppercase;">

   <input type="submit" value="add" name="add" style="position:absolute;top:90%;left:100px;font-size:20px;text-transform:uppercase;width:100px;height:40px;color:white;background:blue;outline:none;border:2px solid black;">

</form>
</body>
<?php

if(isset($_POST["add"])){

        
    $name = $_POST["name"];
    $about = $_POST["about"];
    $price = $_POST["price"];

    $filename = $_FILES["image"]["name"];

    $tempname = $_FILES["image"]["tmp_name"];

    $folder =  "items/".$filename;

    move_uploaded_file($tempname,$folder);

  if($name != "" && $about != "" && $price != "" && $folder != ""){
     
    $conn = mysqli_connect("localhost","root","","carts");

    $query = "insert into items (iname,iabout,iprice,image) values ('$name','$about','$price','$folder')";

    $result = mysqli_query($conn,$query);

    if($result){
     
      echo "<script>alert('product added successfully');</script>";

      header("location: http://localhost/cart/home.php");

    }
    else{
         
      echo "<script>alert('something went wrong');</script>";


    }
  
  }    
  
  else{

    echo "fill the details of product";

    }
}

?>
</html>