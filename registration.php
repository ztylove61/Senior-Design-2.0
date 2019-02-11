<?php
session_start();
$con = mysqli_connect('localhost','root','password');
mysqli_select_db($con,'epic');
$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from user_accounts where Email = '$name' ";

$result = mysqli_query ($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "Email has been registered";
}

else
{
	$reg = "insert into user_accounts(Email,Password,Status) values ('$name','$pass','active')";
	mysqli_query($con, $reg);
	echo "Successfully registered";
	header('location:login.php');

}




?>
