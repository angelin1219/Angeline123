<?php

    /**
     * Esta funcion guarda los tipo_documento.
     * @param   texto   El nombre del tipo de identificacion de la persona.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_tipo_documento($nombre_tipo_documento){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid");
        $sql= "INSERT INTO tipo_documento(nombre_tipo_documento)";
        $sql.="VALUES ('$nombre_tipo_documento');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>