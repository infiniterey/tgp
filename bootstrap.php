<?php 

    require_once("dbwrapper/wrapper.php");
    $db = Database::getInstance();
    $mysqli = $db->getConnection(); 
    $sql_query = "SELECT * FROM product";

?>

<?php include("base/header.php")?>

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
            <? if ($result = $mysqli->query($sql_query)) {?>
                <? while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><? echo $row["id"] ?></td>
                        <td><? echo $row["tdate"] ?></td>
                        <td><? echo $row["policy_no"] ?></td>
                        <td>WB</td>
                        <td><? echo $row["fname"] ?></td>
                        <td><? echo $row["lname"] ?></td>
                        <td><? echo $row["premium"] ?></td>
                        <td><? echo $row["or_no"] ?></td>
                        <td><? echo $row["famount"] ?></td>
                        <td><? echo $row["agent"] ?></td>
                        <td>
                          <button class="btn btn-primary btn-xs" data-title="Edit"><span class="glyphicon glyphicon-pencil"></span></button>
                          <button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button>
                        </td>
                    </tr>
                <?}?>
                <?$result->free();?>
            <?}?>
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