<?php
$id="1";
include("connect.php");
$amount=$_POST['amounts'];
	$add=mysql_query("insert into delivery (del_fee) values('$amount')");	
	if($add)
	{
	"<a href='update_del.php'>click</a>";
	}
	else
	{
	echo "sory";
	}
?>