<?php 
session_start();
if(isset($_SESSION["username"]) and isset($_SESSION["password"]))
{
include("title.php");
?>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:80px;
	top:232px;
	width:146px;
	height:359px;
	z-index:1;
}
-->
</style>
</head>
<body bgcolor="#CCCCCC">
<center><table width="1000"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  <tr>
    <td height="172" colspan="2" valign="top"><?php include("header.php"); ?></td>
  </tr>
  <tr>
    <td height="33" colspan="2" valign="top"><?php include("toolbar.php"); ?></td>
  </tr>
  <tr>
     <td width="169" height="360" valign="top"><?php include("button_admin.php"); ?></td>
    <td width="802" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
 
    </tr>
  <tr>
    <td height="70" colspan="2" valign="top">
	<center><font size="1" face="arial"><?php include("footer.php"); ?></font></center>	</td>
    </tr>
</table>
</center>
</body>
</html>
<?php
}
else
{
header("location:index.php");
}
?>