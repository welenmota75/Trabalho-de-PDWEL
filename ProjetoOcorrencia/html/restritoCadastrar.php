<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro Técnico</title>
<script type="text/javascript" src="../js/validacao.js"> </script>
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
</head>

<body>

<form onSubmit="return campoNulo();" action="../php/cadastroProfessor.php" method="post">
<div>
<h1> Técnico </h1>

<p class="cadastro"><b>Nome:</b> <input type="text" name="nomeProfessor" pattern="[a-zA-Z\s]+$" placeholder="Marco" class="form-control"/> </p>
<p class="cadastro"><b>Endereco:</b> <input type="text" name="enderecoProfessor" placeholder="Rua IF nº2000" class="form-control"/> 
<p class="cadastro"><b>Telefone:</b> <input type="text" name="telefoneProfessor" pattern="[0-9]+$" class="form-control" placeholder="39485721" id="telefone"/> </p>
<p class="cadastro"><b>RG:</b> <input type="text" name="rgProfessor" placeholder="345672136" class="form-control" id="rg"/> </p>
<p class="cadastro"><b>CPF:</b> <input type="text" name="cpfProfessor" pattern="[0-9]+$" class="form-control" placeholder="34575324598" id="cpf"/> </p>
<p class="cadastro"><b>Email:</b> <input type="email" name="emailProfessor" class="form-control" placeholder="marco@hotmail.com"/> </p>


<input type="submit" value="Cadastra Técnico" class="btn btn-success" id="cadastrarBotao"/>

</form>
</body>
</html>
