<?php

$contenido12 =("../vista/formulario_bitacora.phtml");

if( isset($_REQUEST['enviar9'])){

    require_once("../controlador/guardar_bitacora.php");
    require("../modelo/conex12.php");

    guardar_bitacora_registro($id_usuario,$id_ubicacion,$id_estado);
}


require_once("../vista/formulario_bitacora.phtml");