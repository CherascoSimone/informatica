<?php 
	require("./connection.php");
	$API_ID = "gatto";
	$API_ID_CRIPTO = "icvvq" //+2 lettera password //  cifrario di cesare=2;
	$accesso = false;
	//filte inizio
	if(isset( $_REQUEST["token"] )){
		$token=$_REQUEST["token"];
	}else{
		$token="";
	}
	
	if($token == $API_ID){
		$accesso=true;
	}
	
	if($accesso){
	
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
	if(isset( $_REQUEST["order"] )){
		$order=$_REQUEST["order"];
	}else{
		$order=false;
	}
	//Filter - End
	//Applico filtro alla query
	$sql = "select * from computer";
	//http://localhost/15_persona/php/jsonElencoComputerByFilter.php?id=2
	
	if($marcaTastiera!=""){
		$sql .= " where marcaTastiera= '$marcaTastiera'";
	}
	if($id!=""){
		$sql .= " where id= $id";
	}
	if($marcaVideo!=""){
		$sql .= " where marcaVideo= '$marcaVideo'";
	}
	
	if($marcaCase!=""){
		$sql .= " where marcaCase= '$marcaCase'";
	}
	
	if($order!=""){
		$sql .= " ORDER BY $order";
	}
	
	$rs = $con->query($sql);
	if($rs==false){
		die("sql error" . $con->error . "<br/>" . $sql);
	}
	$vet=array();
	//->fetch_assoc(): record["id"], $record["cognome"], $record["nome"]
	while($record = $rs->fetch_assoc()){
		array_push($vet, $record);//fifo gestisce un vettore
	}
	//funzione che traduce un vettore associativo in un json semantico
	$json= json_encode($vet);
	echo $json;
	} else die("403 - forbidden");
?>