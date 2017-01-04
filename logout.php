<?php
session_start();
if(isset($_SESSION["username"]) and isset($_SESSION["password"]))
{
session_start();
session_destroy();
header("location:index.php");
}
else
{
header("location:index.php");
}
?>