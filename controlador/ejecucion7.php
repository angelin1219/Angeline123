<?php

$contenido7 =("../vista/formulario_jornada.phtml");

if( isset($_REQUEST['Enviar4'])){

    require_once("../controlador/guardar_jornada.php");
    require("../modelo/conex7.php");

    guardar_jornada_curso($nombre_jornada);
}


require_once("../vista/formulario_jornada.phtml");