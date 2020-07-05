<?php

    /**
     * Esta funcion guarda los clientes.
     * @param   texto   El nombre del cliente.
     * @param   texto   Numero de identificacion de tipo de documento.
     * @param   texto   Numero de identificacion del cliente.
     * @param   texto   email del cliente.
     * @param   texto   contraseña del cliente.
     * @param   texto   Numero de identificacion del rol del cliente.
     * @param   texto   Numero de contacto del cliente.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_clientes($nombre_cliente,$id_tipo_documento,$documento,$email,$password,$id_rol,$telefono){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid_2");
        $sql= "INSERT INTO clientes(nombre_cliente,id_tipo_documento,documento,email,password,id_rol,telefono)";
        $sql.="VALUES ('$nombre_cliente','$id_tipo_documento','$documento','$email','$password','$id_rol','$telefono');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>