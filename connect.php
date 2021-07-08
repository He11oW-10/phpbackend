<?php
// db credentials
define('DB_HOST', 'testmysql2021.mysql.database.azure.com');
define('DB_USER', 'testmysql2021');
define('DB_PASS', 'test-mysql2021');
define('DB_NAME', 'test');

// Connect with the database.
function connect()
 {
   $connect = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);

   if (mysqli_connect_errno($connect)) {
        die("Failed to connect:" . mysqli_connect_error());
   }

   mysqli_set_charset($connect, "utf8");

  return $connect;
}

$con = connect();
