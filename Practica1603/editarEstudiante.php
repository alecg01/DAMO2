<?php
if($_SERVER["REQUEST_METHOD"]=="PUT"){
    require_once 'conexion.php';
    $id = $_GET["id"];
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $carrera = $_GET["carrera"];
    $año = $_GET["año"];
    $my_query = "UPDATE estudiante SET nombre= '$nombre',apellido='$apellido',carrera='$carrera',año='$año' WHERE id = $id";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro actualizado satisfactoriamente...";
    }else{
echo "Error al actualizar registro...";
    }
}else{
    echo"Error desconocido";
}
?>