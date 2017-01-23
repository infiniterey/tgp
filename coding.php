<?php
require_once("dbwrapper/wrapper.php");
$db = Database::getInstance();
$mysqli = $db->getConnection();
$tdate=date('m/d/Y', strtotime(trim($_POST["tdate"])));
$policy_no=trim($_POST['policy_no']);
$or_no=trim($_POST['or_no']);
$lname=trim($_POST['lname']);
$fname=trim($_POST['fname']);
$famount=trim($_POST['f_amount']);
$premium=trim($_POST['premium']);
$agent=trim($_POST['agentss']);
$plan=trim($_POST['plannes']);
$mop=trim($_POST['mop']);
$apr=trim($_POST['apr']);
$ics=trim($_POST['ics']);
$ids= trim($_POST["ids"]);
$sql_query3 = "SELECT*from plan where id='$plan'";
 if ($result3 = $mysqli->query($sql_query3)){
   while ($row2 = $result3->fetch_assoc()) {
  echo $row2['pl_rate'];
  echo $fyc=$premium*$row2['pl_rate'];

}}
echo $ids;
  header('Content-Type: application/json; charset=UTF-8');
  //$sql_query2 = "UPDATE product SET tdate='$tdate', policy_no='$policy_no' WHERE id='$ids'";
  $sql_query2 = "UPDATE product SET tdate='$tdate', policy_no='$policy_no', or_no='$or_no', lname='$lname', fname='$fname', famount='$famount', premium='$premium', agent='$agent', plan='$plan', m_o_p='$mop', ic='$ics', fyc='$fyc', apr='$apr' WHERE id='$ids'";
  if ($result = $mysqli->query($sql_query2)){
    $response_array['status'] = "success";
  }else {
    $response_array['status'] = "error";
  }
      json_encode($response_array);
?>
