<?php

$con = mysqli_connect('localhost','root');

if($con)
{
    echo "connection sus";
}
else
{
    echo "con failed";
}

mysqli_select_db($con,'hotel');

$name = $_POST['name'];
$phone = $_POST['phone'];
$amount = $_POST['amount'];
$card_number = $_POST['card_number'];
$expiry_date = $_POST['expiry_date'];
$cvv = $_POST['cvv'];

$query = "INSERT INTO  pay (name,phone,amount,card_number,expiry_date,cvv) VALUES ('$name','$phone','$amount','$card_number','$expiry_date','$cvv')";

mysqli_query($con,$query);

?>
