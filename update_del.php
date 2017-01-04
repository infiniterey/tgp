<?php 
if(isset($_SESSION["username"]) and isset($_SESSION["password"]))
{
include("title2.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.c {
border-bottom:none;
}
-->
</style>
</head>

<body>
  <table width="190" border="2">
  <form action="del_fee.php" method="get"> 
  <tr>
    <th colspan="2">UPDATE DELIVERY FEE</th>
  </tr>
  <tr><td>Amount</td>
  <td><input name="amounts" type="text" /></td></tr>
  <tr>
  <td colspan="2"><center><input name="amount" value="UPDATE"type="button" /></center></td></tr>
  </form><tr><td colspan="2">
     <blink> <?php
include("connect.php");
$del=mysql_query("select*from delivery");
echo"<table>
<tr>";
while($a=mysql_fetch_array($del))
	{
	echo"<tr><td>".$a['del_fee']."</td><tr>";
	}
	echo "</table>";
	?></blink></td></tr></table>
  </div>
</body>
</html>
<?php
}
else
{
header("location:index.php");
}
?>