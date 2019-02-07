<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'epic');
$name = $_POST['tool_id'];
$pass = $_POST['tool_name'];
$ID = $_POST['locker_id'];

$s = "select * from tools where Tool_Num = '$name' ";

$result = mysqli_query ($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "item already in database";
}

else
{
	$reg = "insert into tools(Tool_Num,Tool_Name,Locker_Num,Status) values ('$name','$pass','$ID','Available')";
	mysqli_query($con, $reg);
	//echo "Successfully added items";
	header('location:locker.php');

}




?>