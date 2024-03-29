<?php

$link=mysqli_connect("localhost","root","","booking");
$package_type=$_REQUEST['package_type'];
$number_of_guests=$_REQUEST['number_of_guests'];
$arrival_date=$_REQUEST['arrival_date'];
$leaving_date=$_REQUEST['leaving_date'];

$sql="insert into book values('$package_type','$number_of_guests','$arrival_date','$leaving_date')";

if(mysqli_query($link,$sql))
{
echo("Data Saved");
}
else
{
echo("Data Not Saved, Please Check");
}

?>