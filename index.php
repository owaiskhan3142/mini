<!DOCTYPE html>
<html>
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    /* background-image: url('./scott-graham-5fNmWej4tAA-unsplash.jpg'); */
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }

  * {
    box-sizing: border-box;
  }

  /* Full-width input fields */
  input[type=text],
  input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  /* Add a background color when the inputs get focus */
  input[type=text]:focus,
  input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for all buttons */
  button {
    background-color: rgb(90, 83, 153);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  button:hover {
    opacity: 1;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
  }

  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn,
  .signupbtn {
    float: left;
    width: 50%;
  }

  /* Add padding to container elements */
  .container2 {
    padding: 16px;
  }

  /* The Modal (background) */
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%;
    /* Could be more or less, depending on screen size */
  }

  /* Style the horizontal ruler */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
  }

  .close:hover,
  .close:focus {
    color: #f44336;
    cursor: pointer;
  }

  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {

    .cancelbtn,
    .signupbtn {
      width: 100%;
    }
  }
</style>
<link rel="stylesheet" href="style.css">

<body>
  <div class="backgrou">
    <div class="nav">
      <ul>
        <li><a href="./index.html">Home</a></li>
        <li><a href="./index.html">Find Tutors</a></li>
        <li><a href="./Contact.html">Contact</a></li>
        <li style="float:right"><a class="active" href="./Signup.html">Login/Sign up</a></li>
      </ul>
    </div>
    <div>
      <form class="modal-content" action="./index.php" method ="post">
        <div class="container2">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>

          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="password_repeat" required>

          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>

          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <a href="./index.html"><button type="button" class="cancelbtn">Cancel</button></a>
            <button type="submit" name="submit" class="signupbtn">Sign Up</button>
            <a href="./Login.html"><button type="button" class="signupbtn" style="width: 100%;">Already a member?
                Login Here</button></a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>

  </script>

</body>

</html>
<?php
if(isset($_POST['submit'])){
    
    $server = "localhost";
    $username = "root";
    $password ="";

    $con = mysqli_connect($server,$username,$password,"Tutorio");

    if(!$con){
        die("Connection failed!". mysqi_connect_error());
    }
    
    $fname = $_POST['email'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    //echo $sql;

    if($con->query($sql) == true){
        header("Location: ");
    }
    else{
        echo "error, $sql <br> $con->error()";
    }

    $con->close();
}
?>
