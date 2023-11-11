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

if (isset($_POST['submit'])) {
    $Producto = $_POST['Producto'];
    
    $sql = "DELETE FROM Producto WHERE Producto = '$Producto'";

    if (mysqli_query($con, $sql)) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);
?>

