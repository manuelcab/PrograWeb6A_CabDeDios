function cargarPeliculas(){

    fetch('../php/consultar_peliculas.php', {

        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        }

    }).then(response => response.json())
    .then(data => {

        const contenedor = document.querySelector('.contenedor_principal');
        contenedor.innerHTML = '';

        data.forEach(function(pelicula) { 

            const divCard = document.createElement('div');
            divCard.classList.add('card');

            const img = document.createElement('img');
            img.src = pelicula.imagen;
            divCard.appendChild(img);

            const divBoton = document.createElement('div');
            divBoton.classList.add('div_boton');
            divCard.appendChild(divBoton);

            const boton = document.createElement('button');
            boton.classList.add('boton');
            boton.textContent = 'ELIMINAR';
            boton.dataset.nombre = pelicula.nombre;
            divBoton.appendChild(boton);  

            
            boton.addEventListener('click', function() {
                
                eliminarPelicula(boton);

            });

            contenedor.appendChild(divCard);

        });

    });

}

function eliminarPelicula(boton) {

    fetch('../php/eliminarPelicula.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            nombre: boton.dataset.nombre
        })
    })
    .then(response => response.json())
    .then(data => {
        if(data.resultado === 'true'){
            alert(data.mensaje);
            cargarPeliculas();
        } else {
            alert(data.mensaje);
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    cargarPeliculas();
});