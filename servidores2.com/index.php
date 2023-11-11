<?php
$conn = new mysqli("localhost", "admin", "Luis.312", "Supercito");
if ($conn->connect_error) {
    die('Conexión fallida: ' . $conn->connect_error);
}
echo 'Conexión exitosa <br>';
$conn->close();
echo '¿Que accion desea realizar hoy? <br> 1.- Consultar registros <br> 2.- Ingresar registros <br> 3.- Actualizar registros <br> 4.- Eliminar registro <br> 5.- Salir ';

?>
