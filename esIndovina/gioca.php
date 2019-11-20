<?php 
    session_start();
    $_SESSION["tentativi"] = $_SESSION["tentativi"] + 1;
    $numeroDaInserire = $_REQUEST["numero"];
    if($numeroDaInserire == $_SESSION["random"]){
        echo "hai indovinato" . $_SESSION["random"]. "<br>";
        $_SESSION["vincita"]=1;
    }
	
    if($numeroDaInserire < $_SESSION["random"]){
        echo "hai sbagliato Il numero inserito è minore <br>";
    }
	
    if($numeroDaInserire > $_SESSION["random"]){
        echo "hai sbagliato Il numero inserito è maggiore <br>";
    }
	
    if($_SESSION["tentativi"] >= 4 && $_SESSION["vincita"] = 0){
        echo "hai perso";
    }else{
        if($_SESSION["vincita"] == 0){
            require 'gioco.html';
        }else{
            echo "fine";
        }
       
    }
  
    

?>