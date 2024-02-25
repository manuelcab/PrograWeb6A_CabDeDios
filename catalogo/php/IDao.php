<?php

interface IDao{ 

    public function buscarTodos();  

    public function buscar($id);

    public function insertar(Pelicula $pelicula);

    public function actualizar(Pelicula $pelicula, $id);

    public function eliminar($id);

}