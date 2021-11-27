<?php require('header.php') ?>
<?php
  $msg = '';
  if (isset($_POST['submit'])) {
    $email = getSafeValue($con, $_POST['email']);
    $password = getSafeValue($con, $_POST['password']);
    $sql = "select * from users where email='$email' and password='$password'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
      $_SESSION['USER_LOGIN'] = 'yes';
      $_SESSION['USER_ID'] = $row['id'];
      $_SESSION['USER_NAME'] = $row['name'];
      echo "<script>window.top.location='index.php';</script>";
      exit;
    } else {
      $msg = "Invalid Username/Password";
    }
  }
?>
<script>
    document.title = "Login | Book Rental";
</script>
<div class="text-end me-3 mt-3">
    <a href="Admin\login.php" class="text-black" title="Admin Login"><i class="fas fa-user-circle"></i
        ></a>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-xl-11">
            <div class="card-body p-md-5">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                        <form class="mx-1 mx-md-4" method="post">
                            <div class="d-flex align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-floating flex-fill">
                                    <input
                                            type="email"
                                            name="email"
                                            class="form-control"
                                            id="email"
                                            placeholder="name@example.com"
                                            required
                                    />
                                    <label for="email">Email address</label>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-1">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-floating flex-fill">
                                    <input
                                            type="password"
                                            name="password"
                                            class="form-control"
                                            id="Password"
                                            placeholder="Password"
                                            required
                                    />
                                    <label for="Password">Password</label>
                                </div>
                            </div>

                            <div id="error" class="text-center mb-3" style="color: red">
                              <?php echo $msg ?>
                            </div>

                            <div class="d-flex justify-content-center mt-3 mb-3 mb-lg-4">
                                <button
                                        type="submit"
                                        name="submit"
                                        class="btn btn-primary  "
                                >
                                    Login
                                </button>
                            </div>

                            <div class="text-center mt-2">
                                <a
                                        href="register.php"
                                        class="text-decoration-none text-black"
                                >
                                    New to Book Rental?
                                    <span style="color: blue">Register</span></a
                                >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

