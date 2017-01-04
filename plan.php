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


    <td height="172" colspan="2" valign="top"><?php include("header.php"); ?></td>
  </tr>
  <tr>
  <td height="33" colspan="2" valign="top">
    <?php include("toolbar.php"); ?></td>
  </tr>
  <tr>
    <td><br><br>
    <form action="plan_code.php" method="post" name="form1" id="form1"><center><table><tr>
      <td>Plan Name:</td><td><input type="text" name="planname"></td>
      <td>Acronym:</td><td><input type="text" name="acronym"></td></tr>
    <tr><td colspan='2'><input type="submit"><input type="reset"></td></tr>
    </table></center></form>
<?php
include("connect.php" );
    $planview=mysql_query("select*from plan");
    echo "<center><table width='500' border='1'>
    <tr>
    <th colspan='5'>Plan Table</th>
    </tr>
    <tr>
    <th>Id</th>
    <th>Plan Name</th>
    <th>Acronym</th>
    <th colspan='2'>Action</th>
    </tr>";
    while($planarray=mysql_fetch_array($planview))
    {
    echo "<tr><td>".$planarray['id']."</td>";
    echo "<td>".$planarray['plan_name']."</td>";
    echo "<td>".$planarray['acronym']."</td>";
    echo "<td><center><a href='edit.php?k=".$planarray['id']."'>Edit</center></a></td>";
    echo "<td><center><a href='edit.php?k=".$planarray['id']."'>Delete</center></a></td></tr>";
    }
    echo "</table></center>";
    ?>
</td>
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
header("index.php");
}
?>
