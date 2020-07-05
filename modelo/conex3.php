<?php

    /**
     * Esta funcion guarda el nivel_curso.
     * @param   texto   El nombre del nivel del curso.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_nivel_curso($nombre_nivel){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid_2");
        $sql= "INSERT INTO nivel_curso(nombre_nivel)";
        $sql.="VALUES ('$nombre_nivel');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>