<?php

include 'Pelicula.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pelicula = new Pelicula();
    $pelicula->setNombre($_POST['nombre']);
    $pelicula->setEstreno($_POST['estreno']);
    $pelicula->setOrigen($_POST['origen']);
    $pelicula->setGenero($_POST['genero']);
    $pelicula->setDirector($_POST['director']);
    $pelicula->setActores($_POST['actores']);
    $pelicula->setMusica($_POST['musica']);
    $pelicula->setImagen($_POST['imagen']);
    
    try {

        $pelicula->guardar();
        echo 'Pelicula guardada con exito';

    } catch (Exception $e) {

        echo 'Error al guardar la pelicula: ' . $e->getMessage();

    }

} else {

    echo 'Metodo no permitido';

}