<?php

$contenido3 =("../vista/formulario_nivel.phtml");

if( isset($_REQUEST['Enviar'])){

    require_once("../controlador/guardar_nivel.php");
    require("../modelo/conex3.php");

    guardar_nivel_curso($nombre_nivel);
}


require_once("../vista/formulario_nivel.phtml");