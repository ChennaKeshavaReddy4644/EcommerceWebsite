<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style="background:url('cart3.jpg');background-repeat:repeat;">
    <h1 style="z-index:105;position:fixed;top:0;left:30%;text-transform:uppercase;color:white;">shopping buzzz</h1>
    <div style="position:fixed;top:0;left:0;width:100%;height:100px;background:rgb(220,20,60);z-index:101;"></div>
<a href="home.php" style="z-index:105;position:fixed;top:35px;right:450px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-home" aria-hidden="true"></i></a>
<a href="account.php" style="z-index:105;color:black;"><i class="fa fa-user" aria-hidden="true" style="width:55px;z-index:105;position:fixed;top:30px;left:150px;font-size:50px;"></i></a>

<a href="cart.php" style="z-index:105;color:white;"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="width:55px;z-index:105;position:fixed;top:30px;left:40px;font-size:50px;"></i></a>
<a href="supercoins.php" style="z-index:105;position:fixed;top:35px;right:370px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-university" aria-hidden="true"></i></a>
<a href="gamezone.php" style="z-index:105;position:fixed;top:35px;right:155px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-gamepad" aria-hidden="true"></i></a>

<?php
  session_start();
  $user = $_SESSION["uname"];

  $conn = mysqli_connect("localhost","root","","carts");
 
  $query = "select * from login where uname = '$user' ";

  $result = mysqli_query($conn,$query);

  $row = mysqli_fetch_assoc($result);

  $query1="select * from quiznight where pname='$user'";
  
  $run1=mysqli_query($conn,$query1) or die("query failed");

  $nrows=mysqli_num_rows($run1);

  if($nrows==0){
     $query2="insert into quiznight (pname,status,prize) values ('$user','notplayed','')";
     mysqli_query($conn,$query2) or die("query failed");
  }
  $query2="select * from trivia where tname='$user'";
  
  $run2=mysqli_query($conn,$query2) or die("query failed");

  $n=mysqli_num_rows($run2);

  if($n==0){
     $query3="insert into trivia (tname,status,prize) values ('$user','notplayed','')";
     mysqli_query($conn,$query3) or die("query failed");
  }

   echo" <a href='add.php' style='z-index:105;position:fixed;top:35px;padding:6px;border:3px solid black;border-radius:10px;right:300px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;'><i class='fa fa-plus' aria-hidden='true'></i></a>";
   
   echo" <a href='delete.php' style='z-index:105;position:fixed;top:35px;right:230px;padding:6px;border:3px solid black;border-radius:10px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;'><i class='fa fa-trash-o' aria-hidden='true'></i></a>";
?>
<?php

   $conn = mysqli_connect("localhost","root","","carts");

   $query = "select * from items";

   $result = mysqli_query($conn,$query);

   echo "<div style='margin:150px 0px 0px 50px;display:grid;grid-template-columns:auto auto auto;grid-row-gap:100px;grid-column-gap:0px;'>";

   while($row = mysqli_fetch_assoc($result)){

      $iname = $row["iname"];

      $image = $row["image"];

      $price = $row["iprice"];

      $id = $row["eid"];
      
      echo "<div style='padding:20px;z-index:100;width:300px;height:380px;background:black;opacity:1;border-radius:10px;'>";

      echo "<a href='$image'><img src='$image' style='border:2px solid orange;z-index:110;width:300px;height:200px;border-radius:10px;'></a>";
      echo "<h1 style='text-transform:uppercase;color:white;text-align:center;'>$iname</h1>";

      echo "<h1 style='color:white;text-align:center;'>RS:$price$</h1>";

      echo "<a href='view.php?id=$id' style='z-index:100;margin:-500px 0 0 10px;border:2px solid black;border-radius:10px;padding:7px;color:white;width:60px;height:30px;background:green;text-decoration:none;font-size:25px;'>view</a>";

       echo "<a href='addcart.php?id=$id' style='z-index:100;margin:0 0 0 100px;border:2px solid black;border-radius:10px;padding:7px;color:black;width:100px;height:30px;background:rgb(255,215,0);text-decoration:none;font-size:20px;'>add to cart</a>";
      echo "</div>";

   }

   echo "</div>"; 

?>
<?php

  $user = $_SESSION["uname"];

   $conn = mysqli_connect("localhost","root","","carts");

   $query = "select * from product where name = '$user' ";

   $result = mysqli_query($conn,$query);

   $row = mysqli_num_rows($result);

   echo "<h2 style='position:fixed;top:-5px;left:55px;color:blue;z-index:1000;'>$row</h2>";

?>



</body>
</html>