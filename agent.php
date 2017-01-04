<html>
<head>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
   $( function() {
     $( "#datepicker" ).datepicker();
   } );
   </script>
 </head>
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
    <form action="agent_code.php" method="post" name="form1" id="form1"><center><table><tr>
      <td>Agent Code:</td><td><input type="text" name="agentcode"></td>
      <td>Appointment Date:</td><td><input type="text" id="datepicker" name="a_date"></td>
      <td>First Name:</td><td><input type="text" name="fname"></td>
      <td>Middle Name:</td><td><input type="text" name="mname"></td>
    </tr><tr>
      <td>Last Name:</td><td><input type="text" name="lname"></td>
      <td>Team:</td><td><select name="team">
        <option value="0"><center>--Select Team Name--</center></option>
        <?php
          include("connect.php" );
              $teams=mysql_query("SELECT*from team group by team_name order by team_name ASC ");
              while($teamview=mysql_fetch_array($teams))
              {
              echo "<option value='".$teamview['id']."'>".$teamview['team_name']."</option>";
              }

              ?>
          </select></td></tr>
    </td></tr>
  </tr><tr><td><input type="submit"><input type="reset"></td></tr>
    </table></center></form>
    <?php
          $agent=mysql_query("select*from agent");
          echo "<center><table width='800' border='1'>
          <tr>
          <th colspan='9'>Agent Table</th>
          </tr>
          <tr>
          <th>Id</th>
          <th>Agent Code</th>
          <th>Appointment Date</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Team</th>
          <th colspan='2'>Action</th>
          </tr>";
          while($agentview=mysql_fetch_array($agent))
          {
          echo "<tr><td>".$agentview['id']."</td>";
          echo "<td>".$agentview['agentcode']."</td>";
          echo "<td>".$agentview['a_date']."</td>";
          echo "<td>".$agentview['fname']."</td>";
          echo "<td>".$agentview['mname']."</td>";
          echo "<td>".$agentview['lname']."</td>";
          $a=$agentview['team'];
          $teamss=mysql_query("SELECT*from team where id='$a'");
          while($b=mysql_fetch_array($teamss))
          {
          echo "<td>".$b['team_name']."</td>";
          }

          echo "<td><center><a href='edit.php?k=".$agentview['id']."'>Edit</center></a></td>";
          echo "<td><center><a href='edit.php?k=".$agentview['id']."'>Delete</center></a></td></tr>";
          }
          echo "</table></center>";
          ?>
</td>
    </tr><tr>
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
</html>
