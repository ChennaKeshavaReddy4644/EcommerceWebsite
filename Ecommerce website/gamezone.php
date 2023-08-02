<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style="background:url('cart5.jpg');background-repeat:repeat;">
    <h1 style="z-index:105;position:fixed;top:0;left:30%;text-transform:uppercase;color:white;">gamezone</h1>
    <div style="position:fixed;top:0;left:0;width:100%;height:100px;background:rgb(220,20,60);z-index:101;"></div>
<a href="home.php" style="z-index:105;position:fixed;top:35px;right:450px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-home" aria-hidden="true"></i></a>
<a href="supercoins.php" style="z-index:105;position:fixed;top:35px;right:370px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-university" aria-hidden="true"></i></a>
<a href="gamezone.php" style="z-index:105;position:fixed;top:35px;right:155px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-gamepad" aria-hidden="true"></i></a>
<a href="quiz.php"><img src="quiz.jpg" style="position:absolute;top:100px;left:50px;width:400px;height:400px;padding:10px;box-sizing:border-box;border-radius:20px;"></a>
<a href="doom.php"><img src="doom.jpg" style="position:absolute;top:100px;left:480px;width:400px;height:400px;padding:10px;box-sizing:border-box;border-radius:20px;"></a>

<a href="trivia.php"><img src="trivia.jpg" style="position:absolute;top:100px;right:50px;width:400px;height:400px;padding:10px;box-sizing:border-box;border-radius:20px;"></a>
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
    
</body>
</html>