<?php
session_start();
include("connect.php");
$tdate=trim($_POST["tdate"]);
$policy_no=trim($_POST['policy_no']);
$or_no=trim($_POST['or_no']);
$lname=trim($_POST['lname']);
$fname=trim($_POST['fname']);
$famount=trim($_POST['f_amount']);
$premium=trim($_POST['premium']);
$agent=trim($_POST['agentss']);
$plan=trim($_POST['plannes']);
//$adding=mysql_query("INSERT INTO production('t_date' , 'lname' , 'fname' , 'policy_no' , 'or_no' , 'plan' , 'premium') VALUES ('0' ,'1','2','3','4','5','6','7')");
//$adding = mysql_query("insert into user(username,password,user_type)VALUES ('KEVINREYs','12345678s9','admin')");
$adding = mysql_query("insert into product(Tdate,policy_no,or_no,lname,fname,famount,premium,agent,plan)VALUES('$tdate','$policy_no','$or_no','$lname','$fname','$famount','$premium','$agent','$plan')");
if ($adding){
  echo "<center><h1>Record successfully save</h1></center>";
  header ("refresh:1;url=dailyprod.php");
}
else {
    echo "No record found";
  echo "<button onclick='history.go(-1);'>Back </button>";
}

?>