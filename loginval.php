<?php

$localhost = "localhost";
$dbname = "learningpanda";
$username = "deepakjongra";
$password = "deepak123";

$conn= new mysqli($localhost,$username,$password,$dbname);

$username = $_POST["username"];
$email = $_POST["email"];
$pass = $_POST["pswd"];

$sql = "INSERT INTO `learner` VALUES ('','$username','$pass','$email')"; 

try{
if(mysqli_query($conn,$sql)){
    echo("value entered");
}
else
echo("error inserting");
}
catch(mysqli_sql_exception){
    echo '<script>alert("Incorrect Username Or Password")</script>';
}
session_start();
mysqli_close($conn);

header('location: index.php');
?>
