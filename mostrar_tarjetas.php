<?php
$servername = "localhost";
$username = "root";
$password = "Info2024/*-";
$dbname = "mi_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tarjetas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-4">';
        echo '<div class="card mb-4 box-shadow">';
        echo '<img class="card-img-top" src="' . $row["urlImagen"] . '" alt="Descripción de la imagen">';
        echo '<div class="card-body">';
        echo '<p class="card-text">' . $row["descripcion"] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
