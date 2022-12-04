<?php
    include("conexion.php");
    $control = filter_input(0, 'control');
    $fecha = date("Y/m/d", strtotime(filter_input(0, 'fecha')));
    $nombre = filter_input(0, 'nombre');
    $apellido = filter_input(0, 'apellido');
    $curp = filter_input(0, 'curp');
    $peso = filter_input(0, 'peso');
    $estatura = filter_input(0, 'estatura');
    $sangre = filter_input(0, 'sangre');
    $sexo = filter_input(0, 'sexo');
    $edad = filter_input(0, 'edad');
    //Pacientes
    $query = "INSERT INTO `pacientes` (`noControl`, `nombres`, `apellidos`, `curp`, `peso`, `estatura_cm`, `fecha_ingreso`, `sangre`, `sexo`, `edad`) 
    VALUES ('$control', '$nombre', '$apellido', '$curp', '$peso', '$estatura', '$fecha', '$sangre', '$sexo', '$edad')";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado){
        die("Error no se ingresaron los datos");
    }
    echo 'Registro completado';
    header("Location: index.php");
?>