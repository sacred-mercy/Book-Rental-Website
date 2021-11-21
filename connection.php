<?php
  session_start();
  $con = mysqli_connect("localhost", "root", "", "book_rental");
  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
  const SITE_PATH = 'http://localhost:63342/BscitMiniProject3rdSem' . '/';
  
  
  const BOOK_IMAGE_SERVER_PATH = SERVER_PATH . '/Img/books/';
  const BOOK_IMAGE_SITE_PATH = SITE_PATH . '/Img/books/';


