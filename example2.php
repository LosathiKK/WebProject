

<!DOCTYPE html>
<html>
    <style>
        *{
            box-sizing: border-box;
        }
        input[type=text],input[type=date],input[type=password],input[type=email],input[type=number], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 10px;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          font-size: large;
          border-color: blue;
    }
    input[type=submit] {
          width: 100%;
         background-color: #4CAF50;
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         border-radius: 4px;
         cursor: pointer;
}
lable {
    font-size: large;

}
input[type=submit]:hover {
  background-color: #45a049;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

    </style>
    
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>signup</title>

    </head>
    <body style="background-image: url('beautiful-woman-studying-online-home_109710-3281.jpg');
               background-repeat: no-repeat;
               background-size:cover;
               background-attachment: fixed;
               background-position: top right;
               opacity: 0.8;">

        <div class="transbox" style="  width:50%;  height: 50%; margin-left:auto; margin-right: auto; margin-top: auto; margin-bottom: auto;
               background-color: #ffffff;
               border: 1px solid black;
               opacity: 0.8;
               ">
            <h1 style="text-align: center;">SIGNUP FORM</h1>
            <form action="connect.php" target="_blank" method="post" style="width: 50%; margin-left: auto; margin-right: auto;" >
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" placeholer="your first name"><br><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="birthdate">birthday:</label><br>
                <input type="date" id="birthday" name="birthday"><br><br>
                <label for="gender">Gender:</label><br>
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="femail">Femail</option>
                    <option value="other">Other</option>
                  </select> <br><br>
                <label for="ID_NO">ID NO:</label><br>
                <input type="text" id="lname" name="ID_NO"><br><br>
                <label for="phn">Phone No:</label><br>
                <input type="number" id="phn" name="fname"><br><br>
                <label for="email">Email:</label><br>
                <input type="email" id="emai" name="email"><br><br>
                <label for="pswd">Password:</label><br>
                <input type="password" id="pwd" name="pwd"><br><br>
                <label for="subject">Subject:</label><br>
                <select id="subject" name="subject">
                    <option value="maths">Maths</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                  </select> <br><br>


                <input type="submit" value="Submit">


                
                
                
            </form>




        </div>
        

        


    </body>
    
</html>