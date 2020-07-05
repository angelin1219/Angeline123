<?php

    /**
     * Esta funcion guarda las sedes.
     * @param   texto   El nombre de la sede.
     * @param   texto   La direccion de la sede.
     * @param   texto   Numero de contacto de la sede.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_sedes($nombre_sedes,$direccion,$telefono){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid_2");
        $sql= "INSERT INTO sedes(nombre_sedes,direccion,telefono)";
        $sql.="VALUES ('$nombre_sedes','$direccion','$telefono');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>