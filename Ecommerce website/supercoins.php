<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style="background:url('cart3.jpg');background-repeat:repeat;">
    <h1 style="z-index:105;position:fixed;top:0;left:30%;text-transform:uppercase;color:white;">store</h1>
    <div style="position:fixed;top:0;left:0;width:100%;height:100px;background:rgb(220,20,60);z-index:101;"></div>
<a href="home.php" style="z-index:105;position:fixed;top:35px;right:450px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-home" aria-hidden="true"></i></a>

<a href="supercoins.php" style="z-index:105;position:fixed;top:35px;right:370px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-university" aria-hidden="true"></i></a>
<a href="gamezone.php" style="z-index:105;position:fixed;top:35px;right:155px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-gamepad" aria-hidden="true"></i></a>
<a href="rewards.php"><img src="rewardstore.jpg" style="position:absolute;top:110px;left:2px;width:1000px;height:300px;border-radius:5px;border:3px solid black;"></a>
<a href="discounts.php"><img src="discounts.jpg" style="position:absolute;top:110px;right:0px;width:330px;height:300px;border-radius:5px;border:3px solid black;"></a>
<a href="gamezone.php"><img src="diamond.jpg" style="position:absolute;top:430px;width:400px;border-radius:10px;height:250px;border:3px solid black;left:20px;"></a>
<a href="home.php"><img src="shop.jpg" style="position:absolute;top:430px;width:400px;border-radius:10px;height:250px;left:480px;border:3px solid black;"></a>
<a href="#"><img src="location.jpg" style="position:absolute;top:430px;width:400px;border-radius:10px;height:250px;left:920px;border:3px solid black;"></a>

<h3 style="position:absolute;color:black;font-size:30px;left:100px;top:600px;">earn extra gems</h3>
<h3 style="color:black;position:absolute;top:280px;right:50px;z-index:20;font-weight:1000;font-size:30px;">exclusive discounts</h3>
<h3 style="position:absolute;top:600px;right:120px;color:black;font-size:30px;">pay at near stores</h3>
<h3 style="position:absolute;top:600px;left:610px;color:black;font-size:30px;">shop products</h3>
<h3></h3>
<?php
  session_start();
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