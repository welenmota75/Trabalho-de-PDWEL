<?php
	session_start();
	if(!isset($_SESSION['cpf'])){
		header ("location: ../index.html");
		//exit;
	}
	
?>