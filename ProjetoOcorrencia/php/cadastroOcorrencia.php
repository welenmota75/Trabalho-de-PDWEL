<?php
	include "conexao.php";
	include "controleAcesso.php";
	
	$dataAbertura = $_POST['dataAbertura'];
	$descricaoProblema = $_POST['descricaoProblema'];
	$idpatrimonio = $_POST['idpatrimonio'];
	$idlaboratorio = $_POST['idlaboratorio'];
		
	//pegar a session do usuário e incluir	
	
	$usuario = "SELECT idusuario FROM usuario WHERE raCpf='$_SESSION[raCpf]'" ;
	
	$passar = mysqli_query($con, $usuario) or die(mysql_error());
	
	$exibir = mysqli_fetch_object($passar);
		
	$usuario_idusuario = $exibir->idusuario;

	//insert into dadosocorrencia values (null, "2017-02-10", "ASDJ", (select idUsuario from usuario where raCpf = "1466127"), (select idPatrimonio from patrimonio where numPatrimonio = 2904558), 9
	$inserir = "insert into dadosocorrencia values (null, '$dataAbertura', '$descricaoProblema', '$usuario_idusuario', '$idpatrimonio', '$idlaboratorio')";
	
	$sql = mysqli_query($con, $inserir) or die(mysql_error());

	header ("location: ../html/ocorrenciaCadastrar.php");

?>