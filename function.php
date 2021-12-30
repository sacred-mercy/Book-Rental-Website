<?php
//  to get data from form
  function getSafeValue($con, $str)
  {
    if ($str != '') {
      $str = trim($str);
      $str = stripslashes($str);
      $str = htmlspecialchars($str);
      return mysqli_real_escape_string($con, $str);
    }
  }

//  to get book data from database
  function getProduct($con, $limit = '', $categoryId = '', $bookId = '', $orderBy = '')
  {
    $sql = "select * from books where status=1";
    
    if ($orderBy != '') {
      $sql .= " order by $orderBy";
    }
    
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

//To update the user data
  function updateProfile($con, $changeName = '', $changeEmail = '', $changeMobile = '', $changePassword = '')
  {
    $sql = "UPDATE user Set";
    
    if ($changeName != '') {
      $sql .= " name=$changeName";
    }
    
    if ($changeEmail != '') {
      $sql .= " and email=$changeEmail";
    }
    
    if ($changeMobile != '') {
      $sql .= " and mobile=$changeMobile";
    }
    
    if ($changePassword != '') {
      $sql .= " and password=$changePassword";
    }
  }