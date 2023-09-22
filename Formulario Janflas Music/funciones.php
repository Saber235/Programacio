<?php
  
   function Registrar_Persona($Nombres,$Apellidos,$Correo,$Contraseña){
     
       $salida = 0;
       
       $conexion = mysqli_connet("localhost","root","root","J_J_J");
       $sql = "INSERT INTO J_J_J (Nombres, Apellidos, Correo, Contraseña)
       VALUES ('$Nombres', '$Apellidos', '$Correo', '$Contraseña');";
  
        try {

            $conexion = new mysqli("localhost", "root", "root", "mi_base_de_datos");

        } catch (mysqli_sql_exception $e) {

            echo "Error al conectar a la base de datos: " . $e->getMessage();

        }



                    // Consulta para buscar el usuario en la base de datos
                    $conexion = mysqli_connet("localhost","root","root","J_J_J");
                    $sql = "SELECT * FROM Cliente WHERE usuario = ? OR correo = ?";

                    // Preparamos la consulta
                    $stmt = $conexion->prepare($sql);

                    // Vinculamos los parámetros
                    $stmt->bind_param("ss", $usuario, $correo);

                    // Ejecutamos la consulta
                    $stmt->execute();

                    // Obtenemos el resultado de la consulta
                    $resultado = $stmt->get_result();

                    // Verificamos si hay resultados
                    if ($resultado->num_rows > 0) {
                        // El usuario ya está registrado
                        return true;
                    } else {
                        // El usuario no está registrado
                        return false;
                    }

                }


   