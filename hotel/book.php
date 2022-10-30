<?php

$con = mysqli_connect('localhost','root');

if($con)
{
    echo "connection successful";
}
else
{
    echo "connection failed";
}

mysqli_select_db($con,'hotel');

$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$people = $_POST['people'];
$cin = $_POST['cin'];
$cout = $_POST['cout'];
$room = $_POST['room'];

$query = "INSERT INTO books (name,age,phone,email,people,cin,cout,room) VALUES ('$name','$age','$phone','$email','$people','$cin','$cout','$room')";

mysqli_query($con,$query);

?>