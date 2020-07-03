<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

////https://dbadmin.dyn.vnappmob.com/
////root
////p@ssw0rd

$servername = "mysqldb"; ///predefined by docker
$username = "hienvu";
$password = "12345678";
$dbname = "hienvu";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $products = [];

  while ($row = mysqli_fetch_assoc($result)) {
    array_push($products, $row);
}

} else {
  echo "0 results";
}

mysqli_close($conn);