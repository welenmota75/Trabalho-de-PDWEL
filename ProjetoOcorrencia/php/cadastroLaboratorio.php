<?php
	include "conexao.php";
	include "controleAcesso2.php";
	
	$sala = $_POST['sala'];
	
	$inserir = "INSERT INTO laboratorio Values (NULL, '$sala')";
	
	$sql = mysqli_query($con, $inserir) or die(mysql_error());
	
	header("location: ../html/painelRestrito.php");
?>