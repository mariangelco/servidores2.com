<?php
$servername = "localhost";
$dbname = "Supercito";
$username = "admin";
$password = "Luis.312";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $Categoria = $_POST['Categoria'];
    $Producto = $_POST['Producto'];
    $Precio = $_POST['Precio'];

    $sql = "INSERT INTO Producto (Categoria, Producto, Precio) VALUES ('$Categoria', '$Producto', '$Precio')";

    if (mysqli_query($conn, $sql)) {
        echo "Registro ingresado correctamente";
    } else {
        echo "Error al insertar registro: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
