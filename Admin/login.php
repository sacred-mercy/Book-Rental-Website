<?php
require('connection.php');
require('function.php');
$msg = $passwordTemp = '';
if (isset($_POST['submit'])) {
    $email = getSafeValue($con, $_POST['email']);
    $passwordTemp = getSafeValue($con, $_POST['password']);
    $password = md5($passwordTemp);
    $sql = "select * from admin where email='$email' and password='$password'";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        $_SESSION['ADMIN_LOGIN'] = 'yes';
        $_SESSION['ADMIN_email'] = $email;
        header('location:categories.php');
        die();
    } else {
        $msg = "Invalid Username/Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Icon -->
    <link rel="shortcut icon" href="../Img/icon.png" type="image/x-icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- Default CSS -->
    <link rel="stylesheet" href="../css/Style.css" />
    <!-- Bootstrap CSS -->
    <link id="theme" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Default JS-->
    <script src="js/script.js"></script>
    <title>Admin Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-11">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                            <p class="text-center h1 fw-bold mb-5 mt-3">Login</p>
                            <form class="mx-1 mx-md-4" method="post">
                                <div class="d-flex align-items-center mb-4">
                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                    <div class="form-floating flex-fill">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="name@example.com" required />
                                        <label for="email">Email address</label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                    <div class="form-floating flex-fill">
                                        <input type="password" name="password" class="form-control" id="Password"
                                            placeholder="Password" required />
                                        <label for="Password">Password</label>
                                    </div>
                                </div>
                                <div class="mt-2 mb-1 d-flex justify-content-center field_error">
                                    <?php echo $msg ?>
                                </div>
                                <div class="d-flex justify-content-center mt-3 mb-3 mb-lg-4">
                                    <button type="submit" name="submit" class="btn btn-primary  btn-lg">Login</button>
                                </div>
                                <div class="text-center mt-2">
                                    <a href="../index.php" class="text-decoration-none text-black">Not An Admin?
                                        <span style="color: blue">Click here</span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>