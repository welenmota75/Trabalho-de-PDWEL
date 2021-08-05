<?php
include "../php/conexao.php";
include "../php/controleAcesso.php";

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Menu Usuario</title>
</head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../css/style.css" />
<body background="../img/fundo.jpg" class="fundo">

<nav class="navbar navbar-inverse"> 
	<ul class="nav nav-tabs">
		<li><a href="ocorrenciaCadastrar.php" class="menu">Chamado</a> </li>
		<li><a href="pesquisaStatus.php" class="menu">Status</a></li>
    <li><a href="../php/logout.php" class="menu">Logout</a></li>
    </ul>
</nav>
        
</body>

</html>
