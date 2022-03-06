<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console"></h1>
</div>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2>User Registration Form</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" name="firstname" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Email or phone" name="email" required=""/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required=""/>
                    </div>
                    <div>
                    <input type="text" class="form-control" placeholder="Gender" name="gender" required=""/>
                    
                    </div>
                    <div>
                    <input type="text" class="form-control" placeholder="Age" name="age" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Contact" name="contact" required=""/>
                    </div>
                    <div>
                    <input type="text" class="form-control" placeholder="Subject" name="subject" required=""/>
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>

                </form>
            </section>

            <?php
            if(isset($_POST["submit1"]))
            {
                
                mysqli_query($link,"insert into student_registration values('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]','$_POST[gender]','$_POST[age]','$_POST[contact]','$_POST[subject]')");
                
                ?>
                <div class="alert alert-success col-lg-12  col-lg-push-0">
                    registration successfully,you will get email when your account is approved
                </div>
            <?php

            }
            ?>

    </div>

   
   


</body>
</html>