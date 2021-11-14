<?php
require('connection.php');
require('function.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN'] !=' ') {

}else{
  header('location:login.php');
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/admin.css" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
      integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <!--Main Navigation-->
    <header>
      <!-- Sidebar -->
      <nav
        id="sidebarMenu"
        class="collapse d-lg-block sidebar collapse bg-white"
      >
        <div class="position-sticky">
          <div class="list-group list-group-flush mx-3 mt-4">
            <a
              href="categories.php"
              class="list-group-item list-group-item-action py-2 ripple"
              aria-current="true"
            >
              <span>Categories</span>
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action py-2 ripple"
            >
              <span>Books list </span>
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action py-2 ripple"
              ><span>Order</span></a
            >
            <a
              href="#"
              class="list-group-item list-group-item-action py-2 ripple"
              ><span>User</span></a
            >
            <a
              href="#"
              class="list-group-item list-group-item-action py-2 ripple"
            >
              <span>Contact Us</span>
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action py-2 ripple"
              ><span>Orders</span></a
            >
            
          </div>
        </div>
      </nav>
      <!-- Sidebar -->

      <!-- Navbar -->
      <nav
        id="main-navbar"
        class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-1-strong"
      >
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#sidebarMenu"
            aria-controls="sidebarMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="#">
            <img
              src="..\Img\logo.png"
              height="30"
              alt="Logo"
              loading="lazy"
            />
          </a>

          <!-- Right links -->
          <ul class="navbar-nav ms-auto d-flex flex-row">
            <!-- Notification dropdown -->
            <li class="nav-item dropdown">
              <a
                class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-bell"></i>
                <span class="badge rounded-pill badge-notification bg-danger"
                  >1</span
                >
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="#">Some news</a></li>
                <li><a class="dropdown-item" href="#">Another news</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else</a>
                </li>
              </ul>
            </li>

            <!-- Avatar -->
            <li class="nav-item dropdown">
              <a
                class="
                  nav-link
                  dropdown-toggle
                  hidden-arrow
                  d-flex
                  align-items-center
                "
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                  class="rounded-circle"
                  height="22"
                  alt=""
                  loading="lazy"
                />
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Container wrapper -->
      </nav>
      <!-- Navbar -->
    </header>