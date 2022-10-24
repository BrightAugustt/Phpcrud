<?php
$connection = mysqli_connect("us-cdbr-east-06.cleardb.net","b9e2f55baf0395","e3e1ccc3","heroku_28ad1c02dc3433c");


// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    echo "Unsuccessful connnection";
  }

?> 
