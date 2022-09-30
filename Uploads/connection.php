<?php

$localhost = "localhost";
$dbname = "learningpanda";
$username = "deepakjongra";
$password = "deepak123";

$conn= new mysqli($localhost,$username,$password,$dbname);

if($conn == true){
    echo("connected");
}
else
echo("")


?>