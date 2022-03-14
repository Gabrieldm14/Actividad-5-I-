<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "comercio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO productos (id,nombre,tipo,precio,unidades, categoria) VALUES
('5,'Avast','SOFWARE',51.00,22,1')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 