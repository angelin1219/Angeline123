<?php

$contenido6 =("../vista/formulario_roles.phtml");

if( isset($_REQUEST['Enviar3'])){

    require_once("../controlador/guardar_rol.php");
    require("../modelo/conex6.php");

    guardar_roles($nombre_rol);
}


require_once("../vista/formulario_roles.phtml");