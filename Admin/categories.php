<?php
require('topNav.php');

if (isset($_GET['type']) && $_GET['type'] != ' ') {
  $type = getSafeValue($con, $_GET['type']);
  if ($type == 'status') {
    $operation = getSafeValue($con, $_GET['operation']);
    $id = getSafeValue($con, $_GET['id']);
    if ($operation == 'active') {
      $status = '1';
    } else {
      $status = '0';
    }
    $updateStatusSql = "update categories set status='$status' where id='$id'";
    mysqli_query($con, $updateStatusSql);
  }

  if ($type == 'delete') {
    $id = getSafeValue($con, $_GET['id']);
    $deleteSql = "delete from categories where id='$id'";
    mysqli_query($con, $deleteSql);
  }
}

$sql = "select * from categories order by category asc";
$res = mysqli_query($con, $sql);
?>
<!--Main layout-->
<main>
    <div class="container pt-4">
        <h4 class="fs-2 text-center ">Categories</h4>
        <hr>
        <br>
    </div>
    <h5 class="btn btn-white ms-5 px-2 py-1 fs-6 "><a class="link-dark" href="manageCategories.php">Add
            Categories</a></h5>
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th>Categories</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
        while ($row = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td> <?php echo $row['category'] ?> </td>
                    <td>
                        <?php
              if ($row['status'] == 1) {
                echo "<a class='link-white btn btn-success px-2 py-1' href='?type=status&operation=deactive&id=" . $row['id'] .
                  "'>Active</a>&nbsp&nbsp";
              } else {
                echo "<a class='link-white btn btn-warning px-2 py-1' href='?type=status&operation=active&id=" . $row['id'] .
                  "'>Inactive</a>&nbsp&nbsp";
              }
              ?>
                    </td>
                    <td> <?php echo "<a class='link-white btn btn-primary px-2 py-1' href='manageCategories.php?id=" . $row['id'] .
                    "'>Edit</a>"; ?>
                    </td>
                    <td> <?php echo "<a class='link-white btn btn-danger px-2 py-1' href='?type=delete&id=" . $row['id'] .
                    "'>Delete</a>"; ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>
<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript" src="js/admin.js"></script>
</body>

</html>