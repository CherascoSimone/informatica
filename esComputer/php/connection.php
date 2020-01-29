<?php //ACCESSO AL DATABASE
	define('DBNAME', '5ainf1920');
	define('DBHOST', 'localhost'); //il db è sualla stessa macchina del client
	define('DBUSER', 'root');
	define('DBPASS', '');

	$con = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

	if($con->connect_errno) { //connect_errno=0 -> if(false)
		$codice = $con->connecr_errno;			//codice errore
		$descErrore = $con->connect_error;		//descrizione errore
		die("Errore di connessione: $codice - $descErrore");
	}
	$con->set_charset("utf-8"); //Imposto il set id caratteri //utf-8 codifica con cui vai a scrivere
?>