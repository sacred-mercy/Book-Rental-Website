<?php require('header.php') ?>
<?php
  if (!isset($_SESSION['USER_LOGIN'])) {
    echo "<script>window.top.location='SignIn.php';</script>";
    exit;
  }
?>
<script>
    document.title = "My Orders | Book Rental";
</script>
<div class="container mt-5">
    <div class="d-flex justify-content-center">
        <h1>My Orders
            <hr>
        </h1>
    </div>
    <table class="table table-responsive">
        <thead class="">
        <tr>
            <th> OrderID</th>
            <th>Order Date</th>
            <th>Book Name</th>
            <th>Price</th>
            <th>Duration</th>
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
                                            where user_id = $userId order by orders.id desc");
          while ($row = mysqli_fetch_assoc($res)) { ?>
              <tr>
                  <td> #<?php echo $row['id'] ?> </td>
                  <td> <?php echo $row['date'] ?> </td>
                  <td> <?php echo $row['name'] ?> </td>
                  <td> <?php echo $row['total'] ?> </td>
                  <td> <?php echo $row['duration'] ?> </td>
                  <td> <?php echo $row['address'] ?>, <?php echo $row['address2'] ?> </td>
                  <td> <?php echo $row['payment_method'] ?> </td>
                  <td> <?php echo $row['payment_status'] ?> </td>
                  <td> <?php echo $row['status_name'] ?> </td>
              </tr>
          <?php } ?>
        </tbody>
    </table>
</div>
