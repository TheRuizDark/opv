<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tarjeta_id = $_POST['tarjeta_id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    // Actualizar la tarjeta en la base de datos
    $sql = "UPDATE tarjetas SET titulo='$titulo', descripcion='$descripcion' WHERE id=$tarjeta_id";

    if ($conn->query($sql) === TRUE) {
        echo "Tarjeta actualizada con éxito";
        echo '<script>alert("Tarjeta actualizada con éxito");</script>';
    } else {
        echo "Error al actualizar la tarjeta: " . $conn->error;
    }

    // Redirigir a la página de visualización de tarjetas después de actualizar
    echo '<script>setTimeout(function(){ window.location.href = "view_cards.php"; }, 1000);</script>';
}

$conn->close();
?>
