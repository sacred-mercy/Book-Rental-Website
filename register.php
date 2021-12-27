<?php
  require('header.php');
  if (isset($_SESSION['USER_LOGIN'])) {
    echo "<script>window.top.location='index.php';</script>";
    exit;
  }
?>
<?php
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
            //validation for mobile
//    if (empty($_POST["mobile"])) {
//      $mobileErr = "Please enter Phone Number";
//    } else {
//      $mobileTemp = getSafeValue($con, $_POST['mobile']);
//      if (preg_match("/^[0-9]{10}+$/", $mobileTemp)) {
            $mobile = getSafeValue($con, $_POST['mobile']);
//      } else {
//        $mobileErr = "Only numbers allowed";
//      }
//    }
            $password = getSafeValue($con, $_POST['password']);
            date_default_timezone_set('Asia/Kolkata');
            $doj = date('Y-m-d H:i:s');
            $check_user = mysqli_num_rows(mysqli_query($con, "select * from users where email='$email'"));
            if ($check_user > 0) {
              $msg = "Email ID already exists please login";
            } else {
              $sql = "insert into users(name, email, mobile, password ,doj)
            values('$name', '$email', '$mobile', '$password', '$doj')";
              if (mysqli_query($con, $sql)) {
                echo "<script>window.top.location='SignIn.php';</script>";
              } else {
                $msg = "error";
              }
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
    document.title = "Register | Book Rental";
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-xl-11">
            <div class="card-body p-md-5">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                        <div class="d-flex justify-content-center mb-3 mb-lg-4">
                            <h2>Registration</h2>
                        </div>
                        <form class="mx-1 mx-md-4" method="post">
                            <div class="d-flex align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-floating flex-fill">
                                    <input
                                            type="text"
                                            class="form-control"
                                            id="name"
                                            name="name"
                                            placeholder="name1234"
                                            required
                                    />
                                    <label for="name">Name</label>
                                </div>

                            </div>


                            <div class="d-flex align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-floating flex-fill">
                                    <input
                                            type="email"
                                            class="form-control"
                                            id="email"
                                            name="email"
                                            placeholder="name@example.com"
                                            required
                                    />
                                    <label for="email">Email address</label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-floating flex-fill">
                                    <input
                                            type="number"
                                            min="1111111111"
                                            max="9999999999"
                                            class="form-control"
                                            id="mobile"
                                            name="mobile"
                                            placeholder="number"
                                            required
                                    />
                                    <label for="mobile">Mobile Number(Without +91)</label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                <div class="form-floating flex-fill">
                                    <input
                                            type="password"
                                            class="form-control"
                                            id="password"
                                            name="password"
                                            placeholder="Password"
                                            required
                                    />
                                    <label for="password">Password</label>
                                </div>
                            </div>

                            <div id="error" class="text-center mb-3">
                              <?php
                                echo $msg . "\n";
                                echo $nameErr . "\n";
                                echo $emailErr . "\n";
                                echo $mobileErr . "\n";
                              ?>
                            </div>

                            <div class="d-flex justify-content-center mb-3 mb-lg-4">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>

                            <div style="text-align: center; margin-top: 30px">
                                <a
                                        href="SignIn.php"
                                        class="text-decoration-none text-black"
                                >
                                    Already have an account?
                                    <span style="color: rgb(138, 110, 253)">Login</span></a
                                >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------------------------------------DARK MODE BUTTON----------------------------------------------------------->
<div id="dark-btn">
    <button onclick="DarkMode()" id="dark-btn" title="Toggle Light/Dark Mode">
        <span><i class="fas fa-adjust fa-lg text-white"></i></span>
    </button>

    <script>
        //Dark Mode
        function DarkMode() {
            let element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>
</div>