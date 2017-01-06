<?php
require_once("dbwrapper/wrapper.php");
$db = Database::getInstance();
$mysqli = $db->getConnection();
 ?>
 <html lang="en">
 <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="assets/css/sidebar2.css" rel="stylesheet">

  </head>
<?php
include("base/header.php");
$_SESSION['$logstatus'] = '1';
?>
<body>
  <div class="container-fluid main-container">
    		<div class="col-md-2 sidebar">
    			<div class="row">
  	<!-- uncomment code for absolute positioning tweek see top comment in css-->
  	<!-- Menu -->
  	<div class="side-menu">
  		<nav class="navbar navbar-default" role="navigation">
  			<!-- Main Menu -->
  			<div class="side-menu-container">
  				<ul class="nav navbar-nav">
            <li class= "navbar-brand">DAILY PRODUCTION</li>
            <form action="dailyprod_add.php" method="post">
            <li>Transaction Date:</li><li> <input type="date" name="tdate"?></li>
            <li>Last Name:</li><li><input type="text" name="lname" placeholder="Last Name"></li>
            <li>First Name:</li><li><input type="text" name="fname" placeholder="First Name"></li>
            <li>Policy Number:</li><li></td><input type="text" name="policy_no" placeholder="Policy Number"></li>
            <li>OR number:</li><li><input type="text" name="or_no" placeholder="OR Number"></li>
            <li>Face Amount:</li><li><input type="text" name="f_amount"placeholder="Face Amount"></li>
            <li>Premium:</li><li></td><td><input type="text" name="premium"placeholder="Premium"></li>
            <li>Agent:</li><li><select name="agentss">
              <option value="0"><center>--Select Agent Name--</center></option>
              <option value="1"><center>1</center></option>
              <option value="2"><center>2</center></option>
                </select></li>
                <li>Plan:</li><li><select name="plannes">
                  <option value="0"><center>--Select Type of Plan--</center></option>
                  <option value="1"><center>1</center></option>
                  <option value="2"><center>2</center></option>
                </select></li><li><li>
                    <center><input type="submit" value="Save"><a href="#"><input type="button" value="Rest"></a></center></li></li>
  				</form></ul>
  			</div><!-- /.navbar-collapse -->
  		</nav>

  	</div>
  </div>  		</div>
  <div class="col-md-10">
<center> <h2>DAILY PRODUCTION - <?php echo date('F d,Y'); ?></h2></center>
                      <div class="pull-right action-buttons">
                          <div class="btn-group pull-right"></div>
                      </div>
                  </div>
                  <div class="panel-body">
                              <?php include("table.php"); ?>
                  </div>

              </div>
                  </div>

  </div>
    		</div>
        <?php include("base/footer.php"); ?>
    		<!--<footer class="pull-left footer">
    			<p class="col-md-12">
    				<hr class="divider">
    				Copyright &COPY; 2017 The Great Provider General Insurance Agency - KRA
    			</p>
    		</footer>-->
	  	</div>

</body>
</html>
