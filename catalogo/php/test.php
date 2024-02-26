<?php

include 'Pelicula.php';

$peliculaDAO = new PeliculaDAO();

$peliculas = array();

// Película 1
$pelicula1 = new Pelicula();
$pelicula1->setNombre("Inception");
$pelicula1->setEstreno("2010-07-16");
$pelicula1->setOrigen("Estados Unidos");
$pelicula1->setGenero("Ciencia ficción, Thriller");
$pelicula1->setDirector("Christopher Nolan");
$pelicula1->setActores("Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page");
$pelicula1->setMusica("Hans Zimmer");
$pelicula1->setImagen("https://posters.movieposterdb.com/10_06/2010/1375666/l_1375666_07030c72.jpg");
$peliculas[] = $pelicula1;

// Película 2
$pelicula2 = new Pelicula();
$pelicula2->setNombre("The Matrix");
$pelicula2->setEstreno("1999-03-31");
$pelicula2->setOrigen("Estados Unidos");
$pelicula2->setGenero("Ciencia ficción, Acción");
$pelicula2->setDirector("Lana Wachowski, Lilly Wachowski");
$pelicula2->setActores("Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss");
$pelicula2->setMusica("Don Davis");
$pelicula2->setImagen("https://posters.movieposterdb.com/06_01/1999/0133093/l_77607_0133093_ab8bc972.jpg");
$peliculas[] = $pelicula2;

// Película 3
$pelicula3 = new Pelicula();
$pelicula3->setNombre("The Dark Knight");
$pelicula3->setEstreno("2008-07-18");
$pelicula3->setOrigen("Estados Unidos");
$pelicula3->setGenero("Acción, Drama, Crimen");
$pelicula3->setDirector("Christopher Nolan");
$pelicula3->setActores("Christian Bale, Heath Ledger, Aaron Eckhart");
$pelicula3->setMusica("Hans Zimmer, James Newton Howard");
$pelicula3->setImagen("https://posters.movieposterdb.com/09_11/2008/468569/s_468569_07abada5.jpg");
$peliculas[] = $pelicula3;

// Película 4
$pelicula4 = new Pelicula();
$pelicula4->setNombre("Interstellar");
$pelicula4->setEstreno("2014-11-07");
$pelicula4->setOrigen("Estados Unidos");
$pelicula4->setGenero("Ciencia ficción, Drama");
$pelicula4->setDirector("Christopher Nolan");
$pelicula4->setActores("Matthew McConaughey, Anne Hathaway, Jessica Chastain");
$pelicula4->setMusica("Hans Zimmer");
$pelicula4->setImagen("https://posters.movieposterdb.com/14_09/2014/816692/l_816692_593eaeff.jpg");
$peliculas[] = $pelicula4;

// Película 5
$pelicula5 = new Pelicula();
$pelicula5->setNombre("Forrest Gump");
$pelicula5->setEstreno("1994-07-06");
$pelicula5->setOrigen("Estados Unidos");
$pelicula5->setGenero("Drama, Romance");
$pelicula5->setDirector("Robert Zemeckis");
$pelicula5->setActores("Tom Hanks, Robin Wright, Gary Sinise");
$pelicula5->setMusica("Alan Silvestri");
$pelicula5->setImagen("https://posters.movieposterdb.com/12_04/1994/109830/s_109830_58524cd6.jpg");
$peliculas[] = $pelicula5;

// Película 6
$pelicula6 = new Pelicula();
$pelicula6->setNombre("The Shawshank Redemption");
$pelicula6->setEstreno("1994-09-23");
$pelicula6->setOrigen("Estados Unidos");
$pelicula6->setGenero("Drama");
$pelicula6->setDirector("Frank Darabont");
$pelicula6->setActores("Tim Robbins, Morgan Freeman, Bob Gunton");
$pelicula6->setMusica("Thomas Newman");
$pelicula6->setImagen("https://posters.movieposterdb.com/05_03/1994/0111161/l_8494_0111161_3bb8e662.jpg");
$peliculas[] = $pelicula6;

// Película 7
$pelicula7 = new Pelicula();
$pelicula7->setNombre("The Godfather");
$pelicula7->setEstreno("1972-03-24");
$pelicula7->setOrigen("Estados Unidos");
$pelicula7->setGenero("Drama, Crimen");
$pelicula7->setDirector("Francis Ford Coppola");
$pelicula7->setActores("Marlon Brando, Al Pacino, James Caan");
$pelicula7->setMusica("Nino Rota");
$pelicula7->setImagen("https://xl.movieposterdb.com/22_07/1972/68646/xl_68646_8c811dec.jpg?v=2024-02-25%2014:58:31");
$peliculas[] = $pelicula7;

// Película 8
$pelicula8 = new Pelicula();
$pelicula8->setNombre("The Lord of the Rings: The Return of the King");
$pelicula8->setEstreno("2003-12-17");
$pelicula8->setOrigen("Nueva Zelanda, Estados Unidos");
$pelicula8->setGenero("Fantasía, Acción, Aventura");
$pelicula8->setDirector("Peter Jackson");
$pelicula8->setActores("Elijah Wood, Ian McKellen, Viggo Mortensen");
$pelicula8->setMusica("Howard Shore");
$pelicula8->setImagen("https://xl.movieposterdb.com/04_12/2003/0167260/xl_183_0167260_6815154e.jpg?v=2023-12-03%2009:35:46");
$peliculas[] = $pelicula8;

// Película 9
$pelicula9 = new Pelicula();
$pelicula9->setNombre("Pulp Fiction");
$pelicula9->setEstreno("1994-10-14");
$pelicula9->setOrigen("Estados Unidos");
$pelicula9->setGenero("Crimen, Drama");
$pelicula9->setDirector("Quentin Tarantino");
$pelicula9->setActores("John Travolta, Uma Thurman, Samuel L. Jackson");
$pelicula9->setMusica("Various artists");
$pelicula9->setImagen("https://posters.movieposterdb.com/07_10/1994/110912/l_110912_55345443.jpg");
$peliculas[] = $pelicula9;

// Película 10
$pelicula10 = new Pelicula();
$pelicula10->setNombre("The Silence of the Lambs");
$pelicula10->setEstreno("1991-02-14");
$pelicula10->setOrigen("Estados Unidos");
$pelicula10->setGenero("Crimen, Drama, Thriller");
$pelicula10->setDirector("Jonathan Demme");
$pelicula10->setActores("Jodie Foster, Anthony Hopkins, Scott Glenn");
$pelicula10->setMusica("Howard Shore");
$pelicula10->setImagen("https://posters.movieposterdb.com/12_04/1991/102926/l_102926_642e9c9a.jpg");
$peliculas[] = $pelicula10;

foreach ($peliculas as $pelicula) {
    $pelicula->guardar();
}
