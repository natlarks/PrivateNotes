<?php

$conn = mysqli_connect("localhost", "root", "PASSWORD", "DB_NAME");

if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

?>
