<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="../css/style.css" rel="stylesheet" />
</head>

<body>
<form action="../php/entrarUsuario.php" method="post">
<div class="login" align="center">
<p> <label>Prontuario:  </label> </p>
<p> <input type="text" name="raCpf" class="form-control" id="raCpf"/> </p>
<p><input type="submit" value="entrar" class="btn btn-success"/></p>
<a href="../html/usuarioCadastrar.php" id="cadastrarUsuario">Cadastrar Usuário </a>
</div>
</form>
</body>
</html>
