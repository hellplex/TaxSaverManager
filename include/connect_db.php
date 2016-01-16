<?php
  //Array to store validation errors
  $errmsg_arr = array();

  //Validation error flag
  $errflag = false;

  //Connect to mysql server
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die($conn->connect_error);
?>