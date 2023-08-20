<?php
// Incluye tu conexión
include 'conexion.php';

// Aquí deberías obtener el total desde el POST que viene de JavaScript
$totalAmount = isset($_POST['totalAmount']) ? intval($_POST['totalAmount']) : 0;

try {
    $stmt = $pdo->prepare("INSERT INTO total (total_amount) VALUES (:total_amount)");
    $stmt->bindParam(':total_amount', $totalAmount);
    $stmt->execute();
    
    // Una vez que se inserta el total, redireccionas al usuario a pay_delivery.php
    // Sin embargo, si estás haciendo una petición AJAX, en lugar de redirigir, deberías devolver una respuesta.
    // Por simplicidad, solo devolveremos un mensaje de éxito.
    echo "Total insertado correctamente.";
    // Si quieres redirigir usando AJAX, deberías hacerlo en el lado de JavaScript luego de obtener una respuesta exitosa.
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
