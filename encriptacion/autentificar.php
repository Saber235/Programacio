<?php
include('encriptacion.php');
function autenticar($Documento, $Clave)
{
    // Conectar a la base de datos
    $conexion = mysqli_connect('localhost', 'root', 'root', 'pruebita2');

    // Validar los datos
    if (!is_numeric($Documento)) {
        throw new Exception('El Documento debe ser un número');
    }
    if (empty($Clave)) {
        throw new Exception('La Clave no puede estar vacía');
    }

    // Ejecutar la consulta
    $sq = "SELECT (Nombre) from Personas where Documento = $Documento
    and Clave = $Clave ";

    $resultado = $conexion->query($sq);

    // Verificar si el usuario existe
    if (!$resultado) {
        return false;
    }

    // Obtener la clave del usuario
    $fila = mysqli_fetch_array($resultado);
    $ClaveEncriptada = $fila[0];
    

    // Comparar la clave ingresada con la clave de la base de datos
    $resultado = password_verify($Clave, $ClaveEncriptada);

    // Cerrar la conexión
    $conexion->close();

    // Devolver el resultado
    return $resultado;
}
$Documento = '444';
$Clave = 'XXXp';

$resultado = autenticar($Documento, $Clave);

if ($resultado) {
    echo 'El usuario está autenticado';
} else {
    echo 'El usuario no está autenticado';
}