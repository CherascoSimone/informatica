<?php 
	require("./connection.php");
	
	//filte inizio
	if(isset( $_REQUEST["id"] )){
		$id=$_REQUEST["id"];
	}else{
		$id="";
	}
	
	
	if(isset( $_REQUEST["marcaTastiera"] )){
		$marcaTastiera=$_REQUEST["marcaTastiera"];
	}else{
		$marcaTastiera="";
	}
	
	if(isset( $_REQUEST["marcaVideo"] )){
		$marcaVideo=$_REQUEST["marcaVideo"];
	}else{
		$marcaVideo="";
	}
	
	if(isset( $_REQUEST["marcaCase"] )){
		$marcaCase=$_REQUEST["marcaCase"];
	}else{
		$marcaCase="";
	}
	//Filter - End
	//Applico filtro alla query
	$sql = "DELETE FROM computer WHERE ID='$id'";
	//http://localhost/15_persona/php/jsonElencoComputerByFilter.php?id=2
	
	
	echo $json;
	}
?>