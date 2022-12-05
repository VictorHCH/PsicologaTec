<?php
    include("conexion.php");
    $control = filter_input(1, 'id');
    $fechaC = date("Y/m/d", strtotime(filter_input(0, 'fechaC')));
    $horaC = filter_input(0, 'horaC');
    $estado  = filter_input(0, 'estado');
    $tipoC  = filter_input(0, 'tipoC');
    $diagnosticoT  = filter_input(0, 'diagnosticoT');
    $diagnosticoI  = filter_input(0, 'diagnosticoI');
    //Pacientes
    $query = "INSERT INTO `consulta` (`id_Consulta`, `noControl`, `fecha_cita`, `hora_cita`, `estado`, `tipo_consulta`, `diagnostico_titulo`, `diagnostico_info`) 
            VALUES (NULL, '$control', '$fechaC', '$horaC', '$estado', '$tipoC', '$diagnosticoT', '$diagnosticoI')";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado){
        die("Error no se ingresaron los datos");
    }
    echo 'Registro completado';
    header("Location: perfil.php?id=$control");
?>