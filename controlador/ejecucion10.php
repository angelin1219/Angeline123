<?php

$contenido10 =("../vista/formulario_usuarios.phtml");

if( isset($_REQUEST['enviar7'])){

    require_once("../controlador/guardar_usuarios.php");
    require("../modelo/conex10.php");

    guardar_usuarios($nombre_usuario,$idtipo_documento,$documento,$idrol,$idestado,$idcurso);
}


require_once("../vista/formulario_usuarios.phtml");