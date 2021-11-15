<?php
session_start();
$con=mysqli_connect("localhost","root","","book_rental");
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>
