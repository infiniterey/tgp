<?php
session_start();
$prod_item=trim($_POST["item_no"]);
$prod_name=trim($_POST["name"]);
$prod_quantity=trim($_POST["quantity"]);
$prod_price=trim($_POST["price"]);
include("connect.php");
$find=mysql_query("select*from products where item_no='$prod_item'");
$query=mysql_num_rows($find);
	if($query!=0)
	{
	echo"<h2>item number is already exist</h2>"; 
	exit;
	}
	else
	{
	$add=mysql_query("insert into products(item_no,name,quantity,price)values('$prod_item','$prod_name','$prod_quantity','$prod_price')");
	if($add)
	{
	header ("Location:product.php"); 
	}
	else
	{
	echo"sory";
	}
	}
?>