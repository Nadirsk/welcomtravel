<?php
$server = "localhost";
$username = "root";
$password = "";

//create Database connection
$con = mysqli_connect($server, $username, $password);
// check databse connection
if(!$con){
    die("This is not connected to the database" . mysqli_connect_error());
}
 echo"Successfully connected to the database";
//insert data in server

$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$other = $_POST["other"];
$sql = "INSERT INTO `trip'.'trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
// echo $sql;

if($con->query($sql)){
    echo "Successfuly inserted";
    
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="img" src="Bandra.jpg" alt="natural">
    <div class="container">
        <h1>Welcome to IIT Kharagur US Trip From</h1>
        <p class="">Enter your details to confirm your participation in the trip</p>
        <P style="color: rgb(20, 207, 20);">Thanks for submitting your form. we are happy to see you joining for the US Trip</P>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" maxlength="10" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="other" id="Other" cols="20" rows="10" placeholder="Enetr Other Details Here"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js">
        
    </script>
    
</body>
</html>