<?php

include 'UsuarioDAO.php';

class Usuario{
    private $id;
    private $nombres;
    private $apellidos;
    private $correo;

    public function __construct($id = null){
        if($id != null){
            $usuarioDAO = new UsuarioDAO();
            $usuario = $usuarioDAO->buscar($id);
            $this->id = $usuario[0]['id'];
            $this->nombre = $usuario[0]['nombres'];
            $this->apellido = $usuario[0]['apellidos'];
            $this->correo = $usuario[0]['correo'];
        }
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getCorreo() {
        return $this->correo;
    }
}