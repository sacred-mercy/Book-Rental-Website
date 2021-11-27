<?php
  function pr($arr)
  {
    echo '<pre>';
    print_r($arr);
  }
  
  function prx($arr)
  {
    echo '<pre>';
    print_r($arr);
    die();
  }

//  to get data from form
  function getSafeValue($con, $str)
  {
    if ($str != '') {
      $str = trim($str);
      return mysqli_real_escape_string($con, $str);
    }
  }

//  to get book data from database
  function getProduct($con, $limit = '', $categoryId = '', $bookId = '')
  {
    $sql = "select * from books where status=1";
    
    if ($limit != '') {
      $sql .= " limit $limit";
    }
    
    if ($bookId != '') {
      $sql .= " and id=$bookId";
    }
    
    if ($categoryId != '') {
      $sql .= " and category_id=$categoryId";
    }
    
    $res = mysqli_query($con, $sql);
    $data = array();
    while ($row = mysqli_fetch_assoc($res)) {
      $data[] = $row;
    }
    return $data;
  }
  
  
  
  //  class addToCart
  //  {
  //    function addBook()
  //    {
  //      $_SESSION['cart'] [$id];
  //    }
  //
  //    function removeBook()
  //    {
  //      if (isset($_SESSION['cart'] [$id])) {
  //        unsset($_SESSION['cart'] [$id]);
  //      }
  //    }
  //
  //    function emptyBook()
  //    {
  //      unsset($_SESSION['cart']);
  //
  //    }
  //  }
  
  