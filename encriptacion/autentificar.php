<?php
function autenticar($documento,$clave){
    $documento = '';
    $clave = '';
    $salida= '';

    $conexion = mysqli_connect('localhost', 'root', 'root', 'pruebita2');

    // Realizar la consulta SQL
    $query = "SELECT COUNT(*) FROM Personas WHERE Documento='333' AND Clave='VVVp'";

    $result = mysqli_query($conexion, $query);

    // Comprobar el resultado
    while ($fila = mysqli_fetch_array($result)){
        // Comprobar si el usuario está autenticado
        if ($fila[0] > 0) {
            // El usuario está autenticado
            $salida = "Ya esta autenticado";
            break;
        } else {
            // El usuario no está autenticado
            $salida = "No esta autenticado";
        }
        // Cerrar la conexión
        mysqli_close($conexion);
    }
    return $salida;
}
$documento = "";
$clave = "";
$salida = autenticar($documento,$clave);
echo $salida;

function Mostrar($documento){
    $salida = '';
    $conexion = mysqli_connect('localhost', 'root', 'root', 'pruebita2');
    $sq = "SELECT COUNT(*) FROM Personas WHERE Documento='$documento' ";
    $resultado = $conexion->query($sq);
    while ($fila = mysqli_fetch_array($resultado)){
        $salida .= $fila[0];
        $salida .= $fila[1];
        $salida .= $fila[2];
    }
    return $salida;


}

?>
