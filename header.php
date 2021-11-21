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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    </script>
    <!-- Font Awesome Fonts-->
    <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
    />
    <!-- Default JS-->
    <script src="js/script.js"></script>
    <title>Home | Book Rental</title>
</head>

<body>
<section id="#navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container-fluid">
            <a
                    class="navbar-brand img-fluid"
                    style="line-height: 0% !important"
                    href="index.php"
            ><img src="Img/logo.png" alt="logo" height="46vw"
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
                <ul class="navbar-nav me-auto fs-5">
                    <li class="nav-item">
                        <a id="#home" class="nav-link" href="index.php"
                        ><i class="fas fa-home"></i> Home</a
                        >
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="bookCategory.php"
                        >Book Categories</a
                        >

                    </li>
                    <li class="nav-item dropdown">
                        <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                        >Contact Us</a
                        >
                        <ul class="dropdown-menu bg-dark">
                            <li>
                                <a
                                        class="
                        dropdown-item-text
                        text-white-50 text-decoration-none
                      "
                                        href="mailto:contact@bookrental.com?subject=Contact us"
                                ><i class="fas fa-envelope"></i> Email Us -
                                    contact@bookrental.com</a
                                >
                            </li>
                            <li>
                                <hr class="dropdown-divider"/>
                            </li>
                            <li>
                                <a
                                        class="
                        dropdown-item-text
                        text-white-50 text-decoration-none
                      "
                                        href="tel:+911234567890"
                                ><i class="fas fa-phone"></i> Call Us - +911234567890</a
                                >
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/aboutUs.html">About Us</a>
                    </li>
                </ul>

                <form class="d-flex" id="searchBar">
                    <input
                            class="form-control"
                            type="text"
                            placeholder="Search by Title or Author..."
                    />
                    <button
                            title="Search"
                            class="btn text-white search-btn me-1"
                            type="submit"
                    >
                        <i class="fas fa-search"></i>
                    </button>
                </form>

                <div class="login-margin flex-wrap">
              <span
              ><button
                          onclick="window.location.href='SignIn.php';"
                          type="button"
                          class="
                    btn-dark btn
                    me-2
                    btn-outline-light
                    login-btn
                    text-white
                  "
                  >
                  <i class="fas fa-user-circle"></i
                  ><span style="margin-left: 4px">Login</span>
                </button>
              </span>
                </div>
            </div>
        </div>
    </nav>
</section>
<br>
<br>
<br>