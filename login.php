<!--

?ph
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN FORM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="login.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>
<body>

<div class="bg-img">
  <div class="content">
    <header>Login Form</header>
    <form action="#" method="post" name="form1">
      <div class="field">
        <span class="fa fa-user"></span>
        <input type="text" required placeholder="Email or Phone">
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="password" class="pass-key" required placeholder="Password">
        <span class="show">SHOW</span>
      </div>
      <div class="pass">
        <a href="#">Forgot Password?</a>
      </div>
      <div class="field">
        <input type="submit" value="LOGIN" name="submit1">
      </div>
    </form>
    <div class="login">Or login with</div>
    <div class="links">
      <div class="facebook">
        <i class="fab fa-facebook-f"><span>Facebook</span></i>
      </div>
      <div class="instagram">
        <i class="fab fa-instagram"><span>Instagram</span></i>
      </div>
    </div>
    <div class="signup">Don't have account?
      <a href="signup.html">Signup Now</a>
    </div>
  </div>
</div>



<script type="text/javascript" src="login.js"></script>

</body>
</html>
