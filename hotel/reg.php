<?php

$con = mysqli_connect('localhost','root');

if($con)
{
  //  echo "connection successful";
}
else
{
    //echo "connection failed";

}

mysqli_select_db($con,'hotel');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$pass = $_POST['pass'];

$query = "INSERT INTO regs (name,phone,email,password,pass) VALUES ('$name','$phone','$email','$password','$pass')";

mysqli_query($con, $query);

if($password!=$pass)
{
    echo "re type password";
}
else
{
    echo "connection successful";
}

?>