<?php
session_start();
if(isset($_SESSION["username"]) and isset($_SESSION["password"]))
{
include("title.php");
?>
<body bgcolor="#CCCCCC">

<div align="center">

<table width="1000" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  <tr>

    <td height="172" colspan="2" valign="top"><?php include("base/header.php"); ?></td>
  </tr>
  <tr>

    </tr>
  <tr>
    <td height="70" colspan="2" valign="top">
	<center><font size="1" face="arial"><?php include("footer.php"); ?></font></center>	</td>
    </tr>
</table></div>
</center>
</script>
</body>
</html>
<?php
}
else
{
header("location:index.php");
}
?>
