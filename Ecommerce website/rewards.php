<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style="background:url('cart5.jpg');background-repeat:repeat;">
    <h1 style="z-index:105;position:fixed;top:0;left:30%;text-transform:uppercase;color:white;">the rewards store</h1>
    <div style="position:fixed;top:0;left:0;width:100%;height:100px;background:rgb(220,20,60);z-index:101;"></div>
<a href="home.php" style="z-index:105;position:fixed;top:35px;right:450px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-home" aria-hidden="true"></i></a>

<a href="supercoins.php" style="z-index:105;position:fixed;top:35px;right:370px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-university" aria-hidden="true"></i></a>
<a href="gamezone.php" style="z-index:105;position:fixed;top:35px;right:155px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-gamepad" aria-hidden="true"></i></a>

<a href="rewards.php" style="position:absolute;top:110px;left:40px;text-decoration:none;padding:9px;text-align:center;font-size:20px;color:white;width:100px;height:20px;background:black;border:1px solid black;border-radius:10px;">ALL</a>
<a href="vouchers.php" style="position:absolute;top:110px;left:190px;text-decoration:none;padding:9px;text-align:center;font-size:20px;color:black;width:110px;height:20px;background:white;border:1px solid black;border-radius:10px;">VOUCHERS</a>
<a href="travel.php" style="position:absolute;top:110px;left:350px;text-decoration:none;padding:9px;text-align:center;font-size:20px;color:black;width:100px;height:20px;background:white;border:1px solid black;border-radius:10px;">TRAVEL</a>
<a href="food.php" style="position:absolute;top:110px;left:500px;text-decoration:none;padding:9px;text-align:center;font-size:20px;color:black;width:100px;height:20px;background:white;border:1px solid black;border-radius:10px;">FOOD</a>
<a href="combos.php" style="position:absolute;top:110px;left:650px;text-decoration:none;padding:9px;text-align:center;font-size:20px;color:black;width:100px;height:20px;background:white;border:1px solid black;border-radius:10px;">COMBOS</a>
<a href="lifestyle.php" style="position:absolute;top:110px;left:800px;text-decoration:none;padding:9px;text-align:center;font-size:20px;color:black;width:100px;height:20px;background:white;border:1px solid black;border-radius:10px;">LIFESTYLE</a>
<a href="entertainment.php" style="position:absolute;top:110px;left:950px;text-decoration:none;padding:9px;text-align:center;font-size:20px;color:black;width:170px;height:20px;background:white;border:1px solid black;border-radius:10px;">ENTERTAINMENT</a>
<a href="education.php" style="position:absolute;top:110px;left:1170px;text-decoration:none;padding:9px;text-align:center;font-size:20px;color:black;width:130px;height:20px;background:white;border:1px solid black;border-radius:10px;">EDUCATION</a>

<div>
<img src="store/co1.jpg" style="width:300px;height:400px;position:absolute;top:170px;left:40px;border-radius:20px;">
<?php
session_start();
 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:496px;left:150px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 20</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:523px;left:150px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 20</a>";
 }
?>
<div>
<img src="store/en1.jpg" style="width:300px;height:400px;position:absolute;top:170px;left:370px;border-radius:20px;">
<?php
session_start();
 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:492px;left:483px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 100</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:519px;left:480px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 100</a>";
 }
?>
</div>
<div>
<img src="store/vo1.jpg" style="width:300px;height:400px;position:absolute;top:170px;left:700px;border-radius:20px;">
<?php
session_start();
 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:491px;left:810px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 34+496$</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:523px;left:810px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 34+496$</a>";
 }
?>
<div>
<img src="store/fo1.jpg" style="width:300px;height:400px;position:absolute;top:170px;left:1030px;border-radius:20px;">
<?php

 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:493px;left:1140px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 87+414$</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:523px;left:1055px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 87+414$</a>";
 }
?>
<div>
<img src="store/ed1.jpg" style="width:300px;height:400px;position:absolute;top:590px;left:40px;border-radius:20px;">
<?php

 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:496px;left:150px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 20</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:523px;left:150px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 20</a>";
 }
?>
<div>
<img src="store/li1.jpg" style="width:300px;height:400px;position:absolute;top:590px;left:370px;border-radius:20px;">
<?php

 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:492px;left:483px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 100</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:519px;left:480px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 100</a>";
 }
?>
</div>
<div>
<img src="store/tr1.jpg" style="width:300px;height:400px;position:absolute;top:590px;left:700px;border-radius:20px;">
<?php

 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:491px;left:810px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 34+496$</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:523px;left:810px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 34+496$</a>";
 }
?>
<div>
<img src="store/co2.jpg" style="width:300px;height:400px;position:absolute;top:590px;left:1030px;border-radius:20px;">
<?php

 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:493px;left:1140px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 87+414$</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:523px;left:1055px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 87+414$</a>";
 }
?>
<div>
<img src="store/en2.jpg" style="width:300px;height:400px;position:absolute;top:840px;left:1030px;border-radius:20px;">
<?php

 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:493px;left:1140px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 87+414$</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:523px;left:1055px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 87+414$</a>";
 }
?>
<div>
<img src="store/vo2.jpg" style="width:300px;height:400px;position:absolute;top:840px;left:40px;border-radius:20px;">
<?php

 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:496px;left:150px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 20</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:523px;left:150px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 20</a>";
 }
?>
<div>
<img src="store/fo2.jpg" style="width:300px;height:400px;position:absolute;top:810px;left:370px;border-radius:20px;">
<?php

 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:492px;left:483px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 100</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:519px;left:480px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 100</a>";
 }
?>
</div>
<div>
<img src="store/ed2.jpg" style="width:300px;height:400px;position:absolute;top:840px;left:700px;border-radius:20px;">
<?php

 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:491px;left:810px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 34+496$</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:523px;left:810px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 34+496$</a>";
 }
?>
<div>
<img src="store/tr2.jpg" style="width:300px;height:400px;position:absolute;top:840px;left:1030px;border-radius:20px;">
<?php

 $user = $_SESSION["uname"];

 $conn = mysqli_connect("localhost","root","","carts");
 
 $query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";
 
 $result = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_assoc($result);
 
 $diamonds=$row["totaldiamonds"];
 
 echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";
 
 if($diamonds<20){
 echo "<h4 style='border-radius:6px;font-size:20px;position:absolute;top:493px;left:1140px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:grey;'>get using 87+414$</h4>";
 }
 else if($diamonds>=20){
     echo "<a href='#' style='border-radius:6px;font-size:20px;position:absolute;top:523px;left:1055px;padding:2px;justify-content:center;text-align:center;opacity:100;width:170px;height:31px;color:white;background:orange;text-decoration:none;'>get using 87+414$</a>";
 }
?>
<?php

  $user = $_SESSION["uname"];

  $conn = mysqli_connect("localhost","root","","carts");
 
  $query = "select * from login where uname = '$user' ";

  $result = mysqli_query($conn,$query);

  $row = mysqli_fetch_assoc($result);

   echo" <a href='add.php' style='z-index:105;position:fixed;top:35px;padding:6px;border:3px solid black;border-radius:10px;right:300px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;'><i class='fa fa-plus' aria-hidden='true'></i></a>";
   
   echo" <a href='delete.php' style='z-index:105;position:fixed;top:35px;right:230px;padding:6px;border:3px solid black;border-radius:10px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;'><i class='fa fa-trash-o' aria-hidden='true'></i></a>";
?>

<?php

$user = $_SESSION["uname"];

$conn = mysqli_connect("localhost","root","","carts");

$query = "select sum(coins) as totaldiamonds from coins where name = '$user' ";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

$diamonds=$row["totaldiamonds"];

echo "<h1 style='z-index:105;position:fixed;top:0px;left:100px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'><i class='fa fa-diamond' aria-hidden='true'></i></h1>";

if($diamonds==0){
echo "<h4 style='opacity:100;z-index:105;position:fixed;top:-25px;left:155px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'>0</h4>";
}
else{
    echo "<h4 style='opacity:100;z-index:105;position:fixed;top:-25px;left:155px;padding:6px;font-size:40px;color:lime;text-transform:uppercase;text-decoration:none;'>$diamonds</h4>";
}
?>   

    
</body>
</html>