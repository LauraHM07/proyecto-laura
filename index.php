<?php

    echo "<h1>Hola caracola</h1>";
    echo "meow ";

    if ($_POST) {
        $nombre = $_POST['nombre'];

        echo "hola " . $nombre;
    }
?>