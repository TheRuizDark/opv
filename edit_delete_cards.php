<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tarjeta_id = $_POST['tarjeta_id'];

    if (isset($_POST['edit'])) {
        // Redirigir a la página de edición con el ID de la tarjeta
        header("Location: edit_card.php?tarjeta_id=$tarjeta_id");
        exit();
    } elseif (isset($_POST['delete'])) {
        // Eliminar la tarjeta de la base de datos
        $sql = "DELETE FROM tarjetas WHERE id = $tarjeta_id";

        if ($conn->query($sql) === TRUE) {
            echo "Tarjeta eliminada con éxito";
            echo '<script>alert("Tarjeta eliminada con éxito");</script>';
        } else {
            echo "Error al eliminar la tarjeta: " . $conn->error;
        }

        // Redirigir a la página de visualización de tarjetas después de eliminar
        echo '<script>setTimeout(function(){ window.location.href = "view_cards.php"; }, 1000);</script>';
        exit();
    }
}

$conn->close();
?>
