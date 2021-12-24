<?php
  session_start();
  unset($_SESSION['USER_LOGIN']);
  unset($_SESSION['USER_ID']);
  unset($_SESSION['USER_NAME']);
  unset($_SESSION['BeforeCheckoutLogin']);
  header('location:index.php');
  die();
