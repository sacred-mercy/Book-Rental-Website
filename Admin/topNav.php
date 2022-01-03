<?php
require('connection.php');
require('function.php');
if (isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN'] != ' ') {
} else {
    header('location:login.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Admin Panel</title>
    <!-- Icon -->
    <link rel="shortcut icon" href="../Img/icon.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand" href="#">
                    <img src="..\Img\logo.png" height="30" alt="Logo" />
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="categories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="books.php">Books list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a href="returnDate.php" class="nav-link">Return Date</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback.php">Feedbacks</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center nav-item">
                <?php
                $userName = $_SESSION['ADMIN_email'];
                echo '<div class="btn-group shadow-0">
                            <button type="button" class="btn btn-light dropdown-toggle" data-mdb-toggle="dropdown" 
                                    aria-expanded="false">' . $userName . '</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    </ul>
                        </div>';
                ?>
            </div>
        </div>
    </nav>