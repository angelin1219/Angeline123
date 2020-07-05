<?php

    /**
     * Esta funcion guarda los roles.
     * @param   texto   El nombre del tipo de rol de la persona.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_roles($nombre_rol){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid_2");
        $sql= "INSERT INTO roles(nombre_rol)";
        $sql.="VALUES ('$nombre_rol');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>