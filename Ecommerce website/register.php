<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <h1>register</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        <input type="text" name="uname" placeholder="username">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="text" name="phone" placeholder="phonenumber">
        <input type="submit" value="submit" name="submit" style="position:absolute;top:70%;left:43%;color:white;font-size:20px;width:100px;border-radius:10px;height:50px;border:2px solid white;background:green;">
    </form>
    <div style='opacity:0.8;border:2px solid black;border-radius:10px;position:absolute;top:15%;left:32%;width:400px;height:450px;background:violet;z-index:-10;'></div>
</body>
<?php

    if(isset($_POST["submit"])){


        $uname = $_POST["uname"];
        $uemail = $_POST["email"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];

        if($uname != '' && $uemail != "" && $password != "" && $phone != ""){

        $conn = mysqli_connect("localhost","root","","carts");

        $query = "insert into login (uname,uemail,phone,password) values ('$uname','$uemail','$phone','$password')";

        $result = mysqli_query($conn,$query);

        if($result){
           
            header("location: http://localhost/cart/login.php");

        }
        else{
          
            echo "something went wrong";

        }
    }

}
?>
</html>