<?php

    include( "herramientas.php" );

    function repitis( $n )
    {
        $salida = "";

        for( $i = 1; $i <= $n; $i ++ )
        {
            $salida .= producto();
        }

        return $salida;
    }

    function producto(){

        $salida = "";

        $salida .= "<div class='contenedor-producto'>";
        $salida .= "<img src='img/".productos_aleatorios()."' style='width: 120px;'><br>";
        $salida .= "<hr>";
        $salida .= "<div style='font-size: 30px;'>$560.000</div>";
        $salida .= "<div style='font-size: 14px; color: green;'>32% Off</div>";
        $salida .= "<div style='font-size: 14px; color: green;'>Envío gratis.</div><br>";
        $salida .= "<div style='font-size: 10px; color: gray;'>Samsung Galaxy A04S Dual SIM 128 GB</div> <br>";
        $salida .= "</div>  <br>";

        return $salida;
    }

    function productos_aleatorios()
    {
        $salida = "";

        if( rand( 0, 10 ) > 5 ){

            $salida = "cuaderno.webp";

        }else{

            $salida = "telefono.webp";
        }

        return $salida;
    } 

    function encabezado()
    {
        $salida = "";

        $salida .= "<div style='height: 50px; background-color: yellow; padding: 10px;'>";
        $salida .= "<img src='img/logo.png' style='width: 100px;'>";
        $salida .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        $salida .= "<input type='text' placeholder='Buscar productos, marcas y más.'>";
        $salida .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        $salida .= "<img src='img/call-to-action.png' style='width: 250px;'>";
        $salida .= "</div>";

        $salida .= "<div id='contenedor-encabezado2'>";
        $salida .= "<div id='contenedor-encabezado2-azul'>Nuevo</div>";
        $salida .= "Categorías Ofertas Historial Supermercado Vender Ayuda / PQR";
        $salida .= "</div>";

        return $salida;
    }

    function pata()
    {
        $salida = "<footer>";

        $salida .= "<img id='imagen-pata-linea' src='img/pata-linea.png'>";
        $salida .= texto_a_enlace( "Trabaja con nosotros", "1243F9", 10 );
        $salida .= espacios_horizontales( 4 );
        $salida .= texto_a_enlace( "Términos y condiciones", "#2a2d2e", 10 ); 
        $salida .= espacios_horizontales( 4 );
        $salida .= texto_a_enlace( "Cómo cuidamos tu privacidad", "#2a2d2e", 10 ); 
        $salida .= espacios_horizontales( 4 );
        $salida .= texto_a_enlace( "Accesibilidad Ayuda / PQR ", "#2a2d2e", 10 );
        $salida .= espacios_horizontales( 4 );
        $salida .= texto_a_enlace( "www.sic.gov.co;", "#2a2d2e", 10 );

        $salida .= "<div id='contenedor-pata-gris'>";
        $salida .= "<br>";
        $salida .= "Copyright © 1999-2023 MercadoLibre Colombia LTDA. <br><br>";
        $salida .= "Carrera 17 Numero 93 - 09 Piso 3, Bogotá D.C., Colombia";
        $salida .= "</div>";
        $salida .= "<hr>";
        $salida .= "<img id='imagen-pata-empresas-logos' src='img/pata-empresas.png'>";

        $salida .= "</footer>";

        return $salida;
    }

 