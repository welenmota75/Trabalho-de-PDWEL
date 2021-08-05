<?php

include "../php/conexao.php";
include "../php/controleAcesso2.php";

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Laboratório</title>
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

<form method="post" action="../php/cadastroStatus.php" onSubmit="return campoNulo()">
<div class="prova">
<label>Data: </label>
<input type="text" name="data" id="data" value='<?php echo date("Y-m-d");?>' autofocus required placeholder="SALA 01 BLOCO D" class="form-control"/>
<label>Status: </label>
<input type="text" name="status" id="status" autofocus required pattern="[A-Z0-9\s]+$" placeholder="EM MANUTENÇÃO" class="form-control"/>

<p> <input type="submit" value="Cadastrar Status" name="cadastrarStatus" class="btn btn-success" id="cadastrarBotao" /> </p>
</div>

</form>
</body>
</html>
