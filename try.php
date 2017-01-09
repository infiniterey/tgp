<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/css/pop-up.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<?php

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
    product.or_no,product.famount,agent.a_lname,agent.a_fname,product.fyc,product.ic
    FROM product inner join plan on plan.id=product.plan inner join agent on product.agent=agent.id where product.tdate between '$datestart' and '$dateend'";
?>

  <div data-role="main" class="ui-content">

     <div data-role="popup" id="myPopup" class="ui-content">
       <form method="post" action="demoform.asp">
         <div>
           <h3>Login information</h3>
           <form action="#" method="post">
           <br>Transaction Date:<br> <input type="date" name="tdate"?>
           <br>Last Name:<br><input type="text" name="lname" placeholder="Last Name">
           <br>First Name:<br><input type="text" name="fname" placeholder="First Name">
           <br>Plan:<br><select name="plannes">
             <option value="0"><center>--Select Plan--</center></option>
             <?php $sql_query3 = "SELECT*from plan";
              if ($result3 = $mysqli->query($sql_query3)){
                while ($row2 = $result3->fetch_assoc()) {
               echo "<option value='".$row2['id']."'>".$row2['acronym']."</option>";}}?></select>
           <br>Policy Number:<br></td><input type="text" name="policy_no" placeholder="Policy Number">
           <br>OR number:<br><input type="text" name="or_no" placeholder="OR Number">
           <br>Face Amount:<br><input type="text" name="f_amount"placeholder="Face Amount">
           <br>Premium:<br></td><td><input type="number" name="premium"placeholder="Premium">
           <br>Mode of Payment:<br><select name="mop">
               <option value="0"><center>--Select Mode of Payment--</center></option>
               <option value="1"><center>Monthly</center></option>
               <option value="2"><center>Quarterly</center></option>
               <option value="3"><center>Semi-Annual</center></option>
               <option value="4"><center>Annual</center></option></select>
           <br>Agent:<br><select name="agentss">
             <option value="0"><center>--Select Agent Name--</center></option>
             <?php  $sql_query2 = "SELECT * FROM agent order by a_lname ASC";
              if ($result2 = $mysqli->query($sql_query2)){
                while ($row1 = $result2->fetch_assoc()) {
                  echo "<option value='".$row1['id']."'>".$row1['a_lname']." , ".$row1['a_fname']."</option>";}}?></select>
           <br>APR:<br></td><td><input type="text" name="apr" placeholder="APR Number"></li>
             <br>IC Count:<br></td><td><input type="text" name="ics" placeholder="IC count"></li>
              <input type="submit" value="Save"><input type="button" value="Rest">
           </form></ul>
           <input type="submit" data-inline="true" value="Log in">
         </div>
       </form>
     </div>
   </div>


  <div class="col-md-10">
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Transaction Date</th>
                <th>Policy Number</th>
                <th>Plan</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Premium</th>
                <th>Commission</th>
                <th>OR Number</th>
                <th>Face Amount</th>
                <th>Agent</th>
                <th>IC count</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $total='0';$fyc='0';$ics='0'; if ($result = $mysqli->query($sql_query)) {?>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['tdate']; ?></td>
                        <td><?php echo $row['policy_no']; ?></td>
                        <td><?php echo $row['acronym'];?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo number_format($row['premium'], 2, '.', ',');
                        $total =$total+$row['premium'];?></td>
                        <td><?php echo number_format($row['fyc'], 2, '.', ',');
                        $fyc=$fyc+$row['fyc']?></td>
                        <td><?php echo $row['or_no']; ?></td>
                        <td><?php echo $row['famount']; ?></td>
                        <td><?php echo $row['a_lname']. ',  ' .$row['a_fname']; ?></td>
                        <td><?php echo number_format($row['ic'], 2, '.', ',');
                        $ics =$ics+$row['ic'];?></td>
                        <td>
                          <a href="#myPopup" data-rel="popup" >click</a>
                          <button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button>
                        </td>
                    </tr>
                <?php }?>
            <?php }?>
        </tbody>
        <tfoot>
            <tr>
                <th>TOTAL</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th><?php echo number_format($total, 2, '.', ','); ?></th>
                <th><?php echo number_format($fyc, 2, '.', ','); ?></th>
                <th></th>
                <th></th>
                <th></th>
                <th><?php echo number_format($ics, 2, '.', ','); ?></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
  </div>



  <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            "pageLength": 10
        });
    } );


  </script>
