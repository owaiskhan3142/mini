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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    ul {
        display: flex;
        flex-direction: row;
        list-style-type: none;
        margin: 0;
        padding: 0%;
        background-image: red;
}
</style>
<body>
<ul>
  <li><a href="./signup.php">Signup</a></li>
  <li><a href="./login.php">Login</a></li>
  <li><a href="#contact">Book a Ticket</a></li>
</ul>

</body>
</html>