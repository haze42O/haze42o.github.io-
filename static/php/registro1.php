<?php
include("static\php\conexion.php");
if (isset($_POST['btn-guardar-registro'])){
    if(strlen($_POST['nombres_est']) >= 1 && strlen($_POST['apellidos_est']) >= 1) 
    {
        $nombres_est =trim($_POST['nombres-est']);
        $apellidos_est =trim($_POST['apellidos_est']);
        $ingreso = "INSERT INTO `alumno`(`nombre_alumno`, `nombre_apellido`) VALUES ([$nombres_est],[apellidos_est])";
        $resultado = mysqli_query($conexion,$ingreso);
        if ($resultado){
            ?>
            <h3 class="ok"> Se ingreso correctamente el dato</h3>
            <?php
        }else{
            ?>
            <h3 class="bad"> No se pudo ingresar</h3>
            <?php
        }
    }else{
        ?>
        <h3 class="bad"> Completa los campos</h3>
        <?php
    }
}

?>