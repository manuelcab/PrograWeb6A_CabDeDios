function generarTablero(filas, columnas, tableroData) {

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

    var tableroDiv = document.getElementById("tablero");
    tableroDiv.innerHTML = "";

    for (var i = 0; i < filas; i++) {

        for(var j = 0; j < columnas; j++) {

            var celda = document.createElement("div");
            celda.className = "celda";
            celda.textContent = "";

            
            celda.dataset.fila = i;
            celda.dataset.columna = j;

            const fila = i;
            const columna = j;

            celda.addEventListener("click", async (e) => {

                if (!e.target.classList.contains('bandera')) {

                    await fetch('revelar_celda.php', {

                        method: 'POST',
                        headers: {

                            'Content-Type': 'application/json'

                        },

                        body: JSON.stringify({fila, columna})

                    })
                    .then(response => response.json())
                    .then(data => {

                        const spanNumero = document.createElement('span');

                        e.target.classList.add('revelada');

                        if (data.valor !== -1 && data.valor !== 0) {

                            spanNumero.setAttribute('style', `color: ${coloresNumeros[data.valor - 1]}`);
                            e.target.setAttribute('style', 'background-color: gray');
                            spanNumero.textContent = data.valor;

                            e.target.appendChild(spanNumero);

                        } else if (data.valor == 0) {

                            spanNumero.textContent = '';
                            e.target.setAttribute('style', 'background-color: gray');
                            e.target.appendChild(spanNumero);

                        } else {

                            revelarCeldasConMinas(tableroData);
                            e.target.appendChild(spanNumero)

                        }

                    })

                    .catch((error) => {

                        console.error('Error:', error);

                    });

                }

            }, fila, columna);

            celda.addEventListener("contextmenu", (e) => {
                e.preventDefault();
            
                if (!e.target.classList.contains('revelada')) {

                    if (!e.target.classList.contains('bandera')) {

                        e.target.classList.add('bandera');
                        
                    } else {
                        e.target.classList.remove('bandera');
                        
                    }
                }

            });

            tableroDiv.appendChild(celda);

        }

    }
    
    tableroDiv.style.gridTemplateColumns = `repeat(${columnas}, 30px)`;

}

function revelarCeldasConMinas(tablero) {

    const celdas = document.querySelectorAll('.celda');

    celdas.forEach(celda => {

        const fila = parseInt(celda.dataset.fila);
        const columna = parseInt(celda.dataset.columna);

        if (tablero[fila] && tablero[fila][columna] === -1) {
            
            celda.classList.add('revelada');
            const spanMina = document.createElement('span');
            spanMina.textContent = '💣';
            celda.appendChild(spanMina);

        }

    });

    eliminarBanderas();
        
}

function eliminarBanderas() {

    const celdas = document.querySelectorAll('.celda');

    celdas.forEach(celda => {

        if (celda.classList.contains('bandera')) {

            celda.classList.remove('bandera');

        }

    });

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

    await fetch('generar_tablero.php', {

        method: 'POST',
        headers: {

            'Content-Type': 'application/json'

        },

        body: JSON.stringify({ nivel })

    }).then(response => response.json())
    .then(data => {

        console.log(data);
        generarTablero(filas, columnas, data.tablero);

    })
    .catch((error) => {

        console.error('Error:', error);

    });

    

});