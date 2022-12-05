<?php
    include("conexion.php");
    $control = filter_input(1, 'id');
    $nota = filter_input(0, 'nota');    
    //Pacientes
    $query = "INSERT INTO `anotaciones` (`idNotas`, `noControl`, `anotacion`, `fechaN`) VALUES (NULL, '$control', '$nota', NOW())";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado){
        die("Error no se ingresaron los datos");
    }
    echo 'Registro completado';
    header("Location: perfil.php?id=$control");
?>