<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prova</title>
<script type="text/javascript" src="../js/validacao.js"> </script>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>

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

<form onSubmit="return campoNulo();" action="../php/cadastroTecnico.php" method="post">
<div>
<h1> Técnico </h1>

<p class="cadastro"><b>CPF:</b> <input type="text" name="cpf" autofocus required pattern="[0-9]+$" class="form-control" placeholder="34575324598" id="cpf"/> </p>

<input type="submit" value="Cadastrar Técnico" class="btn btn-success" id="cadastrarBotao"/>

</form>
</body>
</html>
