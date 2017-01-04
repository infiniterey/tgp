<?php
session_start();
include("connect.php");
$agentcode=trim($_POST["agentcode"]);
$a_date=trim($_POST["a_date"]);
$fname=trim($_POST["fname"]);
$mname=trim($_POST["mname"]);
$lname=trim($_POST["lname"]);
$team=trim($_POST['team']);
$agent = mysql_query("insert into agent(agentcode,a_date,fname,mname,lname,team)VALUES('$agentcode','$a_date','$fname','$mname','$lname','$team')");
if ($agent){
  echo "<center><h1>Record successfully save</h1></center>";
  header ("refresh:1;url=agent.php");
}

else {
    echo "No record found";
  echo "<button onclick='history.go(-1);'>Back </button>";
}

?>
