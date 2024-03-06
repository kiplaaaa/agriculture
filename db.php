<?php
// Create connection
$conn=mysqli_connect("localhost","root","","agrimovers");

// Check connection
if (!$conn)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>