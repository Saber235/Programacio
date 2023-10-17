<?php
include('autentificar.php');
$conexion = mysqli_connect('localhost', 'root', 'root', 'pruebita2');
$documento=$_GET['documento'];
$clave=$_GET['clave'];
$salida = autenticar($documento,$clave);

if ($salida==1)
header("location:a2.php?documento=$documento&clave=$clave");
else
header("location:a3.php");


