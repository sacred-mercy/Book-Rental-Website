<?php
require('connection.php');
require('function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Icon -->
    <link rel="shortcut icon" href="Img/icon.png" type="image/x-icon" />
    <!-- Default CSS -->
    <link rel="stylesheet" href="css/Style.css" />
    <!-- Bootstrap -->
    <link id="theme" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Default JS-->
    <script src="js/script.js"></script>
    <title>Home | Book Rental</title>
</head>

<body>
    <section id="#navbar">
        <nav class="navbar-expand-lg">
            <button class="navbar-toggler" title="Menu" type="button" data-bs-toggle="collapse"
                data-bs-target="#mynavbar">
                <span style="font-size: 1.8465rem; color: black;"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse" id="mynavbar">
                <ul class="nabar">
                    <li class="nav-item">
                        <a id="#home" class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="bookCategory.php">Book Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">Contact Us</a>
                    </li>
            </div>
            </div>
        </nav>
    </section>
    <br>
    <br>