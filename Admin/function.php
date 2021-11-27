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
  
  function getSafeValue($con, $str)
  {
    if ($str != '') {
      $str = trim($str);
      return mysqli_real_escape_string($con, $str);
    }
  }

