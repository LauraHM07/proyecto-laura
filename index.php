<?php

    echo "<h1> hola caracola www </h1>";
    echo "<h2> hola caracola eee </h2>";

    if ($_POST) {
        $nombre = $_POST['nombre'];

<<<<<<< HEAD
        echo "hola " . $nombre . ' , ¿cómo estás?';
=======
        echo "Seguro que te llamas " . $nombre . "?" . ' , ¿cómo estás?';
>>>>>>> refs/remotes/origin/main
    }

    echo "Solo se que no se nada";
    echo "";
    echo "pero ya se algo, y es que no se nada";
    echo "Adios";
?>