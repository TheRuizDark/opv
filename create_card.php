<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    // Subir imagen
    $imagenNombre = $_FILES['imagen']['name'];
    $imagenTmp = $_FILES['imagen']['tmp_name'];
    $imagenPath = 'uploads/' . $imagenNombre;
    move_uploaded_file($imagenTmp, $imagenPath);

    // Insertar tarjeta en la base de datos
    $sql = "INSERT INTO tarjetas (titulo, imagen, descripcion) VALUES ('$titulo', '$imagenPath', '$descripcion')";

    if ($conn->query($sql) === TRUE) {
        echo "Tarjeta creada con éxito";
        echo '<script>alert("Tarjeta creada con éxito");</script>';
        echo '<script>setTimeout(function(){ window.location.href = "view_cards.php"; }, 1000);</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
