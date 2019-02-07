<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'epic');
$pass = $_POST['tool_name'];
$s = "select * from tools where Tool_Name = '$pass' ";
$checker = "select Status from tools where Tool_Name ='$pass'";
$check = mysqli_query($con,$checker);
$row = $check->fetch_assoc();
$result = mysqli_query ($con,$s);
$num = mysqli_num_rows($result);
if($row["Status"]=="Available")
{
	echo "Sorry the item is in our box";
}
else{
	 $reg = "UPDATE tools SET Status='Available'WHERE Tool_Name = '$pass' ";
	mysqli_query($con, $reg);
	//echo "Successfully added items";
	header('location:locker.php');
}
?>