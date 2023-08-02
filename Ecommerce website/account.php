<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style="background:blue;background-repeat:repeat;">
    <h1 style="z-index:105;position:fixed;top:0;left:30%;text-transform:uppercase;color:white;">my account</h1>
    <div style="position:fixed;top:0;left:0;width:100%;height:100px;background:rgb(220,20,60);z-index:101;"></div>
<a href="home.php" style="z-index:105;position:fixed;top:35px;right:450px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-home" aria-hidden="true"></i></a>
<a href="account.php" style="z-index:105;color:blue;"><i class="fa fa-user" aria-hidden="true" style="width:55px;z-index:105;position:fixed;top:30px;left:150px;font-size:50px;"></i></a>

<a href="supercoins.php" style="z-index:105;position:fixed;top:35px;right:370px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-university" aria-hidden="true"></i></a>
<a href="gamezone.php" style="z-index:105;position:fixed;top:35px;right:155px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-gamepad" aria-hidden="true"></i></a>
<div style="position:absolute;top:100px;left:0;width:100%;height:600px;background:blue;opacity:1;"></div>
<div style="position:absolute;top:100px;left:700px;height:100%;width:3px;background:white;"></div>

<div style="position:absolute;top:120px;right:100px;width:500px;height:150px;background:white;border-radius:5px;">
<h2 style="padding:5px;">buzzz plus</h2>
<h3 style="position:absolute;top:40px;left:50px;">your membership is active till one year</h3>
<a href="#" style="position:absolute;text-decoration:none;font-size:20px;top:100px;left:220px;text-transform:uppercase;">view your membership</a>
</div>
<div style="position:absolute;top:280px;right:100px;width:500px;height:150px;background:white;border-radius:5px;">
<h2 style="padding:5px;">my orders</h2>
<a href="#" style="position:absolute;text-decoration:none;font-size:20px;top:100px;left:280px;text-transform:uppercase;">view all orders</a>
</div>
<div style="position:absolute;top:600px;right:100px;width:500px;height:150px;background:white;border-radius:5px;">
<h2 style="padding:5px;">my addresses</h2>
<a href="#" style="position:absolute;text-decoration:none;font-size:20px;top:100px;left:400px;text-transform:uppercase;">view</a>
</div>
<?php
  session_start();
  $user = $_SESSION["uname"];

  $conn = mysqli_connect("localhost","root","","carts");
 
  $query = "select * from login where uname = '$user' ";

  $result = mysqli_query($conn,$query);

  $row = mysqli_fetch_assoc($result);
  
  $email=$row["uemail"];
   echo" <a href='add.php' style='z-index:105;position:fixed;top:35px;padding:6px;border:3px solid black;border-radius:10px;right:300px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;'><i class='fa fa-plus' aria-hidden='true'></i></a>";
   
   echo" <a href='delete.php' style='z-index:105;position:fixed;top:35px;right:230px;padding:6px;border:3px solid black;border-radius:10px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;'><i class='fa fa-trash-o' aria-hidden='true'></i></a>";

   echo "<i class='fa fa-male' aria-hidden='true' style='position:absolute;top:150px;left:150px;color:black;font-size:250px;'></i>";
   
   echo "<h1 style='position:absolute;top:250px;color:white;left:350px;font-size:50px;'>OR</h1>";

   echo "<i class='fa fa-female' aria-hidden='true' style='position:absolute;top:150px;left:480px;color:black;font-size:250px;'></i>";

   echo "<h1 style='position:absolute;top:350px;color:white;left:220px;font-size:100px;'>$user</h1>";
   
   echo "<h1 style='position:absolute;top:530px;color:white;left:220px;font-size:30px;'>$email</h1>";
   
?>
<?php

session_start();

  $user = $_SESSION["uname"];

  $conn = mysqli_connect("localhost","root","","carts");
 
  $query = "select * from voucher where name = '$user' ";

  $result = mysqli_query($conn,$query);

  $row = mysqli_fetch_assoc($result);
  
  $query1 = "select * from voucher where name='$user'";
  
  $result1 = mysqli_query($conn,$query1);

  $row1 = mysqli_fetch_assoc($result1);
  
  $nwallet = mysqli_num_rows($result1);

  echo "<div style='position:absolute;top:440px;right:100px;width:500px;height:150px;background:white;border-radius:5px;'>";
  echo "<h2 style='padding:5px;'>my cards & wallet</h2>";
  echo "<a href='wallet.php' style='position:absolute;text-decoration:none;font-size:20px;top:100px;left:280px;text-transform:uppercase;'>view all vouchers</a>";
  if($nwallet==0){
    echo "<h3 style='position:absolute;top:0px;right:100px;color:black;font-size:25px;'>0 vouchers</h3>";
  }else{
    echo "<h3 style='position:absolute;top:0px;right:100px;color:black;font-size:25px;'>$nwallet vouchers</h3>";
  
  }
  echo "</div>";
 

?>
    
</body>
</html>