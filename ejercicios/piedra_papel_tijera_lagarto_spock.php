<?php

function Jugar($jugador1, $jugador2) {

    $opciones = ["Piedra", "Papel", "Tijera", "Lagarto", "Spock"];

    echo "Jugador 1 eligió: " . $opciones[$jugador1] . "\n";
    echo "Jugador 2 eligió: " . $opciones[$jugador2] . "\n";

    if ($jugador1 == $jugador2) {

        echo "¡Es un empate!\n";

    } else {

        $reglas = [
            "Tijera" => ["Papel", "Lagarto"],
            "Papel" => ["Piedra", "Spock"],
            "Piedra" => ["Lagarto", "Tijera"],
            "Lagarto" => ["Spock", "Papel"],
            "Spock" => ["Tijera", "Piedra"]
        ];

        if (in_array($opciones[$jugador2], $reglas[$opciones[$jugador1]])) {

            echo "¡Jugador 1 gana!\n";

        } else {

            echo "¡Jugador 2 gana!\n";

        }
    }
}

if (isset($argv[1]) && isset($argv[2])) {

    $jugador1 = intval($argv[1]);
    $jugador2 = intval($argv[2]);

    if ($jugador1 >= 0 && $jugador1 <= 4 && $jugador2 >= 0 && $jugador2 <= 4) {

        Jugar($jugador1, $jugador2);

    } else {

        echo "Por favor, ingrese números del 0 al 4 como argumentos para representar las opciones de juego.\n";

    }

} else {

    echo "Por favor, ingrese las manos de los jugadores como argumentos (números del 0 al 4).\n";

}