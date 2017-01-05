<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><LINK REL="SHORTCUT ICON"HREF="images/tgplogo.png"><title>The Great Provider</title>
<<<<<<< HEAD
  <title>The Great Provider</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
=======
  <title>Login</title>
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/assets/css/jquery.dataTables.min.css">
>>>>>>> origin/dev
</head>
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="/assets/js/jquery.dataTables.min.js"></script>

<style type="text/css">
	.navbar-brand>img {
	    display: initial;
	}
	.navbar-brand{
		float: none
	}
</style>

<body>
  <?php
    session_start();
    if(isset($_SESSION["username"]) and isset($_SESSION["password"]))
    {
  ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand brand-name" href="#">
      	<img src="images/tgplogo.png" width="50"> The Great Provider
      </a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Production <span class="caret"></span></a>
          <ul class="dropdown-menu">
           	<li><a href="/dailyprod.php">Daily Production</a></li>
            <li><a href="#">Agent Production</a></li>
            <li><a href="#">Company Production</a></li>
          </ul>
        </li>
        <li><a href="#">Policy Status</a></li>
        <li><a href="#">Collectables</a></li>
        <li><a href="#">Drives</a></li>
        <li><a href="#">Persistency</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Agent Setting</a></li>
            <li><a href="#">Team Setting</a></li>
            <li><a href="#">Plan Setting</a></li>
            <li><a href="#">User Setting</a></li>
          </ul>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php
}
else
{
  header("location:index.php");
}
?>
</body></html>
