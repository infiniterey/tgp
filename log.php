<?php
session_start();
$username=trim($_POST["username"]);
$password=trim($_POST["password"]);
if(empty($username) and empty($password))
{
echo "Please Fill the Form";
exit;
}
else if(empty($username))
{
echo "<font face='arial'><h2>Please Enter Your Username</h2></font>";
exit;
}
else if(empty($password))
{
echo "<font face='arial'><h2>Please Enter Your Password</h2></font>";
exit;
}
else
{
include("connect.php");
$users=mysql_query("select*from user where username='$username' and password='$password'");
$a=mysql_fetch_array($users);
$id=$a['id'];
$ad="admin";
//$user=$a['username'];
//$pass=$a['password'];
$usertype=$a['user_type'];
$find_count=mysql_num_rows($users);
if($find_count!=0)
{
	if($usertype==$ad)
	{
	$_SESSION["username"]=$username;
	$_SESSION["password"]=$password;
	header ("Location:admin.php");
	}
	else
	{
	$_SESSION["username"]=$username;
	$_SESSION["password"]=$password;
	header("location:salesperson.php");
	}
}
else
{
echo "<font face='arial'><h2>Invalid Username and Password</h2></font>";
exit;
}
}
?>
