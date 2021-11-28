<?php require('header.php') ?>
<?php
  if (!isset($_SESSION['USER_LOGIN'])) {
    echo "<script>window.top.location='SignIn.php';</script>";
    exit;
  }
  
  $bookId = '';
  if (isset($_GET['id'])) {
    $bookId = mysqli_real_escape_string($con, $_GET['id']);
  }
  $getProduct = getProduct($con, '', '', $bookId);
  
  if (isset($_POST['submit'])) {
    $address = getSafeValue($con, $_POST['address']);
    $address2 = getSafeValue($con, $_POST['address2']);
    $pin = getSafeValue($con, $_POST['pin']);
    $paymentMethod = getSafeValue($con, $_POST['paymentMethod']);
    $userId = $_SESSION['USER_ID'];
    $total = $getProduct['0'] ['price'];
    $paymentStatus = 'pending';
    if ($paymentMethod == 'COD') {
      $paymentStatus = 'success';
    }
    $orderStatus = '1';
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO orders(user_id, address, address2, pin, payment_method, total, payment_status, order_status, date)
            VALUES ('$userId', '$address', '$address2', '$pin','$paymentMethod','$total','$paymentStatus','$orderStatus','$date')";
    mysqli_query($con, $sql);
    
    $orderId = mysqli_insert_id($con);
    $productId = $getProduct['0'] ['id'];
    
    mysqli_query($con, "INSERT INTO order_detail(order_id,book_id,price)
                                VALUES ('$orderId', '$productId', '$total')");
    ?>
      <script>window.top.location = 'thankYou.php?orderId=<?php echo $orderId ?>';</script>
    <?php
  }
?>
<script>
    document.title = "Checkout | Book Rental";
</script>
<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Checkout</h2>
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your book</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0"><?php echo $getProduct['0'] ['name'] ?></h6>
                        </div>
                        <strong>₹<?php echo $getProduct['0'] ['price'] ?></strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-center lh-sm">
                        <p>
                            <span>₹<?php echo $getProduct['0'] ['rent'] ?></span><span>(+₹<?php echo $getProduct['0'] ['security'] ?><abbr
                                        title="refund on book return">Security Charges</abbr>)</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Shipping address</h4>
                <form class="needs-validation" method="post" novalidate>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="address" class="form-label">Address Line 1</label>
                            <input type="text" class="form-control" name="address" placeholder="12 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Address Line 2 </label>
                            <input type="text" class="form-control" name="address2" placeholder="">
                        </div>

                        <div class="col-md-3">
                            <label for="pin" class="form-label">Pin Code</label>
                            <input type="number" maxlength="6" class="form-control" name="pin" placeholder="" required>
                            <div class="invalid-feedback">
                                Pin code required.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="my-3">
                        <div class="form-check">
                            <input id="cod" name="paymentMethod" type="radio" value="COD" class="form-check-input"
                                   checked
                                   required>
                            <label class="form-check-label" for="cod">Cash on delivery(COD)</label>
                        </div>
                        <div class="form-check">
                            <input id="payU" name="paymentMethod" type="radio" value="payU" class="form-check-input"
                                   required>
                            <label class="form-check-label" for="payU">Online Payment</label>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit">Continue to checkout
                    </button>
                </form>
            </div>
        </div>
    </main>


</div>
<script>
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        let forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<?php require('footer.php') ?>
