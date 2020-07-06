<?php

$contenido4 =("../vista/formulario_estado.phtml");

if( isset($_REQUEST['Enviar1'])){

    require_once("../controlador/guardar_estado.php");
    require("../modelo/conex4.php");

    guardar_tipo_documento($nombre_tipo_documento);
}


require_once("../vista/formulario_estado.phtml");