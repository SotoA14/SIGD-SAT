<?php

$conexion=mysquli_connect("localhost", "root", "bdgestiondocumental");

if($conexion){
    echo 'Conectado a la base de datos';
    else{
        echo 'No se ha pudido conectar a la base de datos';
    }
}

?>