<?php

    /**
     * Esta funcion guarda las jornada_curso.
     * @param   texto   El nombre de la jornada de los cursos.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_jornada_curso($nombre_jornada){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid");
        $sql= "INSERT INTO jornada_curso(nombre_jornada)";
        $sql.="VALUES ('$nombre_jornada');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>