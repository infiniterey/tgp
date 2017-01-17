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
//$adding=mysql_query("INSERT INTO production('t_date' , 'lname' , 'fname' , 'policy_no' , 'or_no' , 'plan' , 'premium') VALUES ('0' ,'1','2','3','4','5','6','7')");
//$adding = mysql_query("insert into user(username,password,user_type)VALUES ('KEVINREYs','12345678s9','admin')");
//$sql_query = "INSERT INTO 'product'('tdate','policy_no','or_no','lname','fname','famount','premium','agent','plan')VALUES('$tdate','$policy_no','$or_no','$lname','$fname','$famount','$premium','$agent','$plan')";
$sql_query3 = "SELECT*from plan where id='$plan'";
 if ($result3 = $mysqli->query($sql_query3)){
   while ($row2 = $result3->fetch_assoc()) {
  echo $row2['pl_rate'];
  echo $fyc=$premium*$row2['pl_rate'];

}}
if(isset($_POST['Add'])){
    $sql_query = "INSERT INTO product(tdate,policy_no,or_no,lname,fname,famount,premium,agent,plan,m_o_p,ic,fyc,apr)VALUES('$tdate','$policy_no','$or_no','$lname','$fname','$famount','$premium','$agent','$plan','$mop','$ics','$fyc','$apr')";
    if ($result = $mysqli->query($sql_query)){
      echo "<center><h1>Record successfully save</h1></center>";
      header ("refresh:1;url=dailyprod.php");
    }
    else {
        echo "No record found";
      echo "<button onclick='history.go(-1);'>Back </button>";
    }
    exit();
}

if(isset($_POST['Save'])){
    $sql_query = "UPDATE product(tdate,policy_no,or_no,lname,fname,famount,premium,agent,plan,m_o_p,ic,fyc,apr)VALUES('$tdate','$policy_no','$or_no','$lname','$fname','$famount','$premium','$agent','$plan','$mop','$ics','$fyc','$apr')";
    if ($result = $mysqli->query($sql_query)){
      echo "<center><h1>Record successfully save</h1></center>";
      header ("refresh:1;url=dailyprod.php");
    }
    else {
      echo "No record found";
      echo "<button onclick='history.go(-1);'>Back </button>";
    }
    exit();
}

if(isset($_POST['Save'])){
    $sql_query = "INSERT INTO product(tdate,policy_no,or_no,lname,fname,famount,premium,agent,plan,m_o_p,ic,fyc,apr)VALUES('$tdate','$policy_no','$or_no','$lname','$fname','$famount','$premium','$agent','$plan','$mop','$ics','$fyc','$apr')";
    if ($result = $mysqli->query($sql_query)){
      echo "<center><h1>Record successfully save</h1></center>";
      header ("refresh:1;url=dailyprod.php");
    }
    else {
      echo "No record found";
      echo "<button onclick='history.go(-1);'>Back </button>";
    }
    exit();
}
?>
