<?php
  $hostname = "localhost";
  $username = "root";
  $password = "B3gN4w8J";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
