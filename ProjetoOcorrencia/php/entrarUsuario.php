<?php
include "conexao.php";
//include "controleAcesso.php";

$raCpf = $_POST["raCpf"];


$pesquisar = "SELECT * FROM Usuario WHERE raCpf='$raCpf'";

$sql = mysqli_query($con, $pesquisar);

$row = mysqli_num_rows($sql);

if($row > 0){
	$registro = mysqli_fetch_object($sql);

	session_start();
	$_SESSION['raCpf']=$_POST['raCpf'];
	$_SESSION['id']=$registro->idusuario;
	header("location: ../html/menuUsuario.php");
}
echo "RA inexistente";

?>