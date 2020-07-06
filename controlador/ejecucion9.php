<?php

$contenido9 =("../vista/formulario_curso.phtml");

if( isset($_REQUEST['enviar6'])){

    require_once("../controlador/guardar_curso.php");
    require("../modelo/conex9.php");

    guardar_cursos($numero_curso,$nombre_curso,$id_nivel_curso,$id_jornada_curso);
}else{

    echo "no funciono";
}


require_once("../vista/formulario_curso.phtml");