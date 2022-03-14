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

$sql = "SELECT id,nombre,tipo,precio,unidades, categoria FROM productos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. "- tipo: " . $row["tipo"]. " - precio: ". $row["precio"]. " - unidades: ". $row["unidades"]."<br><br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>