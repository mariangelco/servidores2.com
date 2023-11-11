<?php
$servername = "localhost";
$dbname = "Supercito";
$username = "admin";
$password = "Luis.312";

// Create a connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$con) {
    die("Conexión fallida: " . mysqli_connect_error());
}

echo "Conexión exitosa <br>";

// SQL statement to insert a record
$sql = "INSERT INTO Producto (Clave, Producto, Cantidad) VALUES (1234, 'Galletas', 3)";

if (mysqli_query($con, $sql)) {
    echo "Registro agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
