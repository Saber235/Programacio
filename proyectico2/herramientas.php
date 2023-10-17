<?php

    function texto_a_enlace( $texto, $color, $tamaño = 12 )
    {
        $salida = "";

        $salida .= "<a href='#' style=' "; //Inicio enlace.
        $salida .= "color: $color ;";
        $salida .= "font-size: $tamaño ;";
        $salida .= " '> $texto </a>"; //Fin enlace.

        return $salida;
    }

    function espacios_horizontales( $n )
    {
        $salida = "";

        for( $i = 1; $i <= $n; $i ++ ) 
        $salida .= "&nbsp;";

        return $salida;
    }