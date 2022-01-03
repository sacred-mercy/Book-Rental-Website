<?php require('header.php') ?>
<?php
$msg = '';
if (isset($_POST['submit'])) {
  $name = getSafeValue($con, $_POST['name']);
  $email = getSafeValue($con, $_POST['email']);
  $mobile = getSafeValue($con, $_POST['mobile']);
  $message = getSafeValue($con, $_POST['message']);
  date_default_timezone_set('Asia/Kolkata');
  $dateTime = date('Y-m-d H:i:s');
  $sql = "insert into contact_us(name, email, mobile, message, date)
            values('$name', '$email', '$mobile', '$message','$dateTime')";
  if (mysqli_query($con, $sql)) {
    $msg = "Message sent";
  } else {
    $msg = "error";
  }
}
if (isset($_SESSION['USER_LOGIN'])) {
  $userId = $_SESSION['USER_ID'];
  $res = mysqli_query($con, "select * from users where id='$userId'");
  $row = mysqli_fetch_assoc($res);
  $nameAuto = $row['name'];
  $emailAuto = $row['email'];
  $mobileAuto = $row['mobile'];
} else {
  $nameAuto = '';
  $emailAuto = '';
  $mobileAuto = '';
}
?>
<script>
document.title = "Contact Us | Book Rental";
</script>
<div class="container my-5">
    <div class="d-flex justify-content-center">
        <h1>Contact Us
            <hr>
        </h1>
    </div>
    <form method="post" class="row g-3 ">
        <div class="col-md-4">
            <label for="name" class="form-label fw-bold fs-5">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $nameAuto ?>" required>
        </div>
        <div class="col-md-4">
            <label for="email" class="form-label fw-bold fs-5">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $emailAuto ?>" required>
        </div>
        <div class=" col-md-4">
            <label for="mobile" class="form-label fw-bold fs-5">Mobile Number</label>
            <input type="tel" maxlength="12" class="form-control" id="mobile" name="mobile"
                value="<?php echo $mobileAuto ?>" required>
        </div>
        <div class=" col-md-12">
            <label for="message" class="form-label fw-bold fs-5">Message</label>
            <textarea maxlength="500" type="text" class="form-control" style="height:10rem" id="message" name="message"
                required></textarea>
        </div>

        <div id="error" class="text-center mb-3">
            <?php echo $msg ?>
        </div>

        <div class="text-center">
            <div class="col-12">
                <button class="btn btn-primary w-25" type="submit" name="submit">Submit
                </button>
            </div>
        </div>
    </form>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-6">
            <a class="text-black text-decoration-none text-break fs-4"
                href="mailto:contact@bookrental.com?subject=Contact us"><i class="fas fa-envelope"></i> Email Us -
                contact@bookrental.com</a>
        </div>
        <div class="col-6 text-end">
            <a class="text-black text-decoration-none text-break fs-4 text-end" href="tel:+911234567890"><i
                    class="fas fa-phone"></i> Call Us - +911234567890</a>
        </div>
    </div>
</div>
<?php require('footer.php') ?>