<?php



include("conexion.php");

$consulta = "SELECT nombres, apellidos, noControl, peso, estatura_cm, edad FROM pacientes";
$query = mysqli_query($conexion, $consulta);
$resultado = mysqli_num_rows($query);
    
?>
<style>
    table{
        width: 100%;
        border: 1px;
    }
    td,th{
        width: 33%;
        border: 1px solid #000;
    }
    thead{
        font-weight: bold;
        text-align: center;
    }
</style>

    <table cellspacing="0">
    <img src="../PsicologaTec/logo.png" alt="" style="height:75px ;width:200px">
            <thead>
                <tr  style="background-color:#18bc9c;"><th colspan="3" >Pacientes </th>
                </tr>
            <tr style="background-color: #c9c7c7;"><th>Nombre Completo</th>
                <th>Numero de control</th>
                <th>Edad</th>
               
            </tr>
        </thead>
        
        <tbody>
        <?php
            if($resultado){ 
        while($data = mysqli_fetch_array($query)){
            $nombre = $data['nombres'];
            $apellido = $data['apellidos'];
            $control= $data['noControl'];
            $peso = $data['peso'];
            $estatura = $data['estatura_cm'];
            $edad = $data['edad'];?>    
            <tr>
                <td><?php echo $nombre;?> <?php echo $apellido;?></td>
                <td><?php echo $control; ?></td>
                <td><?php echo $edad; ?></td>
                </tr>
                <?php    }}else{
        echo "No hay datos";
    }
?>
        </tbody>
    </table>
