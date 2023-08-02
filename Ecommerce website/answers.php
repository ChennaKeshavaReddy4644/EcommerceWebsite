<?php

session_start();
$pname=$_SESSION["uname"];
$answero=$_POST["q-1-answers"];
$answert=$_POST["q-2-answers"];
$answerth=$_POST["q-3-answers"];
$answerf=$_POST["q-4-answers"];
$answerfi=$_POST["q-5-answers"];

$totalcorrectanswers=0;
if($answero=='A'){
    $totalcorrectanswers+=1;
}
if($answert=='C'){
    $totalcorrectanswers+=1;
}
if($answerth=='C'){
    $totalcorrectanswers+=1;
}
if($answerf=='B'){
    $totalcorrectanswers+=1;
}
if($answerfi=='C'){
    $totalcorrectanswers+=1;
}
if($totalcorrectanswers==5){
$conn=mysqli_connect("localhost","root","","carts") or die("connection failed");
$parr=array("30pvoucher","50pvoucher","100voucher","250voucher","300voucher","5gems","10gems","15gems","20gems","50gems");

$num=rand(0,10);
$prize=$parr[$num];
if($prize=="30pvoucher" || $prize=="50pvoucher" || $prize=="100voucher" || $prize=="250voucher" || $prize=="300voucher"){
$id=rand(1000,9999);
$query1="update quiznight set status='played',prize='$prize' where pname='$pname'";
$query2="insert into voucher (name,voucherid,voucherprice) values ('$pname','$id','$prize')";
mysqli_query($conn,$query1) or die("query failed");
mysqli_query($conn,$query2) or die("query failed");
header("location: http://localhost/cart/quiz.php");

}
else if($prize=="5gems" || $prize=="10gems" || $prize=="15gems" || $prize=="20gems" || $prize=="50gems"){
    $query1="update quiznight set status='played',prize='$prize' where pname='$pname'";
    $query2="insert into coins (name,coins) values ('$pname','$prize')";
    mysqli_query($conn,$query1) or die("query failed");
    mysqli_query($conn,$query2) or die("query failed");
    header("location: http://localhost/cart/quiz.php");
    
    }
}
else if($totalcorrectanswers<5){
    $conn=mysqli_connect("localhost","root","","carts") or die("connection failed");
    
    $query3="update quiznight set status='played',prize='' where pname='$pname'";
    mysqli_query($conn,$query3) or die("query failed");
    header("location: http://localhost/cart/quiz.php");
    
}



?>