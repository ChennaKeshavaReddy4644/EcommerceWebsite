<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<h1 style="z-index:105;position:fixed;top:0;left:40%;text-transform:uppercase;color:white;">shopping buzzz</h1>
    <div style="position:fixed;top:0;left:0;width:100%;height:100px;background:rgb(220,20,60);z-index:101;"></div>
<a href="home.php" style="z-index:105;position:fixed;top:35px;right:250px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
<div style="position:absolute;top:37%;left:0;width:100%;height:2px;background:black;"></div>
<a href='#' style='position:absolute;top:27%;left:100px;color:black;font-size:20px;font-weight:900;text-decoration:none;width:200px;height:40px;background:gold;text-align:center;padding:2px;border:1px solid black;border-radius:5px;padding-top:7px;'>proceed to buy</a>
<i class="fa fa-cart-arrow-down" aria-hidden="true" style="position:absolute;top:110px;right:100px;font-size:50px;"></i>
<h2 style="position:absolute;top:150px;right:50px;text-transform:uppercase;">the cart</h2>
<?php

   session_start();

   $user = $_SESSION["uname"];

   $conn = mysqli_connect("localhost","root","","carts");

   $query = "select * from product where name = '$user'";

   $query1 = "select sum(price) as total from product where name = '$user'";

   $result1 = mysqli_query($conn,$query1);

   $row = mysqli_fetch_assoc($result1);

   $result =  mysqli_query($conn,$query);

   $total = $row["total"];

   echo "<h1 style='position:absolute;top:15%;left:100px;color:red;'>TOTAL:$total$</h1>";
   
   echo "<div style='margin:280px;'></div>";

   while( $row1 = mysqli_fetch_assoc($result)){

    $id = $row1["pid"];
       
    $name = $row1["pname"];

    $image = $row1["pimage"];

    $price = $row1["price"];

    echo "<div style='margin:50px;padding:20px;z-index:100;width:400px;height:450px;background:black;opacity:1;border-radius:10px;'>";

    echo "<img src='$image' style='border:2px solid orange;z-index:110;width:400px;height:300px;border-radius:10px;'>";

    echo "<h1 style='text-transform:uppercase;color:white;text-align:center;'>$name</h1>";
    
    echo "<a href='#' style='margin:0px 20px 50px;text-decoration:none;color:white;font-size:20px;width:100px;height:40px;background:green;padding:10px;border:1px solid black;border-radius:5px;'>buy</a>"; 

    echo "<a href='deleteinline.php?id=$id' style='margin:10px 330px -100px;text-decoration:none;color:white;font-size:20px;width:100px;height:40px;background:red;padding:10px;border:1px solid black;border-radius:5px;'><i class='fa fa-trash-o' aria-hidden='true'></i></a>";

    echo "<h1 style='margin:-30px;color:white;text-align:center;'>$$price</h1>";

    echo "</div>";

   }
   echo "</div>";
?>
</body>
</html>