<?php

include 'Pelicula.php';

$peliculaDAO = new PeliculaDAO();

$peliculas = $peliculaDAO->buscarTodos();

$dataPeliculas = [];

foreach($peliculas as $pelicula){

    $nombre = $pelicula->getNombre();
    $estreno = $pelicula->getEstreno();
    $origen = $pelicula->getOrigen();
    $genero = $pelicula->getGenero();
    $director = $pelicula->getDirector();
    $actores = $pelicula->getActores();
    $musica = $pelicula->getMusica();
    $imagen = $pelicula->getImagen();

    $dataPeliculas[] = [
        "nombre" => $nombre,
        "estreno" => $estreno,
        "origen" => $origen,
        "genero" => $genero,
        "director" => $director,
        "actores" => $actores,
        "musica" => $musica,
        "imagen" => $imagen
    ];

}

$jsonPeliculas = json_encode($dataPeliculas);

header('Content-Type: application/json');

echo $jsonPeliculas;