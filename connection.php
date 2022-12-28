<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "lotory";

  $conn = mysqli_connect($server, $username, $password, $database);
  if(!$conn){
    die("connection unsuccessful . mysqli_connect_error()");
  }

?>