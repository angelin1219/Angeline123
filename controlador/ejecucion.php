<?php

$contenido =("../vista/formulario_sedes.phtml");

if( isset($_REQUEST['Guardar'])){

    require_once("../controlador/guardar_sedes.php");
    require("../modelo/conex1.php");

    guardar_sedes($nombre_sedes,$direccion,$telefono);
}



require_once("../vista/formulario_sedes.phtml");