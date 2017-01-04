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
    <form action="dailyprod_add.php" method="post" name="form1" id="form1"><center><table><tr>
      <td>Transaction Date:</td><td><input type="text" id="datepicker" name="tdate" placeholder="Click the textbox"></td>
      <td>Last Name:</td><td><input type="text" name="lname" placeholder="Last Name"></td>
      <td>First Name:</td><td><input type="text" name="fname" placeholder="First Name"></td>
      <td>Policy Number:</td><td><input type="text" name="policy_no" placeholder="Policy Number"></td>
    </tr><tr>
      <td>OR number:</td><td><input type="text" name="or_no" placeholder="OR Number"></td>
      <td>Face Amount:</td><td><input type="text" name="f_amount"placeholder="Face Amount"></td>
      <td>Premium:</td><td><input type="text" name="premium"placeholder="Premium"></td>
      <td>Agent:</td><td><select name="agentss">
        <option value="0"><center>--Select Agent Name--</center></option>
        <?php
          include("connect.php" );
              $agent=mysql_query("SELECT*from agent  group by lname order by lname ASC ");
              while($agentview=mysql_fetch_array($agent))
              {
              echo "<option value='".$agentview['id']."'>".$agentview['lname']." , ".$agentview['fname']."</option>";
              }

              ?>
          </select></td></tr>
      <tr>
      <td>Plan:</td><td><select name="plannes">
        <option value="0"><center>--Select Type of Plan--</center></option>
        <?php
          include("connect.php" );
              $plan=mysql_query("SELECT*from plan group by plan_name order by plan_name ASC ");
              while($planview=mysql_fetch_array($plan))
              {
              echo "<option value='".$planview['id']."'>".$planview['acronym']."</option>";
              }
              ?>
          </select></td></tr><tr><td><input type="submit"><input type="reset">
    </table></center></form>
  <?php
    $product=mysql_query("select*from product");
    echo "<center><table width='1000' border='1'>
    <tr>
    <th colspan='12'>Production Table</th>
    </tr>
    <tr>
    <Thread>
    <th>Id</th>
    <th>Transaction Date</th>
    <th>Policy Number</th>
    <th>Plan</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Premium</th>
    <th>OR Number</th>
    <th>Face Amount</th>
    <th>Agent</th>
    <th colspan='2'>Action</th>
    </Thread>
    </tr>";
    function strleft($leftstring, $length) {
      return(substr($leftstring, 0, $length));
    }
    while($productview=mysql_fetch_array($product))
    {
    echo "<tr><td>".$productview['id']."</td>";
    echo "<td>".$productview['tdate']."</td>";
    echo "<td>".$productview['policy_no']."</td>";
    $plan1 = $productview['plan'];
    $planers=mysql_query("SELECT*from plan where id='$plan1'");
      while($plan2=mysql_fetch_array($planers))
      {
      //echo "<td>".$plan2['plan_name']."</td
      echo "<td>".$plan2['acronym']."</td>";
      }
    echo "<td>".$productview['fname']."</td>";
    echo "<td>".$productview['lname']."</td>";
    echo "<td>".$productview['premium']."</td>";
    echo "<td>".$productview['or_no']."</td>";
    echo "<td>".$productview['famount']."</td>";

    $agent1=$productview['agent'];
    $agent2=mysql_query("SELECT*from agent where id='$agent1'");
    while($agent3=mysql_fetch_array($agent2))
    {
    echo "<td>".$agent3['lname']. " , ".strleft($agent3['fname'],1).".</td>";
//      echo "<option value='".$agentview['id']."'>".$agentview['lname']." , ".$agentview['fname']."</option>";
    }

    echo "<td><center><a href='edit.php?k=".$productview['id']."'>Edit</center></a></td>";
    echo "<td><center><a href='edit.php?k=".$productview['id']."'>Delete</center></a></td></tr>";
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
</html>
