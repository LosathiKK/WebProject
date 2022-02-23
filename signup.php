<?php
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Dob = $_POST['Dob'];
    $Address = $_POST['Address'];
    $ContacNumber = $_POST['ContacNumber'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Subject = $_POST['Subject'];

    //database connection
    $conn =new mysqli('localhost','root','','userdb');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error);

    }
    else{
        $stmt = $conn->prepare("insert into registration(FirstName,LastName,Dob,Address,ContacNumber,Gender,Email,Password,Subject)
        values(?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssissss",$FirstName,$LastName,$Dob,$Address,$ContacNumber,$Gender,$Email,$Password,$Subject);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
    }