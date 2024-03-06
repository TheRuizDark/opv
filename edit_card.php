<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['tarjeta_id'])) {
    $tarjeta_id = $_GET['tarjeta_id'];

    // Obtener los detalles de la tarjeta
    $sql = "SELECT * FROM tarjetas WHERE id = $tarjeta_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $tarjeta = $result->fetch_assoc();
    } else {
        echo "Tarjeta no encontrada";
        exit();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Editar Tarjeta</title>
</head>
<body>

    <h1>Editar Tarjeta</h1>

    <form action="update_card.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="tarjeta_id" value="<?php echo $tarjeta_id; ?>">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value="<?php echo $tarjeta['titulo']; ?>" required>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" accept="image/*">

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required><?php echo $tarjeta['descripcion']; ?></textarea>

        <button type="submit">Guardar Cambios</button>
    </form>

    <a id="crear-tarjeta-btn" href="view_cards.php">Ver Tarjetas</a>

    <script src="scripts.js"></script>
</body>
</html>
