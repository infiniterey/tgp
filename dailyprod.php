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
          <!--  <form action="dailyprod_add.php" method="post">-->
            <form class="addfrm" id="addfrm" method="post">
            <li>Transaction Date:</li><li> <input type="date" name="tdate" id="tdate"></li>
            <li>Last Name:</li><li><input type="text" name="lname" id="lname"  placeholder="Last Name"></li>
            <li>First Name:</li><li><input type="text" name="fname" id="fname" placeholder="First Name"></li>
            <li>Plan:</li><li><select name="plannes" id="plannes">
              <option value="0"><center>--Select Plan--</center></option>
              <?php $sql_query3 = "SELECT*from plan";
               if ($result3 = $mysqli->query($sql_query3)){
                 while ($row2 = $result3->fetch_assoc()) {
                echo "<option value='".$row2['id']."'>".$row2['acronym']."</option>";}}?></select></li>
            <li>Policy Number:</li><li></td><input type="text" name="policy_no" id="policy_no" placeholder="Policy Number"></li>
            <li>OR number:</li><li><input type="text" name="or_no" id="or_no" placeholder="OR Number"></li>
            <li>Face Amount:</li><li><input type="text" name="f_amount" id="f_amount" placeholder="Face Amount"></li>
            <li>Premium:</li><li><input type="number" name="premium" id="premium" placeholder="Premium"></li>
            <li>Mode of Payment:</li><li><select name="mop" id="mop">
                <option value="0"><center>--Select Mode of Payment--</center></option>
                <option value="Monthly"><center>Monthly</center></option>
                <option value="Quarterly"><center>Quarterly</center></option>
                <option value="Semi-Annual"><center>Semi-Annual</center></option>
                <option value="Annual"><center>Annual</center></option></select></li>
            <li>Agent:</li><li><select name="agentss" id="agentss">
                <option value="0"><center>--Select Agent Name--</center></option>
                  <?php  $sql_query2 = "SELECT * FROM agent order by a_lname ASC";
                    if ($result2 = $mysqli->query($sql_query2)){
                      while ($row1 = $result2->fetch_assoc()) {
                        echo "<option value='".$row1['id']."'>".$row1['a_lname']." , ".$row1['a_fname']."</option>";}}?></select></li>
            <li>APR:</li><li><input type="text" name="apr" id="apr" placeholder="APR Number"></li>
              <li>IC Count:</li><li><input type="text" name="ics" id="ics" placeholder="IC count"></li>
                    <li><li><center><input type="submit" id="add" value="Add" onclick="reloading()"> <input type="button" value="Rest" onclick="reloading()"></center></li></li>
  				</form></ul>
  			</div><!-- /.navbar-collapse -->
  		</nav>

  	</div>
  </div>  		</div>
  <div class="col-md-10">
<center> <h2>Daily Production for the month of <?php echo date('F'); ?></h2></center>
                      <div class="pull-right action-buttons">
                          <div class="btn-group pull-right"></div>
                      </div>
                  </div>
                  <div class="panel-body" id="return2">
                              <?php require_once("dailyprodtable.php");?>
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

<script>
$("#addfrm").on("submit",function(event){
event.preventDefault();
$.ajax({
          type: "POST",
          url: "dailyprod_add.php",
          data: {
            tdate:$('#tdate').val(),
            policy_no:$('#policy_no').val(),
            or_no:$('#or_no').val(),
            lname:$('#lname').val(),
            fname:$('#fname').val(),
            f_amount:$('#f_amount').val(),
            premium:$('#premium').val(),
            agentss:$('#agentss').val(),
            plannes:$('#plannes').val(),
            mop:$('#mop').val(),
            apr:$('#apr').val(),
            ics:$('#ics').val(),
           },
          dataType: "json",
          success: function(){
            alert("welcome");
             dailyprodtable.php.reload();
          },
       });
     });
 function reloading() {
         location.reload();
     }
</script>
</body>
</html>
