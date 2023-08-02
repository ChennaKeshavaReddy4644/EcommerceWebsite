<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style="background-image:url('cart.jpg');">
<i class="fa fa-user-circle" aria-hidden="true" style="z-index:10;opacity:1;position:absolute;top:19%;left:45%;color:white;font-size:70px;background:red;border-top:2px solid white;border-left:2px solid white;border-right:2px solid white;border-bottom:2px solid red;border-radius:50%;color:blue;text-align:center;height:70px;"></i>

    <form action=" <?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="usname" placeholder="username" style="position:absolute;top:33%;left:33%;width:350px;padding:10px;border-radius:10px;z-index:100;border:2px solid red;outline:none;">
    <input type="password" name="password" placeholder="password" style="position:absolute;top:43%;left:33%;width:350px;padding:10px;border-radius:10px;z-index:100;border:2px solid red;outline:none;">
    <input type="submit" value="login" name="submit" style="position:absolute;top:53%;left:34%;width:70px;padding:10px;color:white;font-size:20px;background:rgb(255,0,0);border-radius:10px;z-index:200;border:2px solid white;outline:none;">
    </form>
    <a href="register.php" style="color:white;font-size:20px;position:absolute;top:65%;left:43%;z-index:200;">register here?</a>
   <div style="position:absolute;top:28%;left:30%;width:500px;height:300px;background:black;border:2px solid white;border-radius:10px;opacity:0.7;"></div>
    <?php 
    session_start();

   if(isset($_POST["submit"])){ 
       
         $usname = $_POST["usname"];
         $password = $_POST["password"];

        if($usname == "" || $password == "" ){

            echo "<script>alert('enter username and password');</script>";
        }
        else{

            $conn = mysqli_connect("localhost","root","","carts");

            $query = "select * from login where uname = '$usname' and password = '$password' ";
    
            $result = mysqli_query($conn,$query) or die("query failed");
    
            $row = mysqli_num_rows($result);
            
            if($row == 1){

                $_SESSION["uname"] = $usname;
                 
                $user  = $_SESSION["uname"];

                $login_user = "select * from login where uname = '$user' ";

                $run_user = mysqli_query($conn,$login_user) or die("query failed");


                header("location: http://localhost/cart/home.php");
            }
           mysqli_close($conn);
       }
        
        }
        
?>
</body>
</html>