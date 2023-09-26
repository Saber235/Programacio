<?php
   echo pruebita();
    function pruebita(){

      $salida='';
          $c = mysqli_connect("localhost","root","root","bd_analisis_datos2_cdattg");
          $q = "select ESTU_DEPTO_RESIDE,ESTU_MCPIO_RESIDE,count(*) as ESTU_registros_Departamento
          from sabertyt_genericas_20222
          group by ESTU_DEPTO_RESIDE,ESTU_MCPIO_RESIDE
          order by ESTU_DEPTO_RESIDE asc;";
          
          $r = $c->query($q);
          
          while($fila=mysqli_fetch_array($r))
          {
            $salida.=$fila[0];
            $salida.=$fila[1];
            $salida.=$fila[2];
            
        
          }
          
          $c->close();

          
         return $salida;
    }

    
    echo pruebita2();
    function pruebita2(){

      $salida='';
          $c = mysqli_connect("localhost","root","root","bd_analisis_datos2_cdattg");
          $q = "selet (1+2)as suma";
          $r = $c->query($q);
          while($fila=mysqli_fetch_assoc($r))
          {
            $salida.=$fila['suma'];
        
          }
          $c->close();
         return $salida;
    }
        




    
    