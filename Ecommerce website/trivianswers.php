<?php

session_start();
$pname=$_SESSION["uname"];
$answero=$_POST["q1"];
$answert=$_POST["q2"];
$answerth=$_POST["q3"];
$answerf=$_POST["q4"];
$answerfi=$_POST["q5"];

$totalcorrectanswers=0;
if($answero=='kohli'){
    $totalcorrectanswers+=1;
}
if($answert=='dhoni'){
    $totalcorrectanswers+=1;
}
if($answerth=='gambir'){
    $totalcorrectanswers+=1;
}
if($answerf=='dravid'){
    $totalcorrectanswers+=1;
}
if($answerfi=='raina'){
    $totalcorrectanswers+=1;
}
if($totalcorrectanswers==5){
$conn=mysqli_connect("localhost","root","","carts") or die("connection failed");
$parr=array("30pvoucher","50pvoucher","100voucher","250voucher","300voucher","5gems","10gems","15gems","20gems","50gems");

$num=rand(0,11);
$prize=$parr[$num];
if($prize=="30pvoucher" || $prize=="50pvoucher" || $prize=="100voucher" || $prize=="250voucher" || $prize=="300voucher"){
$id=rand(1000,9999);
$query1="update trivia set status='played',prize='$prize' where tname='$pname'";
$query2="insert into voucher (name,voucherid,voucherprice) values ('$pname','$id','$prize')";
mysqli_query($conn,$query1) or die("query failed");
mysqli_query($conn,$query2) or die("query failed");
header("location: http://localhost/cart/trivia.php");

}
else if($prize=="5gems" || $prize=="10gems" || $prize=="15gems" || $prize=="20gems" || $prize=="50gems"){
    $query1="update trivia set status='played',prize='$prize' where tname='$pname'";
    $query2="insert into coins (name,coins) values ('$pname','$prize')";
    mysqli_query($conn,$query1) or die("query failed");
    mysqli_query($conn,$query2) or die("query failed");
    header("location: http://localhost/cart/trivia.php");
    
    }
}
else if($totalcorrectanswers<5){
    $conn=mysqli_connect("localhost","root","","carts") or die("connection failed");
    
    $query3="update trivia set status='played',prize='' where tname='$pname'";
    mysqli_query($conn,$query3) or die("query failed");
    header("location: http://localhost/cart/trivia.php");
    
}



?>