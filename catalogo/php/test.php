<?php

include 'Pelicula.php';

$peliculaDAO = new PeliculaDAO();

$pelicula = new Pelicula();
$pelicula->setNombre("The Shawshank Redemption");
$pelicula->setEstreno("1994-09-23");
$pelicula->setOrigen("USA");
$pelicula->setGenero("Drama");
$pelicula->setDirector("Frank Darabont");
$pelicula->setActores("Tim Robbins, Morgan Freeman, Bob Gunton");
$pelicula->setMusica("Thomas Newman");
$pelicula->setImagen("https://th.bing.com/th/id/R.ca86e305130c75e910bd9c061de79b2a?rik=3uDnTl%2fVkZr3Hw&pid=ImgRaw&r=0");
$pelicula->guardar();