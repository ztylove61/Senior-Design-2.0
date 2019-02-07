<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'epic');
$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from user_accounts where Email = '$name' && Password = '$pass' ";

$result = mysqli_query ($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	header("location:locker.php");
}

else
{
	header("location:login.php");

}




?> 