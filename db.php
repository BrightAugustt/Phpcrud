 <?php
$connection = mysqli_connect("us-cdbr-east-06.cleardb.net","b8381e8687357a","246b0cb1","heroku_c41210addaccbb7");


// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    echo "Unsuccessful connnection";
  }

  mysql://b8381e8687357a:246b0cb1@us-cdbr-east-06.cleardb.net/heroku_c41210addaccbb7?reconnect=true
?> 
