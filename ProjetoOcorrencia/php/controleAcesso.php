<?php
	session_start();
	if(!isset($_SESSION['raCpf'])){
		header ("location: ../index.html");
		//exit;
	}
	
?>