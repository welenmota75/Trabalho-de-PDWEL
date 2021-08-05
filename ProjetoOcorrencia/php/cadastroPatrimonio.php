<?php
	include "conexao.php";
	include "controleAcesso2.php";
	
	$numPatrimonio = $_POST['numPatrimonio'];
	$descricao = $_POST['descricao'];
	$modelo = $_POST['modelo'];
	$marca = $_POST['marca'];
/*
	//pegar a session do tecnico e incluir para incluir depois do $fim	
	
	$restrito = "SELECT idcpf FROM restrito WHERE cpf='$_SESSION[cpf]'" ;
	
	$passar = mysqli_query($con, $restrito) or die(mysql_error());
	
	$exibir = mysqli_fetch_object($passar);
		
	$idcpf = $exibir->idcpf;
*/	
	$inserir = "INSERT INTO patrimonio Values (NULL, '$numPatrimonio', '$descricao', '$modelo', '$marca')";
	
	$sql = mysqli_query($con, $inserir) or die(mysql_error());
	
	header("location: ../html/painelRestrito.php");
?>