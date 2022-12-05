<?php
    include("conexion.php");
    $control = filter_input(0, 'control');
    $fechaC = date("Y/m/d", strtotime(filter_input(0, 'fechaC')));
    $horaC = filter_input(0, 'horaC');
    $TipoC = filter_input(0, 'tipoC');
    //Pacientes
    $query = "INSERT INTO `citas` (`idCita`, `noControl`, `fecha`, `tipoCita`, `hora`) VALUES (NULL, '$control', '$fechaC', '$TipoC', '$horaC')";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado){
        die("Error no se ingresaron los datos");
    }
    echo 'Registro completado';
    header("Location: index.php");
?>