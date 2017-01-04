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
    <form action="teamcode.php" method="post" name="form1" id="form1"><center><table><tr>
      <td>Team Name:</td><td><input type="text" name="team"></td>
      <td>Manager</td><td><input type="text" name="manager"></td>
    </tr><tr><td><input type="submit"><input type="reset">
    </table></center></form>
  <?php
    include("connect.php" );
        $team=mysql_query("select*from team");
        echo "<center><table width='500' border='1'>
        <tr>
        <th colspan='5'>Team Table</th>
        </tr>
        <tr>
        <th>Id</th>
        <th>Team Name</th>
        <th>Manager</th>
        <th colspan='2'>Action</th>
        </tr>";
        while($teamview=mysql_fetch_array($team))
        {
        echo "<tr><td>".$teamview['id']."</td>";
        echo "<td>".$teamview['team_name']."</td>";
        echo "<td>".$teamview['manager']."</td>";
        echo "<td><center><a href='edit.php?k=".$teamview['id']."'>Edit</center></a></td>";
        echo "<td><center><a href='edit.php?k=".$teamview['id']."'>Delete</center></a></td></tr>";
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
