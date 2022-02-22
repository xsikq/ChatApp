<?php
  $hostname = "localhost";
  $username = "xsikqmyi_chat";
  $password = ")2^N_tSmuON{";
  $dbname = "xsikqmyi_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
