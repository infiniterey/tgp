<?php
include("title.php");
?>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:206px;
	height:159px;
	z-index:1;
	left: 412px;
	top: 320px;
	padding:0px;
	background-color:#CCCCCC;
	border-style:groove;
}
.bg
{
	background-color:#0033CC;
}
.style5 {color: #FF0000}
.style6 {color: #000000}
-->
</style>
<body bgcolor="#CCCCCC">
<center>

    <table width="1000" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <!--DWLayoutTable-->
      <tr>
        <td width="800" height="172" valign="top"><?php include("header.php"); ?></td>
    </tr>
      <tr>
        <td height="33" valign="top"><img src="images/toolbar.png" width="999" height="33"></td>
    </tr>
      <tr>
        <td height="360" valign="top">
<div id="Layer1">
  <center>
<form id="form1" name="form1" method="post" action="log.php">
<table width="192">
<tr><td colspan="2"><center class="style6">
  <font size="+3" face="harrington"><b>Log In</b></font>
</center>
</td>
</tr>
<tr><td colspan="2"><center>
  <font size="1" face="arial"><span class="style5">Enter Your Username and Password</span></font>
</center></td></tr>
<tr><td width="62" height="24">
Username:</td><td width="142" valign="top"><input type="text" name="username" size="17"/></td>
</tr>
<tr><td height="24">
Password:</td>
<td valign="top"><input type="password" name="password" size="17"/></td>
</tr>
<tr><td height="26" colspan="2" valign="top"><center>
<input type="submit" name="log_in" value="Log In" />
</center></td>
</tr>
</table>
</form></center></div>
</td>
      </tr>
      <tr>
        <td height="70" valign="top">
        <center><font size="1" face="arial"><?php include("footer.php"); ?></font></center>	</td>
      </tr>
    </table>
  </div>
</center>
</body>
</html>
