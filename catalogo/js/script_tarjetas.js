document.addEventListener('DOMContentLoaded', function() {

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

            contenedor.appendChild(divCard);

        });

    });

});