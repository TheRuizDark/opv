<?php
include('db.php');

// Obtener tarjetas
$tarjetasData = array();

$sql = "SELECT * FROM tarjetas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tarjetasData[] = $row;
    }
}

// Convertir a formato JSON y devolver al cliente
echo json_encode($tarjetasData);

// Cerrar conexión
$conn->close();
?>
