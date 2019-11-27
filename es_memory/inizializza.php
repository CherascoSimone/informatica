<?php

    session_start();

    $_SESSION["selezionate"]=0;
    $_SESSION["r1"]=0;
    $_SESSION["c1"]=0;
    $_SESSION["r2"]=0;
    $_SESSION["c2"]=0;       
    $_SESSION["vettoreImmagini"]=["img\mem_0.gif","img\mem_1.gif","img\mem_2.gif","img//mem_3.gif","img\mem_0.gif","img\mem_1.gif","img\mem_2.gif","img//mem_3.gif"];
    $_SESSION["trovate"]=0;
    $_SESSION["coppia1"]="";
    $_SESSION["coppia2"]="";
    $_SESSION["coppia3"]="";
    $_SESSION["coppia4"]="";

    shuffle($_SESSION["vettoreImmagini"]);
    foreach($_SESSION["vettoreImmagini"] as $immagine){
        echo $immagine ." &nbsp";
    }

    echo "<br> Inizializzato";
   

?>