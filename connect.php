<html>
    <head></head>
    <body>
        <?php
        $host="localhost";
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $birthday=$_POST["birthday"];
        $gender=$_POST["gender"];
        $ID_NO=$_POST["ID_NO"];
        $pnumber=$_POST["pnumber"];
        $email=$_POST["email"];
        $password=$_POST["pwd"];
        $subject=$_POST["subject"];

        

        $con=mysqli_connect($host,"root","","webproject");
        $sql1="INSERT INTO signup(firstname,lastname,birthday,gender,id_no,pnumber,email,password,subject) VALUES('$fname','$lname','$birthday','$gender','$ID_NO','$pnumber','$email','$password','$subject')";
        if($con){
            mysqli_query($con,$sql1);
            echo "successfully regisration....!";
        }else{
            echo "connection to DB failed";
        }
    

        ?>
    </body>
</html>