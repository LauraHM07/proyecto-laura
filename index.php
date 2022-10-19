<?php

    echo "<h1> hola caracola www </h1>";
    echo "<h2> hola caracola eee </h2>";

    if ($_POST) {
        $nombre = $_POST['nombre'];

        echo "hola " . $nombre;
    }

    echo "Solo se que no se nada";
    echo "pero ya se algo, y es que no se nada";
    echo "Adios";
?>