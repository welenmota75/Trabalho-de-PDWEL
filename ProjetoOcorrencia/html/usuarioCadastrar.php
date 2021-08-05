<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro Usuário</title>
<script type="text/javascript" src="../js/validacao.js"> </script>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/style.css" />
</head>

<body>
<form onSubmit="return campoNulo();" action="../php/cadastroUsuario.php" method="post"> 
<div>
<h1> Usuário </h1>
<p class="cadastro"> <b>Nome Completo: </b> <input type="text" name= "nomeCompleto" autofocus required pattern="[A-Z\s]+$" class="form-control"/> </p>
<p class="cadastro"> <b>Prontuário: </b> <input type="text" name="raCpf" pattern="[a-zA-Z0-9\s]+$" class="form-control" placeholder="140000"/> </p>
</p>
</div>
<input type="submit" value="CadastraUsuario" class="btn btn-success" id = "cadastrarBotao" />

</form>

</body>
</html>
