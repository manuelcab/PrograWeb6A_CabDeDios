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

            celda.addEventListener("click", async (e) => {

                await fetch(window.location.href + 'revelar_celda.php', {

                    method: 'POST',
                    headers: {

                        'Content-Type': 'application/json'

                    },

                    body: JSON.stringify({fila, columna})

                }).then(Response => Response.json())
                .then(data => {

                    const spanNumero = document.createElement('span');

                    e.target.classList.add('revelada');

                    if (data.valor !== -1 && data.valor !== 0) {

                        spanNumero.setAttribute('style', 'color: ${coloresNumeros[data.valor - 1]}');
                        spanNumero.textContent = data.valor;

                        e.target.appendChild(spanNumero);

                    } else if (data.valor == 0) {

                        spanNumero.textContent = '';
                        e.target.setAttribute('style', 'background-color: gray');
                        e.target.appendChild(spanNumero);

                    } else {

                        spanNumero.textContent = '💣';
                        e.target.appendChild(spanNumero);

                    }

                })

                .catch((error) => {

                    console.error('Error: ', error);

                });

            },fila, columna);

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