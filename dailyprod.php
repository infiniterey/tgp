<!DOCTYPE html>
<?php
require_once("dbwrapper/wrapper.php");
$db = Database::getInstance();
$mysqli = $db->getConnection();
 ?>
 <html lang="en">
 <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="assets/css/sidebar2.css" rel="stylesheet">
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/fonts/fontawesome-webfont.ttf" rel="stylesheet"></script>
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
          <?php

              if(isset($_GET['ids'])){
                $ids=trim($_GET["ids"]);
                require_once("dbwrapper/wrapper.php");
                $db = Database::getInstance();
                $mysqli = $db->getConnection();
                $dates = date('m/d/Y');
                $month = date('F');
                $datestart=date('m/01/Y',strtotime('this month'));
                $dateend=date('m/t/Y',strtotime('this month'));
                $sql_query = "SELECT product.id,product.tdate,product.policy_no,
                plan.acronym,product.fname,
                product.lname,product.premium,
                product.or_no,product.famount,agent.a_lname,agent.a_fname,product.fyc,product.ic,plan.acronym,product.m_o_p,product.apr
                FROM product inner join plan on plan.id=product.plan inner join agent on product.agent=agent.id where product.id ='$ids'";
                $result = $mysqli->query($sql_query);
                while ($row = $result->fetch_assoc()) {

                         $tdate=$row['tdate'];
                         $typer="text";
                         $lname=$row['lname'];
                         $fname=$row['fname'];
                         $plan="--Select Plan--";
                         $policy_no=$row['policy_no'];
                         $or_no=$row['or_no'];
                         $famount=$row['famount'];
                         $acronym=$row['acronym'];
                         $premium=number_format($row['premium'], 2, '.', ',');
                         $premiums="text";
                         $mop=$row['m_o_p'];
                         $agent=$row['a_lname']. ' ,  ' .$row['a_fname'];
                         $apr =$row['apr'];
                         $ics = number_format($row['ic'], 2, '.', ',');;
                         $btn1="Save";
                         $description="EDIT PRODUCTION";
                       }  }
              else{
                   $tdate="";
                   $typer="date";
                   $premiums="number";
                   $lname="";
                   $fname="";
                   $plan="--Select Plan--";
                   $policy_no="";
                   $or_no="";
                   $famount="";
                   $acronym="";
                   $premium="";
                   $mop="--Select Mode of Payment--";
                   $agent="--Select Agent Name--";
                   $apr = "";
                   $ics = "";
                   $ids = "";
                   $btn1="Add";
                   $description="ADD PRODUCTION";
                 }
          ?>
            <form class="addfrm" id="addfrm" method="post">
              <li><?php echo $description; ?></li><br>
            <li>Transaction Date:</li><li> <input type="<?php echo $typer; ?>" name="tdate" id="tdate" Value="<?php echo $tdate; ?>"></li>
            <li>Last Name:</li><li><input type="text" name="lname" id="lname" placeholder="Last Name" Value="<?php echo $lname; ?>"></li>
            <li>First Name:</li><li><input type="text" name="fname" id="fname" placeholder="First Name" Value="<?php echo $fname; ?>"></li>
            <li>Plan:</li><li><select name="plannes" id="plannes">
              <option value="0"><center><?php echo $plan; ?></center></option>
              <?php $sql_query3 = "SELECT*from plan";
               if ($result3 = $mysqli->query($sql_query3)){
                 while ($row2 = $result3->fetch_assoc()) {
                echo "<option value='".$row2['id']."'>".$row2['acronym']."</option>";}}?></select></li>
            <li>Policy Number:</li><li></td><input type="text" name="policy_no" id="policy_no" placeholder="Policy Number" Value="<?php echo $policy_no; ?>"></li>
            <li>OR number:</li><li><input type="text" name="or_no" id="or_no" placeholder="OR Number" Value="<?php echo $or_no; ?>"></li>
            <li>Face Amount:</li><li><input type="text" name="f_amount" id="f_amount" placeholder="Face Amount" Value="<?php echo $famount; ?>"></li>
            <li>Premium:</li><li><input type="<?php echo $premiums; ?>" name="premium" id="premium" placeholder="Premium" Value="<?php echo $premium; ?>"></li>
            <li>Mode of Payment:</li><li><select name="mop" id="mop">
                <option value="0"><center><?php echo $mop; ?></center></option>
                <option value="Monthly"><center>Monthly</center></option>
                <option value="Quarterly"><center>Quarterly</center></option>
                <option value="Semi-Annual"><center>Semi-Annual</center></option>
                <option value="Annual"><center>Annual</center></option></select></li>
            <li>Agent:</li><li><select name="agentss" id="agentss">
                <option value="0"><center><?php echo $agent; ?></center></option>
                  <?php  $sql_query2 = "SELECT * FROM agent order by a_lname ASC";
                    if ($result2 = $mysqli->query($sql_query2)){
                      while ($row1 = $result2->fetch_assoc()) {
                        echo "<option value='".$row1['id']."'>".$row1['a_lname']." , ".$row1['a_fname']."</option>";}}?></select></li>
            <li>APR:</li><li><input type="text" name="apr" id="apr" placeholder="APR Number" Value="<?php echo $apr; ?>"></li>
              <li>IC Count:</li><li><input type="text" name="ics" id="ics" placeholder="IC count" Value="<?php echo $ics; ?>"></li>
                    <center><input type="submit" id="<?php echo $btn1; ?>" value="<?php echo $btn1; ?>"> <input type="button" id="rest" value="Rest" onclick="reloading()"></center>
                    <input type="text" name="subject" id="subject" value="<?php echo $btn1; ?>">
                    <input type="text" name="ids" id="ids" value="<?php echo $ids; ?>">
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
<script type="text/javascript">
$("#Add").click(function() {
  alert("ADDING");
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
            subject:$('#subject').val(),
           },
           dataType: "json",
          success:function(response){
            $("#example").load(window.location + " #example");}
          });
     });
$("#Save").click(function() {
  alert("SAVING");
     $.ajax({

               type: "POST",
               url: "coding.php",
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
                 subject:$('#subject').val(),
                 ids : $('#ids').val(),
                },
                dataType: "json",
                success: function(data) {},
                error: function() {
                  alert("ss");
                  reloading()
                }
              // success:function(responses){

              //   $("#example").load(window.location + " #example");  }
               });


return false;
          });
function reloading() {
  location.replace("dailyprod.php")
  }

</script>
</body>
</html>
