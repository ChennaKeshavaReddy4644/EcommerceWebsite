<?php

  $id = $_GET["id"];

  $conn = mysqli_connect("localhost","root","","carts");

  $query = "delete from product where pid = '$id'";

  $result = mysqli_query($conn,$query);

  if($result){

      header("location: http://localhost/cart/cart.php");

  }
  else{

     echo "<script>alert('something went wrong');</script>";
  }

?>