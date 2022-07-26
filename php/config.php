<?php
  $hostname = "remotemysql.com";
  $username = "Um74o5b0qS";
  $password = "YgK5GnLEqI";
  $dbname = "Um74o5b0qS";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
