<?php
session_start();
include("connect.php");
$team=trim($_POST["team"]);
$manager=trim($_POST['manager']);
$team = mysql_query("insert into team(team_name,manager)VALUES('$team','$manager')");
if ($team){
  echo "<center><h1>Record successfully save</h1></center>";
  header ("refresh:1;url=team.php");
}
else {
    echo "No record found";
  echo "<button onclick='history.go(-1);'>Back </button>";
}

?>
