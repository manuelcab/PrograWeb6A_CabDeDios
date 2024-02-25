<?php

include 'PeliculaDAO.php';

class Pelicula{

    private $id;
    private $nombre;
    private $estreno;
    private $origen;
    private $genero;
    private $director;
    private $actores;
    private $musica;
    private $imagen;

    public function __construct($id = null){
        if($id != null){
            $peliculaDAO = new PeliculaDAO();
            $pelicula = $peliculaDAO->buscar($id);
            $this->id = $pelicula[0]['id'];
            $this->nombre = $pelicula[0]['nombre'];
            $this->estreno = $pelicula[0]['estreno'];
            $this->origen = $pelicula[0]['origen'];
            $this->genero = $pelicula[0]['genero'];
            $this->director = $pelicula[0]['director'];
            $this->actores = $pelicula[0]['actores'];
            $this->musica = $pelicula[0]['musica'];
            $this->imagen = $pelicula[0]['imagen'];
        }
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDirector($director) {
        $this->director = $director;
    }

    public function setActores($actores) {
        $this->actores = $actores;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setEstreno($estreno) {
        $this->estreno = $estreno;
    }

    public function setMusica($musica) {
        $this->musica = $musica;
    }

    public function setOrigen($origen){
        $this->origen = $origen;
    }

    public function setImagen($imagen){
        $this->imagen = $imagen;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDirector() {
        return $this->director;
    }

    public function getActores() {
        return $this->actores;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getEstreno() {
        return $this->estreno;
    }

    public function getMusica() {
        return $this->musica;
    }

    public function getOrigen() {
        return $this->origen;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function crear($datos){
        $pelicula = new Pelicula();
        $pelicula->setNombre($datos['nombre']);
        $pelicula->setEstreno($datos['estreno']);
        $pelicula->setOrigen($datos['origen']);
        $pelicula->setGenero($datos['genero']);
        $pelicula->setDirector($datos['director']);
        $pelicula->setActores($datos['actores']);
        $pelicula->setMusica($datos['musica']);
        $pelicula->setImagen($datos['imagen']);
        return $pelicula->guardar();
    }

    public function actualizar(){
        $peliculaDAO = new PeliculaDAO();
        return $peliculaDAO->actualizar($this, $this->id);
    }

    public function eliminar($id){
        $peliculaDAO = new PeliculaDAO();
        return $peliculaDAO->eliminar($id);
    }

    public function guardar(){
        $peliculaDAO = new PeliculaDAO();
        return $peliculaDAO->insertar($this);
        $this->setId($peliculaDAO->obtenerUltimoIdInsertado());
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }
}