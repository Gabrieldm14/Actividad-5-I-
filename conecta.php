<?php

//Procedural

$servername = "localhost";
$username = "root";
$password = "123456789";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("<h1>Conexión incorrecta:</h1> " . mysqli_connect_error());
}
echo "<h1>¡Conexión corrcta!</h1>";
?> 