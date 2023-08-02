<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style="background:url('cart5.jpg');">
<h1 style="z-index:105;position:fixed;top:0;left:40%;text-transform:uppercase;color:white;">shopping buzzz</h1>
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
   
   echo" <a href='delete.php' style='border-radius:5px;z-index:105;position:fixed;top:40px;right:150px;font-size:30px;color:white;text-transform:uppercase;text-decoration:none;'><i class='fa fa-trash-o' aria-hidden='true'></i></a>";

  }
?>
<form action="<?php $_SERVER["PHP_SELF"];?>" method="post">

  
  <label for="id" class="col-sm-2" style="position:absolute;top:23%;left:50px;text-transform:uppercase;font-size:25px;">product id:</label>
  
  
  <input type="text" name="id" placeholder="id" style="position:absolute;top:30%;left:50px;width:300px;padding:10px;background:black;color:white;border:2px solid red;outline:none;border-radius:5px;">

  <input type="submit" name="delete" value="delete" style="position:absolute;top:40%;left:50px;width:100px;height:40px;color:white;font-size:25px;background:red;outline:none;border:2px solid black;">

</form>
</body>
<?php
  
  if(isset($_POST["delete"])){

     $id = $_POST["id"];

     if($id != ""){

     $conn = mysqli_connect("localhost","root","","carts") or die("connection failed");

     $query = "delete from items where eid = '$id'";

     $result = mysqli_query($conn,$query) or die("query failed");

     if($result){
         header("location: http://localhost/cart/home.php");

     }
     else{
         echo "something went wrong";
     }
    }


  }






?>

</html>