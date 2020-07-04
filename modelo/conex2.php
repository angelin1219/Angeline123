<?php

    /**
     * Esta funcion guarda la ubicacion.
     * @param   texto   El nombre de la ubicacion.
     * @param   texto   descripcion del lugar.
     * @param   texto   Numero de identificacion de la ubicacion.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_ubicacion($nombre_ubicacion,$descripcion,$id_sede){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid");
        $sql= "INSERT INTO ubicacion(nombre_ubicacion,descripcion,id_sede)";
        $sql.="VALUES ('$nombre_ubicacion','$descripcion','$id_sede');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>