<?php

    require_once("dbwrapper/wrapper.php");
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $dates = date('m-d-Y');
    //$sql_query = "SELECT * FROM product where tdate=$dates";
    //$sql_query = "SELECT  FROM team inner join product on team.id=product.plan inner join agent on product.agent=agent.id";
  /*$sql_query = "SELECT product.id,product.tdate,product.policy_no,
  plan.acronym,product.fname,
  product.lname,product.premium,
  product.or_no,product.famount,agent.a_lname,agent.a_fname
  FROM product inner join plan on plan.id=product.plan inner join agent on product.agent=agent.id
  where product.tdate =$dates order by product.tdate ACS";*/
  $sql_query = "SELECT product.id,product.tdate,product.policy_no,
  plan.acronym,product.fname,
  product.lname,product.premium,
  product.or_no,product.famount,agent.a_lname,agent.a_fname
  FROM product inner join plan on plan.id=product.plan inner join agent on product.agent=agent.id";

?>

<?php include("base/header.php"); ?>

  <div class="col-md-12">
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Transaction Date</th>
                <th>Policy Number</th>
                <th>Plan</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Premium</th>
                <th>OR Number</th>
                <th>Face Amount</th>
                <th>Agent</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Transaction Date</th>
                <th>Policy Number</th>
                <th>Plan</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Premium</th>
                <th>OR Number</th>
                <th>Face Amount</th>
                <th>Agent</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <?php if ($result = $mysqli->query($sql_query)) {?>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['tdate']; ?></td>
                        <td><?php echo $row['policy_no']; ?></td>
                        <td><?php echo $row['acronym'];?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['premium']; ?></td>
                        <td><?php echo $row['or_no']; ?></td>
                        <td><?php echo $row['famount']; ?></td>
                        <td><?php echo $row['a_lname']. ',  ' .$row['a_fname']; ?></td>
                        <td>
                          <button class="btn btn-primary btn-xs" data-title="Edit"><span class="glyphicon glyphicon-pencil"></span></button>
                          <button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button>
                        </td>
                    </tr>
                <?php }?>
            <?php }?>
        </tbody>
    </table>
  </div>



  <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            "pageLength": 25
        });
    } );
  </script>



<?php include("base/footer.php")?>
