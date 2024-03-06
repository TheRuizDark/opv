document.addEventListener("DOMContentLoaded", function () {
    const contenedorTarjetas = document.getElementById("contenedor-tarjetas");

    // Obtener tarjetas desde el servidor PHP
    fetch('tarjetas.php')
        .then(response => response.json())
        .then(data => {
            // Crear tarjetas dinámicamente
            data.forEach(tarjeta => {
                const nuevaTarjeta = document.createElement("div");
                nuevaTarjeta.classList.add("tarjeta");

                const contenidoTarjeta = `
                    <h2>${tarjeta.titulo}</h2>
                    <img src="${tarjeta.imagen}" alt="${tarjeta.titulo}">
                    <p>${tarjeta.descripcion}</p>
                    <button onclick="mostrarModal('${tarjeta.titulo}', '${tarjeta.descripcion}')">Ver Detalles</button>
                    <form action="edit_delete_cards.php" method="post">
                        <input type="hidden" name="tarjeta_id" value="${tarjeta.id}">
                        <button type="submit" name="edit">Editar</button>
                        <button type="submit" name="delete">Eliminar</button>
                    </form>
                `;

                nuevaTarjeta.innerHTML = contenidoTarjeta;
                contenedorTarjetas.appendChild(nuevaTarjeta);
            });
        })
        .catch(error => console.error('Error:', error));
});

function mostrarModal(titulo, contenido) {
    const modal = document.createElement("div");
    modal.classList.add("modal");

    const contenidoModal = `
        <h2>${titulo}</h2>
        <p>${contenido}</p>
        <button onclick="cerrarModal()">Cerrar</button>
    `;

    modal.innerHTML = contenidoModal;
    document.body.appendChild(modal);
}

window.cerrarModal = function () {
    const modal = document.querySelector(".modal");
    modal.parentNode.removeChild(modal);
};
