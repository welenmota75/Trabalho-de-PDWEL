<?php
	include "conexao.php";
	include "controleAcesso2.php";
	
	$data = $_POST['data'];
	$status = $_POST['status'];

	$inserir = "INSERT INTO statusocorrencia Values (NULL, '$data', '$status')";
	
	$sql = mysqli_query($con, $inserir) or die(mysql_error());
	
	header("location: ../html/painelRestrito.php");
?>