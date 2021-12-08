<?php
  require('connection.php');
  require('function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Icon -->
    <link rel="shortcut icon" href="Img/icon.png" type="image/x-icon"/>

    <!-- Default CSS -->
    <link rel="stylesheet" href="css/Style.css"/>
    <!-- Bootstrap -->
    <link
            id="theme"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
    />
    <!-- Font Awesome Fonts-->
    <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
    />
    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Default JS-->
    <script src="js/script.js"></script>
    <title>Home | Book Rental</title>
</head>

<body>
<section id="#navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <a
                class="navbar-brand img-fluid"
                href="index.php">

            <img src="Img/logo.png" alt="logo" height="40vw"
            /></a>
        <button
                class="navbar-toggler"
                title="Menu"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mynavbar"
        >
            <span style="font-size: 1.8465rem; color: #fff">
              <i class="fas fa-bars"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav navbar me-auto ">
                <li class="nav-item">
                    <a id="#home" class="nav-link" href="index.php"
                    ><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="bookCategory.php">Book Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactUs.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">About Us</a>
                </li>
              <?php
                if (isset($_SESSION['USER_LOGIN'])) {
                  echo '<li class="nav-item">
                    <a class="nav-link" href="myOrder.php">My Orders</a>
                </li>';
                }
              ?>

            </ul>

            <!--                <form class="d-flex" id="searchBar">-->
            <!--                    <input-->
            <!--                            class="form-control"-->
            <!--                            type="text"-->
            <!--                            placeholder="Search by Title or Author..."-->
            <!--                    />-->
            <!--                    <button-->
            <!--                            title="Search"-->
            <!--                            class="btn text-white search-btn me-1"-->
            <!--                            type="submit"-->
            <!--                    >-->
            <!--                        <i class="fas fa-search"></i>-->
            <!--                    </button>-->
            <!--                </form>-->
            <div class="btn-dark btn  btn-outline-light me-2 text-decoration-none login-btn">
              <?php
                if (isset($_SESSION['USER_LOGIN'])) {
//                  $userName = $_SESSION['USER_NAME'];
//                      echo $userName;
                  echo '<a class="text-decoration-none me-1 text-white" href="logout.php"> Logout</a>';
                } else {
                  echo '<i class="fas fa-user-circle me-1 text-white "></i><a class="text-decoration-none text-white" href="SignIn.php"> Login</a>';
                }
              ?>
            </div>
        </div>
        <!--            <div id="Username" class="navbar-nav me-auto fs-5 me-3">-->
        <!--                <li class="nav-item dropdown">-->
        <!--                    <a-->
        <!--                            class="nav-link dropdown-toggle"-->
        <!--                            href="#"-->
        <!--                            role="button"-->
        <!--                            data-bs-toggle="dropdown"-->
        <!--                    >Hello, --><?php //echo $userName ?><!-- </a-->
        <!--                    >-->
        <!--                    <ul class="dropdown-menu dropdown-menu-dark">-->
        <!--                        <li>-->
        <!--                            <a class="dropdown-item-text text-white-50 text-decoration-none"-->
        <!--                               href="logout.php">Logout</a>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                </li>-->
        <!--            </div>-->
    </nav>
</section>
<br>
<br>