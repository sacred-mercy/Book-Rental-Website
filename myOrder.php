<?php require('header.php') ?>
<?php
  if (!isset($_SESSION['USER_LOGIN'])) {
    echo "<script>window.top.location='SignIn.php';</script>";
    exit;
  }
?>
<div class="container my-5">
    <table class="table-responsive table">
        <thead class="">
        <tr>
            <th> OrderID</th>
            <th>Order Date</th>
            <th>Book Name</th>
            <th>Book Price</th>
            <th>Address</th>
            <th>Payment Method</th>
            <th>Payment Status</th>
            <th>Order Status</th>
        </tr>
        </thead>
        <tbody>
        <?php
          $userId = '';
          $userId = $_SESSION['USER_ID'];
          $res = mysqli_query($con, "select orders.*,name,status_name from orders
                                            JOIN order_detail ON orders.id=order_detail.order_id
                                            JOIN books ON order_detail.book_id=books.id
                                            JOIN order_status ON orders.order_status=order_status.id
                                            where user_id = $userId");
          while ($row = mysqli_fetch_assoc($res)) { ?>
              <tr>
                  <td> <?php echo $row['id'] ?> </td>
                  <td> <?php echo $row['date'] ?> </td>
                  <td> <?php echo $row['name'] ?> </td>
                  <td> <?php echo $row['total'] ?> </td>
                  <td> <?php echo $row['address'] ?>, <?php echo $row['address2'] ?> </td>
                  <td> <?php echo $row['payment_method'] ?> </td>
                  <td> <?php echo $row['payment_status'] ?> </td>
                  <td> <?php echo $row['status_name'] ?> </td>
              </tr>
          <?php } ?>
        </tbody>
    </table>
</div>