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
  
  //
  
  