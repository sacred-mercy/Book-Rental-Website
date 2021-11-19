<?php
  session_start();
  unset($_SESSION['ADMIN_LOGIN']);
  unset($_SESSION['ADMIN_EMAIL']);
  header('location:login.php');
  die();

