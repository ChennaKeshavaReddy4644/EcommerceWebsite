<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style="background:url('cart3.jpg');">
<h1 style="z-index:105;position:fixed;top:0;left:40%;text-transform:uppercase;color:white;">challenge trivia</h1>
    <div style="position:fixed;top:0;left:0;width:100%;height:100px;background:rgb(220,20,60);z-index:101;"></div>
<a href="gamezone.php" style="z-index:105;position:fixed;top:35px;right:250px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;border:3px solid black;border-radius:10px;padding:5px;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
<div style="position:absolute;top:110px;right:100px;width:350px;opacity:0.9;height:520px;background:white;border:2px solid red;">
<h1 style="position:absolute;left:80px;text-transform:uppercase;top:-20px;">rewards</h1>
<img src="50pvoucher.jpg" style="width:80px;height:80px;position:absolute;top:40px;left:0px;">
<h2 style="position:absolute;top:50px;left:100px;">50% giftcard</h2>
<img src="30pvoucher.jpg" style="width:80px;border-radius:50%;height:80px;position:absolute;top:120px;left:0px;">
<h2 style="position:absolute;top:120px;left:100px;">30% giftcard</h2>
<img src="300voucher.jpg" style="width:80px;border-radius:50%;height:80px;position:absolute;top:200px;left:0px;">
<h2 style="position:absolute;top:200px;left:100px;">Rs300 voucher</h2>
<img src="250voucher.jpg" style="width:80px;border-radius:50%;height:80px;position:absolute;top:280px;left:0px;">
<h2 style="position:absolute;top:280px;left:100px;">Rs250 voucher</h2>
<img src="100voucher.jpg" style="width:80px;border-radius:50%;height:80px;position:absolute;top:360px;left:0px;">
<h2 style="position:absolute;top:360px;left:100px;">Rs100 voucher</h2>
<img src="gems.jpg" style="width:80px;border-radius:50%;height:80px;position:absolute;top:440px;left:0px;">
<h2 style="position:absolute;top:440px;left:100px;">gems</h2>

</div>
<?php

 session_start();

 $user = $_SESSION["uname"];

 $conn=mysqli_connect("localhost","root","","carts") or die("connection failed");
 $query="select * from trivia where tname='$user'";
 $run=mysqli_query($conn,$query) or die("query failed");
 $row=mysqli_fetch_assoc($run);
 $status=$row["status"];
 if($status=="played"){
    $prize=$row["prize"];
    if($prize=="100voucher"){
        echo "<div style='position:absolute;top:150px;left:200px;width:600px;height:400px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
        echo "<h1 style='color:white;position:absolute;top:20px;left:30px;text-transform:uppercase;'>congratulations</h1>";
        echo "<img src='100voucher.jpg' style='position:absolute;top:100px;left:100px;width:300px;border:2px solid red;border-radius:20px;height:200px;'>";
        echo "<h1 style='position:absolute;top:300px;left:50px;color:blue;'>you won $100 giftvoucher</h1>";
        echo "</div>";

    }
   
    else if($prize=="250voucher"){
        echo "<div style='position:absolute;top:150px;left:200px;width:600px;height:400px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
        echo "<h1 style='color:white;position:absolute;top:20px;left:30px;text-transform:uppercase;'>congratulations</h1>";
        echo "<img src='250voucher.jpg' style='position:absolute;top:100px;left:100px;width:300px;border:2px solid red;border-radius:20px;height:200px;'>";
        echo "<h1 style='position:absolute;top:300px;left:50px;color:blue;'>you won $250 giftvoucher</h1>";
        echo "</div>";

    }
    else if($prize=="300voucher"){
        echo "<div style='position:absolute;top:150px;left:200px;width:600px;height:400px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
        echo "<h1 style='color:white;position:absolute;top:20px;left:30px;text-transform:uppercase;'>congratulations</h1>";
        echo "<img src='300voucher.jpg' style='position:absolute;top:100px;left:100px;width:300px;border:2px solid red;border-radius:20px;height:200px;'>";
        echo "<h1 style='position:absolute;top:300px;left:50px;color:blue;'>you won $300 giftvoucher</h1>";
        echo "</div>";

    }
    else if($prize=="30pvoucher"){
        echo "<div style='position:absolute;top:150px;left:200px;width:600px;height:400px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
        echo "<h1 style='color:white;position:absolute;top:20px;left:30px;text-transform:uppercase;'>congratulations</h1>";
        echo "<img src='30pvoucher.jpg' style='position:absolute;top:100px;left:100px;width:300px;border:2px solid red;border-radius:20px;height:200px;'>";
        echo "<h1 style='position:absolute;top:300px;left:50px;color:blue;'>you won 30% giftvoucher</h1>";
        echo "</div>";

    }
    else if($prize=="50pvoucher"){
        echo "<div style='position:absolute;top:150px;left:200px;width:600px;height:400px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
        echo "<h1 style='color:white;position:absolute;top:20px;left:30px;text-transform:uppercase;'>congratulations</h1>";
        echo "<img src='50pvoucher.jpg' style='position:absolute;top:100px;left:100px;width:300px;border:2px solid red;border-radius:20px;height:200px;'>";
        echo "<h1 style='position:absolute;top:300px;left:50px;color:blue;'>you won 50% giftvoucher</h1>";
        echo "</div>";

    }
    else if($prize=="5gems"){
        echo "<div style='position:absolute;top:150px;left:200px;width:600px;height:400px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
        echo "<h1 style='color:white;position:absolute;top:20px;left:30px;text-transform:uppercase;'>congratulations</h1>";
        echo "<img src='gems.jpg' style='position:absolute;top:100px;left:100px;width:300px;border:2px solid red;border-radius:20px;height:200px;'>";
        echo "<h1 style='position:absolute;top:300px;left:50px;color:blue;'>you won 5 gems</h1>";
        echo "</div>";

    }
    else if($prize=="10gems"){
        echo "<div style='position:absolute;top:150px;left:200px;width:600px;height:400px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
        echo "<h1 style='color:white;position:absolute;top:20px;left:30px;text-transform:uppercase;'>congratulations</h1>";
        echo "<img src='gems.jpg' style='position:absolute;top:100px;left:100px;width:300px;border:2px solid red;border-radius:20px;height:200px;'>";
        echo "<h1 style='position:absolute;top:300px;left:50px;color:blue;'>you won 10 gems</h1>";
        echo "</div>";

    }
    else if($prize=="15gems"){
        echo "<div style='position:absolute;top:150px;left:200px;width:600px;height:400px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
        echo "<h1 style='color:white;position:absolute;top:20px;left:30px;text-transform:uppercase;'>congratulations</h1>";
        echo "<img src='gems.jpg' style='position:absolute;top:100px;left:100px;width:300px;border:2px solid red;border-radius:20px;height:200px;'>";
        echo "<h1 style='position:absolute;top:300px;left:50px;color:blue;'>you won 15 gems</h1>";
        echo "</div>";

    }
    else if($prize=="20gems"){
        echo "<div style='position:absolute;top:150px;left:200px;width:600px;height:400px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
        echo "<h1 style='color:white;position:absolute;top:20px;left:30px;text-transform:uppercase;'>congratulations</h1>";
        echo "<img src='gems.jpg' style='position:absolute;top:100px;left:100px;width:300px;border:2px solid red;border-radius:20px;height:200px;'>";
        echo "<h1 style='position:absolute;top:300px;left:50px;color:blue;'>you won 20 gems</h1>";
        echo "</div>";

    }
    else if($prize=="50gems"){
        echo "<div style='position:absolute;top:150px;left:200px;width:600px;height:400px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
        echo "<h1 style='color:white;position:absolute;top:20px;left:30px;text-transform:uppercase;'>congratulations</h1>";
        echo "<img src='gems.jpg' style='position:absolute;top:100px;left:100px;width:300px;border:2px solid red;border-radius:20px;height:200px;'>";
        echo "<h1 style='position:absolute;top:300px;left:50px;color:blue;'>you won 50 gems</h1>";
        echo "</div>";

    }
    else{
        echo "<div style='position:absolute;top:150px;left:200px;width:600px;height:400px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
        echo "<h1 style='color:white;position:absolute;top:20px;left:30px;text-transform:uppercase;'>better luck next time</h1>";
        echo "<i class='fa fa-thumbs-up' aria-hidden='true' style='position:absolute;top:120px;left:190px;color:yellow;font-size:200px;'></i>";
        echo "</div>";
    }

 }
 
 else if($status=="notplayed"){
    echo "<form action='trivianswers.php' method='post'>" ;
    echo "<div style='position:absolute;font-size:15px;top:130px;left:100px;width:400px;height:310px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
    echo "<img src='kohli.jpg' style='position:absolute;top:30px;left:50px;width:300px;height:200px;'>";
    echo "<h2 style='position:absolute;top:237px;left:45px;color:white;text-transform:uppercase;'>name:</h2>";
    echo "<input type='text' name='q1' style='position:absolute;top:240px;left:130px;width:230px;height:40px;padding:5px;outline:none;border:2px solid green;'>"; 
    echo"</div>";
    echo "<div style='position:absolute;font-size:15px;top:450px;left:100px;width:400px;height:310px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
    echo "<img src='dhoni.jpg' style='position:absolute;top:30px;left:50px;width:300px;height:200px;'>";
    echo "<h2 style='position:absolute;top:237px;left:45px;color:white;text-transform:uppercase;'>name:</h2>";
    echo "<input type='text' name='q2' style='position:absolute;top:240px;left:130px;width:230px;height:40px;padding:5px;outline:none;border:2px solid green;'>"; 
    echo"</div>";
    echo "<div style='position:absolute;font-size:15px;top:770px;left:100px;width:400px;height:310px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
    echo "<img src='gambir.jpg' style='position:absolute;top:30px;left:50px;width:300px;height:200px;'>";
    echo "<h2 style='position:absolute;top:237px;left:45px;color:white;text-transform:uppercase;'>name:</h2>";
    echo "<input type='text' name='q3' style='position:absolute;top:240px;left:130px;width:230px;height:40px;padding:5px;outline:none;border:2px solid green;'>"; 
    echo"</div>";
    echo "<div style='position:absolute;font-size:15px;top:1090px;left:100px;width:400px;height:310px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
    echo "<img src='dravid.webp' style='position:absolute;top:30px;left:50px;width:300px;height:200px;'>";
    echo "<h2 style='position:absolute;top:237px;left:45px;color:white;text-transform:uppercase;'>name:</h2>";
    echo "<input type='text' name='q4' style='position:absolute;top:240px;left:130px;width:230px;height:40px;padding:5px;outline:none;border:2px solid green;'>"; 
    echo"</div>";
    echo "<div style='position:absolute;font-size:15px;top:1410px;left:100px;width:400px;height:310px;background:black;opacity:1;border:2px solid white;border-radius:10px;'>";
    echo "<img src='raina.webp' style='position:absolute;top:30px;left:50px;width:300px;height:200px;'>";
    echo "<h2 style='position:absolute;top:237px;left:45px;color:white;text-transform:uppercase;'>name:</h2>";
    echo "<input type='text' name='q5' style='position:absolute;top:240px;left:130px;width:230px;height:40px;padding:5px;outline:none;border:2px solid green;'>"; 
    echo"</div>";
    echo "<input type='submit' style='position:absolute;top:1750px;left:110px;background:green;color:white;text-transform:uppercase;padding:10px;outline:none;border:2px solid black;font-size:20px;' value='submit' >";
    echo "</form>";
 
 }
 ?>
</body>
</html>