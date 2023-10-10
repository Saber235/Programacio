
<?php

include('encriptacion.php');
function registro($Documento, $Nombre, $Clave)
{
    $salida = "";
    $conexion = mysqli_connect('localhost', 'root', 'root', 'pruebita2');

    // verificacion de conexion
    if (!$conexion) {
        die("Error al conectar a la base de datos:" . mysqli_connect_error());
    }
    $Clave=encritar($Clave);
    $sq = "INSERT INTO personas (documento, nombre, clave) VALUES ('$Documento', '$Nombre', '$Clave')";

    // Ejecutar la consulta
    $resultado = $conexion->query($sq);

    if ($resultado) {
        $salida = "Registro exitoso";
    } else {
        $salida = "Error en el registro: " . $conexion->error;
    }

    $conexion->close();

    return $salida;
}


echo registro("444", "tatiana", "444.");

?>


  

  






