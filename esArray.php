<?php

	//primo tipo
    $json=['arancione', 'arancia', 'albicocca'];
	for($i=0; $i<3; $i=$i++){ 
    echo $json[$i] . ",";
	}
	
	//secondo tipo
	$json2 = array('arancione', 'arancia', 'albicocca');
	for($i=0; $i<3; $i=$i++){ 
    echo $json2[$i] . ",";
	}
	
	
	//terzo tipo
	$json3 = array(
	   0 => "arancione",
	   1 => "arancia",
	   2 => "albicocca");
	for($i=0; $i<3; $i=$i++){ 
    echo $json3[$i] . ",";
	}
	
	//quarto tipo
	$json4 = array(
	   "ar" => "arancione",
	   "ara" => "arancia",
	   "al" => "albicocca");
	foreach ($json4 as $e){
	echo $e."<br>";
	}
	
	//quinto tipo
	$json5 = array('ar' => 'arancione',
				   'ara' => 'arancia',
				   'al' => 'albicocca');
	echo %json5[0]['ar'];
	echo %json5[0]['ara'];
	echo %json5[0]['al'];
	
?>