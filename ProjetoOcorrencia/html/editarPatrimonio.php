<?php
$strcon = mysqli_connect('localhost','root','','ocorrencia') or die('Erro ao conectar ao banco de dados');

if(isset($_GET['edit_idpatrimonio'])){
	$sql="SELECT * FROM patrimonio where idpatrimonio=" .$_GET['edit_idpatrimonio'];
	$result = mysqli_query($strcon, $sql);
	$row = mysqli_fetch_array($result);
}

if(isset($_POST['btn-update'])){
	$idpatrimonio = $_POST['idpatrimonio'];
	$numPatrimonio = $_POST['numPatrimonio'];
	$update= "UPDATE patrimonio SET idpatrimonio='$idpatrimonio', nome='$numPatrimonio' where idpatrimonio=".$_GET['edit_idpatrimonio'];
	$up = mysqli_query($strcon, $update);
	if(!isset($sql)){
		die ("error $sql" .mysqli_connect_error());
		}else{
			header("location: index.html");
		}
	
}
	
	?>
	<!-- create edicao-->
	<!doctype html>
	<html>
	<body>

	<form method="post">
	<center>
	<h1>Alteração</h1>
	<hr>
	<p><br>
	  <label> idpatrimonio:</label>
	  <input name="patrimonio" type="text" autofocus required id="idpatrimonio" placeholder="N do Prontuário" title="Digite o número do seu prontuário" autocomplete="on" value="<?php echo $row['idpatrimonio'];?>" size="10">
	  <label>numPatrimonio:</label>
	  <input name="numeroPatrimonio" type="text" required id="numPatrimonio" autocomplete="on" value="<?php echo $row['numPatrimonio'];?>" size="50" >
	  
	  <label for="descricao">Descrição:</label>
	  <input name="descricao" type="text" required id="descricao" placeholder="Informe a descrição" autocomplete="on" value="<?php echo $row['descricao'];?>" size="30">
	  <label for="telefone2"> </label>
	  </p>
    <p>
      <label for="modelo">Modelo :</label>
      <input name="modelo" type="text" id="modelo" placeholder="Modelo do Equipamento" autocomplete="on" value="<?php echo $row['modelo'];?>">
      <label for="marca">Marca : </label>
      <input name="marca" type="text" id="marca" placeholder="Marca do Equipamento" autocomplete="on" value="<?php echo $row['marca'];?>">
    </p>
    <button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Update</strong></button>
		 <a href="index.php" ><button type="button" value="button">Cancel</button></a>
		 </form>
		 <script language="javascript">
		 function update(){
			 var x;
			 if(confirm("update com sucesso") == true){
				 x="update";
				 
			 }
			 
		 }
	</script>
    </center>
	</body>
</html>