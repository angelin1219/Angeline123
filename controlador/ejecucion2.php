<?php

$contenido2 =("../vista/formulario_ubicacion.phtml");

if( isset($_REQUEST['guardar'])){

    require_once("../controlador/guardar_ubicacion.php");
    require("../modelo/conex2.php");

    guardar_ubicacion($nombre_ubicacion,$descripcion,$id_sede);
}


require_once("../vista/formulario_ubicacion.phtml");