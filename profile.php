<?php
  require('header.php');
  if (!isset($_SESSION['USER_LOGIN'])) {
    echo "<script>window.top.location='SignIn.php';</script>";
    exit;
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
                              <?php echo $msg ?>
                            </div>

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