<?php
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$cno=$_REQUEST["contactno"];
$dis=$_REQUEST["District"];
$msg=$_REQUEST["message"];

$servername="localhost";
$username="root";
$password="";


$conn=mysqli_connect($servername,$username,$password);
mysqli_select_db($conn,"WebProject");


    Mysqli_query($conn,"insert into user (name,email,contactno,District,message)values('$name','$email','$cno','$dis','$msg')"); 
    header("location:Team.html"); 



