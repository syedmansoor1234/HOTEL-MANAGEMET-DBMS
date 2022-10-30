<?php

$con = mysqli_connect('localhost','root');

if($con)
{
    echo "connection successful";
}
else 
{
    echo "connection failed ";
}

mysqli_select_db($con,'hotel');

$name = $_POST['name'];
$password = $_POST['password'];

$query = "INSERT INTO login (name,password) VALUES ('$name','$password')";

mysqli_query($con,$query);

?>