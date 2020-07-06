<?php

$contenido11 =("../vista/formulario_log_clientes.phtml");

if( isset($_REQUEST['enviar8'])){

    require_once("../controlador/guardar_log_clientes.php");
    require("../modelo/conex11.php");

    guardar_log_clientes($id_cliente,$novedad);
}


require_once("../vista/formulario_log_clientes.phtml");