<?php

    /**
     * Esta funcion guarda los usuarios.
     * @param   texto   Nombre del usuario.
     * @param   texto   Numero del tipo de identificacion del usuario.
     * @param   texto   Numero de identificacion del usuario.
     * @param   texto   Numero de identificacion del tipo de rol del usuario.
     * @param   texto   Numero de identificacion del estado del usuario.
     * @param   texto   Numero de identificacion del curso del usuario.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_usuarios($nombre_usuario,$idtipo_documento,$documento,$idrol,$idestado,$idcurso){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid");
        $sql= "INSERT INTO usuarios(nombre_usuario,idtipo_documento,documento,idrol,idestado,idcurso)";
        $sql.="VALUES ('$nombre_usuario','$idtipo_documento','$documento','$idrol','$idestado','$idcurso');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>