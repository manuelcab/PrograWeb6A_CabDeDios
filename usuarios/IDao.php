<?php

interface IDao{
    public function buscarTodos();

    public function buscar($id);

    public function insertar(Usuario $usuario);

    public function actualizar(Usuario $usuario, $id);

    public function eliminar($id);
}