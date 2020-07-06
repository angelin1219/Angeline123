<?php

$contenido8 =("../vista/formulario_clientes.phtml");

if( isset($_REQUEST['enviar5'])){

    require_once("../controlador/guardar_cliente.php");
    require("../modelo/conex8.php");

    guardar_clientes($nombre_cliente,$id_tipo_documento,$documento,$email,$clave,$id_rol,$telefono);
}else{

    echo "no funciono";
}


require_once("../vista/formulario_clientes.phtml");