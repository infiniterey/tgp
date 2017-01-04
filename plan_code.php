<?php
session_start();
include("connect.php");
$planname=trim($_POST["planname"]);
$acronym=trim($_POST['acronym']);
$team = mysql_query("insert into plan(plan_name,acronym)VALUES('$planname','$acronym')");
if ($team){
  echo "<center><h1>Record successfully save</h1></center>";
  header ("refresh:1;url=plan.php");
}
else {
    echo "No record found";
  echo "<button onclick='history.go(-1);'>Back </button>";
}

?>
