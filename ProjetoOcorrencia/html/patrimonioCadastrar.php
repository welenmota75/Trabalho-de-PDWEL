<?php

include "../php/conexao.php";
include "../php/controleAcesso2.php";

?>

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

<form method="post" action="../php/cadastroPatrimonio.php" onSubmit="return campoNulo()">
<div class="prova">
<label>Nº do Patrimônio: </label>
<input type="text" name="numPatrimonio" autofocus required placeholder="29056845" class="form-control"/>

<p>
<label>Descrição: </label>
<input type="text" name= "descricao" autofocus required placeholder="CPU INTEL I3, HD 500, 4GB MEM, GRAVADOR DVD" class="form-control" />	

<label>Modelo: </label>
<input type="text" name = "modelo" autofocus required placeholder="IT5600" class="form-control"/>
 </p>
 
<label>Marca: </label>
<input type="text" name = "marca" autofocus required placeholder="ITAUTEC" class="form-control"/>
 </p> 

<p> <input type="submit" value="Cadastrar Patrimônio" name="cadastrarPatrimonio" class="btn btn-success" id="cadastrarBotao"/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<a href='pesquisaPatrimonio.php'><input type='button' value='Pesquisar' class="btn btn-success" id="cadastrarBotao" /></a>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<a href='painelRestrito.php'><input type='button' value='Finalizar' class="btn btn-success" id="cadastrarBotao" /></a></p>
</div>

</form>
</body>
</html>
