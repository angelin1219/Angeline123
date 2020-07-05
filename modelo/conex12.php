<?php

    /**
     * Esta funcion guarda la bitacora_registro.
     * @param   texto   Numero de identificacion del usuario.
     * @param   texto   Numero de identificacion de la ubicacion.
     * @param   texto   Numero de identificacion del estado del usuario.
     * @param   texto   Fecha de nacimiento.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_bitacora_registro($id_usuario,$id_ubicacion,$id_estado,$fecha){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid_2");
        $sql= "INSERT INTO bitacora_registro(id_usuario,id_ubicacion,id_estado,fecha)";
        $sql.="VALUES ('$id_usuario','$id_ubicacion','$id_estado','$fecha');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>