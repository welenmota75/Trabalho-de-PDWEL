<?php
include "../php/conexao.php";
include "../php/controleAcesso2.php";

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Painel Restrito</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body background="../img/fundo.jpg" class="fundo">
<nav class="navbar navbar-inverse"> 
	<ul class="nav nav-tabs">
		<li><a href="patrimonioCadastrar.php" class="menu">Cadastro Patrimônio</a></li>
        <li><a href="laboratorioCadastrar.php" class="menu">Cadastro Laboratório</a></li>
        <li><a href="tecnicoCadastrar.php" class="menu">Cadastro Técnico</a></li>
        <li><a href="statusCadastrar.php" class="menu">Cadastrar Status</a></li>
		<li><a href="../php/logout.php" class="menu">Logout</a></li>
    </ul>
</nav>
</div>

</body>
</html>
