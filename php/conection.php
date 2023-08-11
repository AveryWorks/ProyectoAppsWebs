<?php
$host = 'bl5kioqvakcwe5ondzsl-mysql.services.clever-cloud.com';
$dbName = 'bl5kioqvakcwe5ondzsl';
$user = 'uxedxshandegzmdk';
$password = 'ZaEy1j1xwsmA4Im2Q3gx';
$port = 3306;

// Crear una conexión
$conn = new mysqli($host, $user, $password, $dbName, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos.";

// Realizar operaciones en la base de datos aquí

// Cerrar la conexión cuando hayas terminado
$conn->close();
?>
