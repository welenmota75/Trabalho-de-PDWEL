<?php

include "conexao.php";
include "../php/controleAcesso2.php";

$cpf = $_POST['cpf'];

$insert = "INSERT INTO restrito Value (NULL, '$cpf')";

	$result = mysqli_query($con, $insert) or die(mysql_error());
	
	header("location: ../html/painelRestrito.php");
?>