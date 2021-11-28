<?php require('topNav.php'); ?>
<?php
  if (isset($_POST['status_id'])) {
    $order_Id = $_POST['orderId'];
    $status_id = $_POST['status_id'];
    echo $order_Id;
    echo $status_id;

//    mysqli_query($con, "update orders set order_status='$status_id' where id='$order_Id'");
  }
?>
<!--Main layout-->
<main style="margin-top: 58px">
    <div class="container pt-4">
        <h4 class="fs-2 text-center ">Orders</h4>
        <hr>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th> OrderID</th>
                <th>Order Date</th>
                <th>Book Name</th>
                <th>Book Price</th>
                <th>Address</th>
                <th>Payment Method</th>
                <th>Payment Status</th>
                <th>Order Status</th>
                <th>Change Order Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
              $userId = '';
              $userId = $_SESSION['USER_ID'];
              $res = mysqli_query($con, "select orders.*,name,status_name from orders
                                            JOIN order_detail ON orders.id=order_detail.order_id
                                            JOIN books ON order_detail.book_id=books.id
                                            JOIN order_status ON orders.order_status=order_status.id");
              while ($row = mysqli_fetch_assoc($res)) { ?>
                  <tr>
                      <td> <?php echo $row['id'] ?> </td>
                    <?php $orderId = $row['id'] ?>
                      <td> <?php echo $row['date'] ?> </td>
                      <td> <?php echo $row['name'] ?> </td>
                      <td> <?php echo $row['total'] ?> </td>
                      <td> <?php echo $row['address'] ?>, <?php echo $row['address2'] ?> </td>
                      <td> <?php echo $row['payment_method'] ?> </td>
                      <td> <?php echo $row['payment_status'] ?> </td>
                      <td> <?php echo $row['status_name'] ?> </td>
                      <td>
                          <form method="post">
                              <input type="text" class="" value="<?php $orderId ?>" name="orderId">
                              <select class="form-select" name="status_id">
                                  <option class="">Select Status</option>
                                <?php
                                  $sql = mysqli_query($con, "select * from order_status order by id asc");
                                  while ($row = mysqli_fetch_assoc($sql)) {
                                    echo "<option value=" . $row['id'] . ">" . $row['status_name'] . "</option>";
                                  }
                                ?>
                              </select>

                              <input type="submit" VALUE="Submit" class="btn btn btn-primary">
                          </form>

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