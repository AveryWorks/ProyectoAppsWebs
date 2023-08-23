<?php
include 'conexion.php';

$totalAmount = isset($_POST['totalAmount']) ? intval($_POST['totalAmount']) : 0;

try {
    $stmt = $pdo->prepare("INSERT INTO total (total_amount) VALUES (:total_amount)");
    $stmt->bindParam(':total_amount', $totalAmount);
    $stmt->execute();
    
    
    echo "Total insertado correctamente.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
