<?php

$link=mysqli_connect("localhost","root","","register");

$user_name=$_REQUEST['user_name'];
$email=$_REQUEST['email'];
$tel_no=$_REQUEST['tel_no'];
$address=$_REQUEST['address'];
$password=$_REQUEST['password'];

$sql="insert into customers values('$user_name','$email','$tel_no','$address','$password')";

if(mysqli_query($link,$sql))
{
echo ("Registration Successfully...!");
}
else
{
echo ("Data Not Inserted");
}

?>