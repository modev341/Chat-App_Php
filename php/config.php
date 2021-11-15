<?php
  $hostname = "localhost";
  $username = "id17012412_simo";
  $password = "A~6^MDY9fk8l%5{e";
  $dbname = "id17012412_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
