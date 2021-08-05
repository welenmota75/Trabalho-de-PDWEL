<?php

include "conexao.php";
include "controleAcesso.php";

$cpf = $_POST["cpf"];

$pesquisar = "SELECT * FROM restrito WHERE cpf='$cpf'";

$sql = mysqli_query($con, $pesquisar);

$row = mysqli_num_rows($sql);

if($row > 0){
	$_SESSION['cpf']=$_POST['cpf'];
	header("location: ../html/painelRestrito.php");
}
?>