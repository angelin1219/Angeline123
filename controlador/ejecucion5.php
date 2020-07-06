<?php

$contenido5 =("../vista/formulario_tipo_doc.phtml");

if( isset($_REQUEST['Enviar2'])){

    require_once("../controlador/guardar_tipo_doc.php");
    require("../modelo/conex5.php");

    guardar_tipo_documento($nombre_tipo_documento);
}


require_once("../vista/formulario_tipo_doc.phtml");