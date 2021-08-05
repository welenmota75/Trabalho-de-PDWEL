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
    <th>idProntuário :</th>
	<th>Nº do Patrimônio :</th>
	<th>Descrição :</th>
    <th>Modelo :</th>
    <th>Marca :</th>
	<th>Atualizar :</th>
	<th>Deletar: </th>
</tr>
<?php
$strcon = mysqli_connect('localhost','root','','ocorrencia') or die('Erro ao conectar ao banco de dados');
$sql = "SELECT idpatrimonio, numPatrimonio, descricao, modelo, marca FROM patrimonio";
$result = $strcon->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo "" .$row["idpatrimonio"] ?></td>
<td><?php echo "" .$row["numPatrimonio"]?></td>
<td><?php echo "" .$row["descricao"]?></td>
<td><?php echo "" .$row["modelo"]?></td>
<td><?php echo "" .$row["marca"]?></td>
<td><a href="../html/editarPatrimonio.php?edit_idpatrimonio=<?php echo $row['idpatrimonio'];?>" alt="edit"> Edit</a></td>
<td><input type="button" onClick="deleteme(<?php echo $row['idpatrimonio'];?>)" name="Delete" value="Delete"></td>
</tr>
<script language="javascript">
function deleteme(delnumPatrimonio)
{
	if(confirm("voce vai deletar")){
		window.location.href='delete.php?del_idpatrimonio=' +delprontuario+'';
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
