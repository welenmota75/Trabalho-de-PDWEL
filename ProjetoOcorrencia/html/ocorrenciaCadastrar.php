<?php

include "../php/conexao.php";
include "../php/controleAcesso.php";

?>


<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Cadastrar Ocorrência</title>
<script type="text/javascript" src="../js/validacao.js"> </script>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>

<nav class="navbar navbar-inverse"> 
	<ul class="nav nav-tabs">
		<li><a href="ocorrenciaCadastrar.php" class="menu">Chamado </a></li>	
		<li><a href="pesquisaStatus.php" class="menu">Status </a></li>
		<li><a href="../php/logout.php" class="menu">Logout</a></li>
    </ul>
</nav>
</div>

<form action='../php/cadastroOcorrencia.php' method='post' onSubmit="return campoNulo()"> 
                
<div class="select">
<label for="idpatrimonio">Patrimônio:</label>
<select name="idpatrimonio" id="idpatrimonio">
<option value=""></option>
<?php
	$sql = "SELECT idpatrimonio, numPatrimonio FROM patrimonio ORDER BY numPatrimonio";
	$result = $con->query($sql);
	
		while($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['idpatrimonio'].'">'.$row['numPatrimonio'].'</option>';
		}
?> 
</select>
</div>	
        
<div class="select">
<label for="idlaboratorio">Laboratório:</label>
<select name="idlaboratorio" id="idlaboratorio">
<option value=""></option>
<?php
	$sql = "SELECT idlaboratorio, sala FROM laboratorio ORDER BY sala";
	$result = $con->query($sql);
	
		while($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['idlaboratorio'].'">'.$row['sala'].'</option>';
		}
?> 
</select>
</div>
<p class="cadastro"> <b>Data Abertura: </b> <input type="text" name= "dataAbertura" id="dataAbertura" value='<?php echo date("Y-m-d");?>' class="form-control"/> </p>
<p class="cadastro"> <b>Relatar Problema: </b> <input type="text" name="descricaoProblema" id="descricaoProblema" autofocus required pattern="[A-Z0-9\s]+$" class="form-control" placeholder="MICRO NAO LIGA"/> </p>
</p>
</p>
<div>
<input type='submit' value='Cadastrar Ocorrência' class="btn btn-success" id="cadastrarBotao"/>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<a href='painel.php'><input type='button' value='Finalizar' class="btn btn-success" id="cadastrarBotao" /></a>
 </div>
</form>
</body>
</html>
