<?php
if(isset($_POST['name'])){


$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to  this database failed due to". mysqli_connect_error());
    


}
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$sql = "INSERT INTO `tree`. `tree` ( `first_name`, `last_name`, `email`, `password`, `confirm_password`, `date_time`) 
VALUES ( '$first_name', '$last_name',
 '$email', '$password', '$confirm_password', 'current_timestamp());";
//echo $sql;

if($con->query($sql) == true){
    //echo"Successful insert";
}

else{
   echo "ERROR: $sql  <br> $con->error";
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="Plant.css">
</head>
<body>
     <!-- singup section-->

<div class="signup-box" id="fas fa-user-circle">
    <h1> Sign Up</h1>
    <h4> it's free and only takes a minutes</h4>
    <form action="signup.php" method="post">
        <label>
            first name
        </label>
        <input type="text" placeholder="">
        <label>
            last name
        </label>
        <input type="text" placeholder="">
        <label>
            Email
        </label>
        <input type="email" placeholder="">
        <label>
            password
        </label>
        <input type="password" placeholder="">
        <label>
            confirm password
        </label>
        <input type=" password" placeholder="">
        <input type="submit" class="btn btn-primary w-100" value="signup">

    </form>
    <p> by click the Sign Up button, yo agree to our <br>
    <a href="#">Terms and Condition</a> and <a href="#">policy </a>

    
</p>



</div>
<p class="para-2"> Already have an account? <a href="login.html">login here </a></p>

<!-- end singup section-->
</body>
</html>