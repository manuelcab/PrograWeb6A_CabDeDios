<?php

include 'Pelicula.php';

$peliculaDAO = new PeliculaDAO();

$data = file_get_contents('php://input');

$data = json_decode($data);

$resultado = $peliculaDAO->eliminar($data->nombre);

if ($resultado) {
    echo json_encode(array(
        'resultado' => 'true',
        'mensaje' => 'Pelicula eliminada correctamente'
    ));
} else {
    echo json_encode(array(
        'resultado' => 'false',
        'mensaje' => 'Error al eliminar la pelicula'
    ));
}

