<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Embarazo PreMaturo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #aed9e0; /* Fondo azul claro */
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        #contenedor-tarjetas {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .tarjeta {
            border: 10px solid #c06c84; /* Borde rosa oscuro */
            border-radius: 15px;
            margin: 10px;
            padding: 15px;
            background-color: #f4d1dc; /* Fondo rosa claro */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra sutil */
            max-width: 400px; /* Ajusta según sea necesario */
            width: 100%;
            overflow: hidden; /* Evita que el contenido se desborde */
            overflow-y: auto; /* Agregado para permitir desplazamiento vertical */
        }

        .tarjeta img {
            max-width: 100%;
            border-radius: 5px;
        }

        /* Estilos para el botón en el formulario de creación */
        #crear-tarjeta-btn {
            background-color: #1a5276; /* Fondo azul oscuro */
            color: #fff; /* Texto blanco */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px; /* Ajuste de margen superior */
        }

        #crear-tarjeta-btn:hover {
            background-color: #154360; /* Cambio de color al pasar el ratón */
        }

        /* Estilos para el formulario de creación */
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        

    </style>
</head>
<body>

    <h1>Embarazo PreMaturo</h1>

    <form action="create_card.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" accept="image/*" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required></textarea>

        <button id="crear-tarjeta-btn" type="submit">Crear Tarjeta</button>
    </form>

    <a href="view_cards.php">Ver Tarjetas</a>

    <script src="scripts.js"></script>
</body>
</html>
