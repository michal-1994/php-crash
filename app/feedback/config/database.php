<?php
define('DB_HOST', 'mysql_name');
define('DB_USER', 'user');
define('DB_PASS', 'user_password');
define('DB_NAME', 'db_name');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// echo 'Connected successfully';