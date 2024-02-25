<?php

require_once "DataSource.php";
require_once "Pelicula.php";
require_once "IDao.php";

class PeliculaDAO implements IDao{

    private $dataSource;

    public function __construct() {
        $this->dataSource = new DataSource();
    }

    public function buscarTodos(){
        $sql = "SELECT * FROM peliculas";
        $data = $this->dataSource->ejecutarConsulta($sql);
    
        $peliculas = [];
    
        foreach($data as $pelicula){
            $peliculas[] = new Pelicula($pelicula['id']);
        }
    
        return $peliculas;
    }

    public function buscar($id){
        $sql = "SELECT * FROM peliculas WHERE id = :id";
        $values = [
            ":id" => $id
        ];
    
        return $this->dataSource->ejecutarConsulta($sql, $values);
    }

    public function insertar(Pelicula $pelicula){
        $sql = "INSERT INTO peliculas (nombre, estreno, origen, genero, director, actores, musica, imagen) VALUES (:nombre, :estreno, :origen, :genero, :director, :actores, :musica, :imagen)";
        $values = [
            ":nombre" => $pelicula->getNombre(),
            ":estreno" => $pelicula->getEstreno(),
            ":origen" => $pelicula->getOrigen(),
            ":genero" => $pelicula->getGenero(),
            ":director" => $pelicula->getDirector(),
            ":actores" => $pelicula->getActores(),
            ":musica" => $pelicula->getMusica(),
            ":imagen" => $pelicula->getImagen()
        ];
    
        return $this->dataSource->ejecutarActualizacion($sql, $values);
    }

    public function actualizar(Pelicula $pelicula, $id){
        $sql = "UPDATE peliculas SET nombre = :nombre, estreno = :estreno, origen = :origen, genero = :genero, director = :director, actores = :actores, musica = :musica, imagen = :imagen WHERE id = :id";
        $values = [
            ":nombre" => $pelicula->getNombre(),
            ":estreno" => $pelicula->getEstreno(),
            ":origen" => $pelicula->getOrigen(),
            ":genero" => $pelicula->getGenero(),
            ":director" => $pelicula->getDirector(),
            ":actores" => $pelicula->getActores(),
            ":musica" => $pelicula->getMusica(),
            ":imagen" => $pelicula->getImagen(),
            ":id" => $id
        ];
    
        return $this->dataSource->ejecutarActualizacion($sql, $values);
    }

    public function eliminar($id){
        $sql = "DELETE FROM peliculas WHERE id = :id";
        $values = [
            ":id" => $id
        ];
    
        return $this->dataSource->ejecutarActualizacion($sql, $values);
    }

    public function obtenerUltimoIdInsertado() {
        return $this->dataSource->obtenerUltimoIdInsertado();
    }
}