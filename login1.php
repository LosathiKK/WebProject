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

    <title>Student Login Form | LMS </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">A/L Learn</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="post">
            <h1>User Login Form</h1>

            <div>
                <input type="text" name="email" class="form-control" placeholder="email or phone" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit1" value="Login">
                <a href="studentprofile.html"> login </a>
                <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">New to site?
                    <a href="signup1.php"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>
</div>
<?php
if(isset($_POST["submit1"]))
{
  $count=0;
  $res=mysqli_query($link,"select * from student_registration where email='$_POST[email]' && password = '$_POST[password]'" );
  $count=mysqli_num_rows($res);
  
  if($count==0)
  {
    ?>
    <div class="alert-danger col-lg-6 col-lg-push-3">
       <strong style="color:white">invalid</strong> email or password.
       </div>
<?php
    
  }
  else
  {
    ?>
    <script type="text/javascript">
      window.location="studentprofile.html"
      </script>
      <?php
  }
}



?>

</body>
</html>