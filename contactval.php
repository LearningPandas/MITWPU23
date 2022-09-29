<?php

require("connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$feedback_msg = $_POST['message'];

$sql = " INSERT INTO `feedback` VALUES ('','$name', '$email', '$feedback_msg') ";

if(mysqli_query($conn,$sql)){
    echo '<script>alert("Feedback Sent!!!!!")</script>';
    header('Refresh:0; url= contact.html');
}

?>
