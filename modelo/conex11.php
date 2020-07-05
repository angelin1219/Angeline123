<?php

    /**
     * Esta funcion guarda el log_clientes.
     * @param   texto   Numero de identificacion del cliente.
     * @param   texto   fecha de nacimiento.
     * @param   texto   descripcion de la accion realizada.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_log_clientes($id_cliente,$fecha,$novedad){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid_2");
        $sql= "INSERT INTO log_clientes(id_cliente,fecha,novedad)";
        $sql.="VALUES ('$id_cliente','$fecha','$novedad');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>