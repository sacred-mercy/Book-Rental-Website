<?php
require('header.php');
if (!isset($_SESSION['USER_LOGIN'])) {
  echo "<script>window.top.location='SignIn.php';</script>";
  exit;
}
$userId = $_SESSION['USER_ID'];
$res = mysqli_query($con, "select * from users where id='$userId'");
$row = mysqli_fetch_assoc($res);
$nameAuto = $row['name'];
$emailAuto = $row['email'];
$mobileAuto = $row['mobile'];
$passwordCheck = $row['password'];
$msg = '';
$nameErr = $emailErr = $mobileErr = $passwordErr = "";
$nameTemp = $emailTemp = $mobileTemp = $passwordTemp = "";
if (isset($_POST['submit'])) {
  //validation for name
  if (empty($_POST["name"])) {
    $nameErr = "Please enter a name";
  } else {
    $nameTemp = getSafeValue($con, $_POST['name']);
    if (preg_match("/^[a-zA-Z-' ]*$/", $nameTemp)) {
      $name = getSafeValue($con, $_POST['name']);
      //validation for email
      if (empty($_POST["email"])) {
        $emailErr = "Please enter Email address";
      } else {
        $emailTemp = getSafeValue($con, $_POST['email']);
        if (filter_var($emailTemp, FILTER_VALIDATE_EMAIL)) {
          $email = getSafeValue($con, $_POST['email']);
          $mobile = getSafeValue($con, $_POST['mobile']);
          //Validation for password
          if (empty($_POST["password"])) {
            $passwordErr = "Please enter a password";
          } else {
            $passwordTemp = getSafeValue($con, $_POST['password']);
          }
          $password = md5($passwordTemp);
          date_default_timezone_set('Asia/Kolkata');
          $doj = date('Y-m-d H:i:s');
          if ($password == $passwordCheck) {
            $sql = "UPDATE users SET name='$name', email='$email', mobile='$mobile' WHERE id='$userId'";
            if (mysqli_query($con, $sql)) {
              $msg = 'Updated Succesfully --> Changes will be visible next time you login';
            } else {
              $msg = "error";
            }
          } else {
            $msg = 'Please Enter Correct Password';
          }
        } else {
          $emailErr = "Please enter valid Email address";
        }
      }
    } else {
      $nameErr = "Only letters and white space allowed in Name";
    }
  }
}
?>
<script>
document.title = "Profile | Book Rental";
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-xl-11">
            <div class="card-body p-md-5">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                        <div class="d-flex justify-content-center mb-3 mb-lg-4">
                            <h2>Edit Profile</h2>
                        </div>
                        <form class="mx-1 mx-md-4" method="post" autocomplete="off">
                            <div class="d-flex align-items-center ">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-floating flex-fill">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="name1234"
                                        value="<?php echo $nameAuto ?>" required />
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <?php echo '<p style="color: red" class="ms-5">' . $nameErr . '</p>' ?>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-floating flex-fill">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="name@example.com" value="<?php echo $emailAuto ?>" required />
                                    <label for="email">Email address</label>
                                </div>
                            </div>
                            <?php echo '<p style="color: red" class="ms-5">' . $emailErr . '</p>' ?>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-floating flex-fill">
                                    <input type="number" min="1111111111" max="9999999999" class="form-control"
                                        id="mobile" name="mobile" placeholder="number" value="<?php echo $mobileAuto ?>"
                                        required />
                                    <label for="mobile">Mobile Number(Without +91)</label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-4 mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                <div class="form-floating flex-fill">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password" value="" required />
                                    <label for="password">Enter current Password</label>
                                </div>
                            </div>
                            <div id="error" class="text-center mb-3">
                                <?php ?>
                            </div>
                            <p style="color: red" class="ms-5"><?php echo $msg ?></p>
                            <div class="d-flex justify-content-center mb-3 mb-lg-4">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>