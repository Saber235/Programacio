<?php
   echo pruebitate("GUAVIARE");
    function pruebitate($d){
        $salida='';
        $c = mysqli_connect("localhost","root","root","bd_analisis_datos2_cdattg");
        $q = "select ESTU_DEPTO_RESIDE,ESTU_MCPIO_RESIDE,count(*) as ESTU_registros_Departamento from sabertyt_genericas_20222";
        $q =  "where ESTU_DEPTO_RESIDE like '$d' ";
        $q = "group by ESTU_DEPTO_RESIDE,ESTU_MCPIO_RESIDE";
        $q .= "limit 10";
        echo $q;

        $r = $c->query($q);
        while($fila = mysqli_feth_array($r)){
            $salida.=$fila[0];
            $salida.=$fila[1];
            $salida.=$fila[2];

        }

        return $salida;



    }

     