<?php
/**
 * Created by PhpStorm.
 * User: inf.cherascos0107
 * Date: 11/11/2019
 * Time: 12:54
 */
    $animale = $_REQUEST["animale"];

    $razza = $_REQUEST["razza"];
    $sesso = $_REQUEST["sesso"];


    $optional = $_REQUEST["optional"];
    $debug=1;
    if($debug){
        echo "animale: ".$animale . "<br>";
        echo "razza: ".$razza . "<br>";
        echo "sesso: ".$sesso . "<br>";
        echo "optional: ";
        foreach($opt as $optional){
            //for ($opt in $optional)
            echo $opt . ", ";
        }
    }
?>