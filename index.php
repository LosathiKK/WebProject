<?php

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['country']) && isset($_POST['subject'])) {
    include 'config.php';

    function validate($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $firstname = validate($_POST['firstname']);
    $lastname = validate($_POST['lastname']);
    $email = validate($_POST['email']);
    $country = validate($_POST['country']);
    $subject = validate($_POST['subject']);


    if(empty($firstname) || empty($lastname) || empty($email) || empty($country) || empty($subject)) {
      header("Location: index.php");
        } else {
            $sql = "insert into contact(firstname, lastname, email, country, subject) values('$firstname','$lastname','$email','$country','$subject')";
            $res = mysqli_query($conn, $sql);

            if($res) {
              echo "";
            } else {
               echo "Your message could not be sent!";
            }
          }
} else {
  header("Location: index.php");
}



$sname = "localhost";
$uname = "root";
$password = "";
$dbName = "subscriber";

$conn = mysqli_connect($sname, $uname, $password, $dbName);

if(!$conn) {
  echo "Connection faild!";
  exit();
}
?>