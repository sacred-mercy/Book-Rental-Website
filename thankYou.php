<?php require('header.php') ?>
<?php
  $orderId = '';
  if (isset($_GET['orderId'])) {
    $orderId = mysqli_real_escape_string($con, $_GET['orderId']);
  }
?>
<div class="container py-5 justify-content-center">

    <h2>Your order is Confirmed! <i class="fas fa-truck-moving"></i></h2><br>

    <p>Your order id is: #<?php echo $orderId ?></p>

    <p><strong>Thank You <?php $userName = $_SESSION['USER_NAME'];
          echo $userName; ?></strong> for shopping with us! We are delivering your order.</p>

    <p> We will be sending shipping confirmation email when the item will be shipped successfully.</p>
    <p>Team Book rental</p><br>
</div>
