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
    $Categoria = $_POST['Categoria'];
    $Producto = $_POST['Producto'];

    $sql = "UPDATE Producto SET Producto='$Producto' WHERE Categoria = '$Categoria'";

    if (mysqli_query($con, $sql)) {
        echo "Registro modificado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);
?>

