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
    FROM product inner join plan on plan.id=product.plan inner join agent on product.agent=agent.id where product.tdate between '$datestart' and '$dateend' ORDER BY product.tdate DESC";
?>

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
                          <a href="?ids=<?php echo $row['id']; ?>" class="btn btn-primary btn-xs" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
                          <a href="try.php?ids=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" role="button"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                <?php } }?>
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
        $("#example").load(window.location);

    } );

  </script>
