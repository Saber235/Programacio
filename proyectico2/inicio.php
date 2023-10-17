<?php

  include( "vista.php" ); 

?>

<html>
  <head>
    <title></title>

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

  </head>

  <body style='font-family: Tahoma;'>

  <?php
    
    echo encabezado();

    echo repitis( 100 );

    //echo date("m"); 
    //echo date("i");

  ?>

  <?php

    echo pata();

  ?>

  </body>
</html>