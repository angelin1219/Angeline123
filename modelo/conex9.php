<?php

    /**
     * Esta funcion guarda los cursos.
     * @param   texto   Numero de identificacion del curso.
     * @param   texto   Nombre del curso.
     * @param   texto   Numero de identificacion del nivel del curso.
     * @param   texto   Numero de identificacion de la jornada del curso.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_cursos($numero_curso,$nombre_curso,$id_nivel_curso,$id_jornada_curso){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid");
        $sql= "INSERT INTO cursos(numero_curso,nombre_curso,id_nivel_curso,id_jornada_curso)";
        $sql.="VALUES ('$numero_curso','$nombre_curso','$id_nivel_curso','$id_jornada_curso');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>