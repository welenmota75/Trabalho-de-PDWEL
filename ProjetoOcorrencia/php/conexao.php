<?php 
	$servidor = "localhost";
	$login = "root";
	$senha = "";
	$banco = "ocorrencia";
	
	//a versão do sql connect esta desatualizada, então podemos ter que tirar o i do mysqli ficando somente myslq
	$con = mysqli_connect ($servidor, $login, $senha);
	if ($con != NULL)
	{
		//conforme o problema acima foi necessário a inclusão do $con, então caso não funcione lembre-se de tirar do $con
		$bd = mysqli_select_db ($con, $banco);
		if ($bd != NULL){
		}else{ 
			echo "erro ao acessar o banco de dados";
		}
	}else{
		echo "erro ao acessar o servidor";
	}
?>