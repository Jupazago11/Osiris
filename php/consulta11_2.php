<script type="text/javascript" src="../js/funciones.js"></script>
<?php
    //Incluir el archivo que contiene las funciones del lenguaje PHP
    require_once("../PHP/funciones.php");

    if(existencia_de_la_conexion()){
        require_once("../PHP/conexion.php");    //Hacer conexion con la base de datos
    }
    $conexion = conectar();                     //Obtenemos la conexion

    $id_presu1    = $_POST['id_presu1'];
    $id_user = $_POST['id_user'];

    $consulta = mysqli_query($conexion, "INSERT INTO `pre_detalle`(`id_presu1`, `id_pers4`, `estado`) 
    VALUES ('$id_presu1', '$id_user', 'activo')") or die ("Error al update: presupuesto");

    mysqli_close($conexion);     //---------------------- Cerrar conexion ------------------
?>