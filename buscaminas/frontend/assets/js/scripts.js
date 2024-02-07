function generarTablero(filas, columnas) {

    var tablero = document.getElementById("tablero");

    tablero.innerHTML = "";

    for (var i = 0; i < filas; i++) {

        for(var j = 0; j < columnas; j++) {

            var celda = document.createElement("div");
            celda.className = "celda";
            celda.textContent = "";

            const fila = i;
            const columna = j;

            tablero.appendChild(celda);
        }

    }

    tablero.style.gridTemplateColumns = `repeat(${columnas}, 30px)`;

}

document.querySelector('#nivel').addEventListener('change', async (e) => {
    
    var nivel = document.getElementById("nivel").value;

    var filas, columnas;
    
    switch (nivel) {

        case "facil":
            filas = 8;
            columnas = 8;
            break;
        case "medio":
            filas = 16;
            columnas = 16;
            break;
        case "dificil":
            filas = 16;
            columnas = 32;
            break;

    }

    const coloresNumeros = [

        "blue",
        "green",
        "red",
        "purple",
        "maroon",
        "turquoise",
        "black",
        "gray",

    ]

    await fetch(window.location.href + 'generar_tablero.php', {

        method: 'POST',
        headers: {

            'Content-Type': 'application/json'

        },

        body: JSON.stringify({ nivel })

    }).then(Response => reponse.JSON())
    .then(data => {

        console.log(data);

    })
    .catch((error) => {

        console.error('Error:', error);

    });

    generarTablero(filas, columnas);

});