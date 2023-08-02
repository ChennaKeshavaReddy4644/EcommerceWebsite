<?php
 session_start();

 $user = $_SESSION["uname"];

  $id = $_GET["id"];

  $conn = mysqli_connect("localhost","root","","carts");

  $query1 = "select * from items where eid = '$id'";

  $result1 = mysqli_query($conn,$query1);

  $row = mysqli_fetch_assoc($result1);

  $name = $row["iname"];

  $price = $row["iprice"];

  $image = $row["image"];


    $query2 = "insert into product (name,pname,price,pimage) values ('$user','$name','$price','$image')";
  
    $result2 = mysqli_query($conn,$query2) or die("query failed");

    
    header("location: http://localhost/cart/home.php");
  
?>
</body>
</html>