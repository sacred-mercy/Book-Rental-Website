<?php require('header.php') ?>
<?php
  $msg = '';
  if (isset($_POST['submit'])) {
    $name = getSafeValue($con, $_POST['name']);
    $email = getSafeValue($con, $_POST['email']);
    $mobile = getSafeValue($con, $_POST['mobile']);
    $password = getSafeValue($con, $_POST['password']);
    $check_user = mysqli_num_rows(mysqli_query($con, "select * from users where email='$email'"));
    $doj = date('Y-m-d H:i:s');
    if ($check_user > 0) {
      $msg = "Email ID already exists please login";
    } else {
      $sql = "insert into users(name, email, mobile, password ,doj)
            values('$name', '$email', '$mobile', '$password', '$doj')";
      if (mysqli_query($con, $sql)) {
        $msg = "Registered successfully please login";
      } else {
        $msg = "error";
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
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
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
                                            type="tel"
                                            class="form-control"
                                            id="mobile"
                                            name="mobile"
                                            placeholder="number"
                                            required
                                    />
                                    <label for="mobile">Mobile Number</label>
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
                              <?php echo $msg ?>
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
                                    <span style="color: blue">Login</span></a
                                >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>