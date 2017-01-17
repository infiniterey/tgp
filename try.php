<html><head></head>
<?php
//$ids= trim($_GET["ids"]);
$ids = "60";
require_once("dbwrapper/wrapper.php");
$db = Database::getInstance();
$mysqli = $db->getConnection();
$dates = date('m/d/Y');
$month = date('F');
$datestart=date('m/01/Y',strtotime('this month'));
$dateend=date('m/t/Y',strtotime('this month'));
$sql_query = "SELECT product.id,product.tdate,product.policy_no,
plan.acronym,product.fname,
product.lname,product.premium,
product.or_no,product.famount,agent.a_lname,agent.a_fname,product.fyc,product.ic,product.m_o_p,plan.acronym,product.apr
FROM product inner join plan on plan.id=product.plan inner join agent on product.agent=agent.id where product.id='$ids'";
if ($result = $mysqli->query($sql_query)) {
  while ($row = $result->fetch_assoc()) {
?>

<body>
<form action="" method="post">
Transaction Date: <br> <input type="text" name="tdate" value="<?php if(!$ids=0){echo $row['tdate'];} ?>"><br>
Last Name:<br><input type="text" name="lname" value="<?php echo $row['lname']; ?>"><br>
First Name:<br><input type="text" name="fname" value="<?php echo $row['fname']; ?>"><br>
Plan:<br><select name="plannes">
  <option value="0"><center><?php echo $row['acronym']; ?></center></option>
  <?php $sql_query3 = "SELECT*from plan";
   if ($result3 = $mysqli->query($sql_query3)){
     while ($row2 = $result3->fetch_assoc()) {
       echo "<option value='".$row2['id']."'>".$row2['acronym']."</option>";}}?></select><br>
Policy Number:<br><input type="text" name="policy_no" value="<?php echo $row['policy_no']; ?>"><br>
OR number:<br><input type="text" name="or_no" value="<?php echo $row['or_no']; ?>"><br>
Face Amount:<br><input type="text" name="f_amount" value="<?php echo $row['famount']; ?>"><br>
Premium:<br><input type="text" name="premium" value="<?php echo number_format($row['premium'], 2, '.', ','); ?>"><br>
Mode of Payment:<br><select name="mop">
    <option value="0"><?php echo $row['m_o_p']; ?></option>
    <option value="Monthly"><center>Monthly</center></option>
    <option value="Quarterly"><center>Quarterly</center></option>
    <option value="Semi-Annual"><center>Semi-Annual</center></option>
    <option value="Annual"><center>Annual</center></option></select><br>
Agent:<br><select name="agentss">
  <option value="0"><center><?php echo $row['a_lname']." , ".$row['a_fname']; ?></option>
    <?php  $sql_query2 = "SELECT * FROM agent order by a_lname ASC";
    if ($result2 = $mysqli->query($sql_query2)){
      while ($row1 = $result2->fetch_assoc()) {
        echo "<option value='".$row1['id']."'>".$row1['a_lname']." , ".$row1['a_fname']."</option>";}}?></select><br>
APR:<br><input type="text" name="apr" value="<?php echo $row['apr']; ?>"><br>
IC Count:<br><input type="text" name="ics" value="<?php echo $row['ic']; ?>"><br>
        <center><input type="submit" value="Save"><a href="#"><input type="button" value="Rest"></a></center>
</form>
<?php }} ?>
</body>
</html>
