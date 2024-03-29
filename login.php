<?php

$link=mysqli_connect("localhost","root","","login");
$user_name=$_REQUEST['user_name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

$sql="insert into clients values('$user_name','$email','$password')";

if(mysqli_query($link,$sql))
{
echo("Login Successfully...!");
}
else
{
echo("Data Not Inserted");
}

?>