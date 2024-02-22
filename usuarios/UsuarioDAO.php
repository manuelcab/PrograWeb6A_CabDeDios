<?php

require_once "DataSource.php";
require_once "Usuario.php";
require_once "IDao.php";

class UsuarioDAO implements IDao {

    private $dataSource;

    public function __construct() {
        $this->dataSource = new DataSource();
    }

    public function buscarTodos(){
        $sql = "SELECT * FROM usuarios";
        $data = $this->dataSource->ejecutarConsulta($sql);
    
        $usuarios = [];
    
        foreach($data as $usuario){
            $usuarios[] = new Usuario($usuario['id']);
        }
    
        return $usuarios;
    }
    
    public function buscar($id){
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $values = [
            ":id" => $id
        ];
    
        return $this->dataSource->ejecutarConsulta($sql, $values);
    }
    
    public function insertar(Usuario $usuario){
        $sql = "INSERT INTO usuarios (nombres, apellidos, correo) VALUES (:nombres, :apellidos, :correo)";
        $values = [
            ":nombres" => $usuario->getNombres(),
            ":apellidos" => $usuario->getApellidos(),
            ":correo" => $usuario->getCorreo()
        ];
    
        return $this->dataSource->ejecutarActualizacion($sql, $values);
    }
    
    public function actualizar(Usuario $usuario, $id){
        $sql = "UPDATE usuarios SET nombres = :nombres, apellidos = :apellidos, correo = :correo WHERE id = :id";
        $values = [
            ":nombres" => $usuario->getNombres(),
            ":apellidos" => $usuario->getApellidos(),
            ":correo" => $usuario->getCorreo(),
            ":id" => $id
        ];
    
        return $this->dataSource->ejecutarActualizacion($sql, $values);
    }
    
    public function eliminar($id){
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $values = [
            ":id" => $id
        ];
    
        return $this->dataSource->ejecutarActualizacion($sql, $values);
    }

    public function obtenerUltimoIdInsertado() {
        return $this->dataSource->obtenerUltimoIdInsertado();
    }

}

