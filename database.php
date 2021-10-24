<?php
if(isset($_POST['submit'])){
    
    $server = "localhost";
    $username = "root";
    $password ="";

    $con = mysqli_connect($server,$username,$password,"Tutorio");

    if(!$con){
        die("Connection failed!". mysqi_connect_error());
    }
    

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];
    
    $sql = "INSERT INTO `members` (`id`, `email`, `password`, `password_repeat`, `dt`) VALUES (NULL,'$email', '$password', '$password_repeat', current_timestamp());" ;
    //echo $sql;

    if($con->query($sql) == true){
        header("Location: /DB-Project/temp_stay.html");
    }
    else{
        echo "error, $sql <br> $con->error()";
    }

    $con->close();
}
?>