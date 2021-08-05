<?php

include "conexao.php";

$nomeCompleto = $_POST['nomeCompleto'];
$raCpf = $_POST['raCpf'];

$insert = "INSERT INTO Usuario Values(NULL, '$nomeCompleto', '$raCpf')";

	$result = mysqli_query($con, $insert) or die(mysql_error());
	
	header("location: ../index.html");
?>