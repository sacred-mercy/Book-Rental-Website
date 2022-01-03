<?php
require('topNav.php');

if (isset($_GET['type']) && $_GET['type'] != ' ') {
  $type = getSafeValue($con, $_GET['type']);

  if ($type == 'delete') {
    $id = getSafeValue($con, $_GET['id']);
    $deleteSql = "delete from contact_us where id='$id'";
    mysqli_query($con, $deleteSql);
  }
}

$sql = "select * from contact_us order by id desc";
$res = mysqli_query($con, $sql);
?>
<!--Main layout-->
<main>
    <div class="container pt-4">
        <h4 class="fs-2 text-center ">Feedback</h4>
        <hr>
        <br>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
        while ($row = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td> <?php echo $row['id'] ?> </td>
                    <td> <?php echo $row['name'] ?> </td>
                    <td> <?php echo $row['email'] ?> </td>
                    <td> <?php echo $row['mobile'] ?> </td>
                    <td> <?php echo $row['message'] ?> </td>
                    <td> <?php echo $row['date'] ?> </td>
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