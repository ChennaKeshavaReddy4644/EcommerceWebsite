<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style="background:url('cart6.jpg');">
<h1 style="z-index:105;position:fixed;top:0;left:40%;text-transform:uppercase;color:white;">shopping buzzz</h1>
    <div style="position:fixed;top:0;left:0;width:100%;height:100px;background:rgb(220,20,60);z-index:101;"></div>
<a href="home.php" style="z-index:105;position:fixed;top:35px;right:250px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
<div style="border:2px solid white;border-radius:10px;position:absolute;top:150px;right:150px;width:700px;height:400px;background:black;opacity:0.7;"></div>


</body>
<?php

  $id = $_GET["id"];

  $conn = mysqli_connect("localhost","root","","carts");

  $query = "select * from items where eid = '$id'";

  $result = mysqli_query($conn,$query);

  $row = mysqli_fetch_assoc($result);

  $name = $row["iname"];

  $about = $row["iabout"];

  $price = $row["iprice"];

  $image = $row["image"];

  echo "<h1 style='position:absolute;top:150px;right:420px;color:violet;font-size:30px;text-transform:uppercase;'>$name</h1>";

  echo "<h2 style='position:absolute;top:250px;right:250px;font-size:25px;color:white;'>$about</h2>";

  echo "<a href='$image'><img src='$image' style='width:500px;height:300px;position:absolute;top:200px;left:20px;border:2px solid red;border-radius:5px;'></a>";
  
  echo "<h1 style='position:absolute;top:330px;right:600px;color:green;'>RS:$price$</h1>";

  echo "<a href='#' style='font-weight:1000;border:2px solid white;text-align:center;border-radius:5px;position:absolute;top:430px;font-size:20px;left:700px;width:250px;height:30px;background:orange;color:black;text-decoration:none;'>buy now</a>";

  echo "<a href='addcart.php?id=$id' style='font-weight:1000;border:2px solid white;text-align:center;border-radius:5px;position:absolute;top:480px;font-size:20px;left:700px;width:250px;height:30px;background:rgb(255,140,0);color:black;text-decoration:none;'>add to cart</a>";


?>
</html>