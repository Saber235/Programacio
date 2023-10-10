<?php
include('encriptacion.php');
function registro($Documento)
{
    $Nombre='';
    $salida = "";
    $conexion = mysqli_connect('localhost', 'root', 'root', 'pruebita2');

    if (!$conexion) {
        die("Error conectar a la    de datos:" . mysqli_connect_error());
    }

    $sq = "SELECT (Clave) FROM Personas WHERE Documento='$Documento'";

    $resultado = $conexion->query($sq);
    while ($fila = mysqli_fetch_array($resultado)){
        $salida .= $fila[0];
        $conexion->close();
        $salida=dencritar($salida);

    }

    return($salida);


}
    

echo registro('6752785');



