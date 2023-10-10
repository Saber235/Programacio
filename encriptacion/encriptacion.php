<?php

function encritar ($m){

    $salida = "";
        $m= str_replace("a","/",$m);
        $m= str_replace("b","#",$m);
        $m= str_replace("c","$",$m);
        $m= str_replace("d","%",$m);
        $m= str_replace("e","&",$m);
        $m= str_replace("f","!",$m);
        $m= str_replace("g","¡",$m);
        $m= str_replace("h","?",$m);
        $m= str_replace("i","¿",$m);
        $m= str_replace("j",">",$m);
        $m= str_replace("k","<",$m);
        $m= str_replace("l","°",$m);
        $m= str_replace("n","@",$m);
        $m= str_replace("o","£",$m);
        $m= str_replace("p","♥",$m);
        $m= str_replace("q","¬",$m);
        $m= str_replace("r","∟",$m);
        $m= str_replace("s","1",$m);
        $m= str_replace("t","☺",$m);
        $m= str_replace("u","♦",$m);
        $m= str_replace("w","♠",$m);
        $m= str_replace("s","☻",$m);
        $m= str_replace("m","♂",$m);
        $m= str_replace("x","▬",$m);
        $m= str_replace("y","«",$m);
        $m= str_replace("z","þ",$m);
        $m= str_replace(":","~",$m);
        $m= str_replace(".",")",$m);
        $m= str_replace(",","(",$m);
        $m= str_replace(";","/",$m);
        $m= str_replace("(","s",$m);
        $m= str_replace(")","p",$m);
        $m= str_replace("0","q",$m);
        $m= str_replace("1","D",$m);
        $m= str_replace("2","R",$m);
        $m= str_replace("3","V",$m);
        $m= str_replace("4","X",$m);
        $m= str_replace("5","A",$m);
        $m= str_replace("6","M",$m);
        $m= str_replace("7","Z",$m);
        $m= str_replace("8","P",$m);
        $m= str_replace("9","v",$m);
       

        $salida= $m;
    return $salida;

}
echo encritar(" ");



function dencritar ($i){

    $salida = "";
        $i= str_replace("/","a",$i);
        $i= str_replace("#","b",$i);
        $i= str_replace("$","c",$i);
        $i= str_replace("%","d",$i);
        $i= str_replace("&","e",$i);
        $i= str_replace("!","f",$i);
        $i= str_replace("¡","g",$i);
        $i= str_replace("?","h",$i);
        $i= str_replace("¿","i",$i);
        $i= str_replace(">","j",$i);
        $i= str_replace("<","k",$i);
        $i= str_replace("°","l",$i);
        $i= str_replace("@","n",$i);
        $i= str_replace("£","o",$i);
        $i= str_replace("♥","p",$i);
        $i= str_replace("¬","q",$i);
        $i= str_replace("∟","r",$i);
        $i= str_replace("1","s",$i);
        $i= str_replace("☺","t",$i);
        $i= str_replace("♦","u",$i);
        $i= str_replace("♠","w",$i);
        $i= str_replace("☻","s",$i);
        $i= str_replace("♂","m",$i);
        $i= str_replace("▬","x",$i);
        $i= str_replace("«","y",$i);
        $i= str_replace("þ","z",$i);
        $m= str_replace("ñ",":",$i);
        $m= str_replace(")",".",$i);
        $m= str_replace("(",",",$i);
        $m= str_replace("/",";",$i);
        $m= str_replace("s","(",$i);
        $m= str_replace("p",")",$i);
        $m= str_replace("q","0",$i);
        $m= str_replace("D","1",$i);
        $m= str_replace("R","2",$i);
        $m= str_replace("V","3",$i);
        $m= str_replace("X","4",$i);
        $m= str_replace("A","5",$i);
        $m= str_replace("M","6",$i);
        $m= str_replace("Z","7",$i);
        $m= str_replace("P","8",$i);
        $m= str_replace("v","9",$i);
        $salida= $i;
    return $salida;

}
echo dencritar("");
