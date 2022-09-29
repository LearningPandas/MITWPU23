<?php

include("connection.php");

$uspass = $_POST['uspswd'];
$usname = $_POST['usname'];

$sql2 = "select * from learner where username= '$usname' and password= '$uspass' ";

$res = mysqli_query($conn,$sql2);
$count = mysqli_num_rows($res);

if($count>0){
    header('location: dashboard.php');
    session_start();
    $_SESSION["username"] = $usname;
    $_SESSION["password"] = $uspass;
}
else{
echo '<script>alert("Incorrect Username Or Password")</script>';
//echo('incorrect pass');
header('Refresh: 0; url= login.php');
}
?>

