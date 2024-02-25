document.getElementById('formulario').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('../php/guardar_pelicula.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
    
        console.log(data);

        if (data.includes('Pelicula guardada con exito')) {
            
            this.reset();
        }

    })
    .catch(error => {

        console.error('Error:', error);
    });
});