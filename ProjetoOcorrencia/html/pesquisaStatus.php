<html>
<head><title>Pesquisa Registro</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 5px;
}

tr:nth-child(even){background-color: #f1f1f1}

th {
    background-color: #797979;
    color: white;
}
</style>
</head>
<body>

</body>
<table border="0">
<tr>
    <th>idocorrencia :</th>
	<th>Data Abertura :</th>
	<th>Descrição do Problema :</th>
    <th>Patrimonio :</th>
    <th>Laboratorio :</th>

</tr>
<?php
$strcon = mysqli_connect('localhost','root','','ocorrencia') or die('Erro ao conectar ao banco de dados');
$sql = "SELECT idocorrencia, dataAbertura, descricaoProblema, usuario_idusuario, patrimonio_idpatrimonio, laboratorio_idlaboratorio FROM dadosocorrencia";
$result = $strcon->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo "" .$row["idocorrencia"] ?></td>
<td><?php echo "" .$row["dataAbertura"]?></td>
<td><?php echo "" .$row["descricaoProblema"]?></td>
<td><?php echo "" .$row["patrimonio_idpatrimonio"]?></td>
<td><?php echo "" .$row["laboratorio_idlaboratorio"]?></td>
<td><a href="../html/editarPatrimonio.php?edit_idpatrimonio=<?php echo $row['idocorrencia'];?>" alt="edit"> Edit</a></td>
</tr>
<script language="javascript">
function deleteme(delnumPatrimonio)
{
	if(confirm("voce vai deletar")){
		window.location.href='delete.php?del_idocorrencia=' +delidocorrencia+'';
		return true;			
	}
}
</script>	
	
<?php	    }

} else {
    echo "0 results";}
$strcon->close();
?>
</html>	
