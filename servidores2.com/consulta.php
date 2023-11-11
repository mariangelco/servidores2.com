<?php
$servername = "localhost";
$dbname = "Supercito";
$username = "admin";
$password = "Luis.312";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}


$sql = "SELECT * FROM Producto";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<center><h3>Productos</h3></center>";

    echo "<table border='1'>";
    echo "<tr><th>Categoría</th><th>Producto</th><th>Precio</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['Categoria'] . "</td>";
        echo "<td>" . $row['Producto'] . "</td>";
        echo "<td>" . $row['Precio'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_free_result($result);
} else {
    echo "Error en la consulta: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

