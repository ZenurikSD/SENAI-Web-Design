<?php

	//Verifica se as variáveis foram devidamentes enviadas
	if (isset($_GET['acao']) && isset($_GET['idContato'])){

		//estrutura de conexão com a base de dados em o banco de dados
		//127.0.0.1 - deve ser alterado para o ip do servidor da base de dados
		//root - deve ser alterado para o usuário de conexão a base de dados, o mesmo deve ter privilégios de acesso ao banco e as tabelas
		//'' - senha do usuário de acesso
		//dbsite -  banco de dados de conexão
		
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'dbsite');
	

		if ($_GET['acao'] == "ver"){
			
			if (!$mysqli->connect_errno) {
				
				//Listado o contato definido pelo idContato enviado
				$sql = "SELECT * FROM tbcontato WHERE idContato= ".$_GET['idContato'];
				
				$result = $mysqli->query($sql);
	
				if($row = $result->fetch_assoc()) {
					
						$data = $row["dteDataRegistro"];
						$nome = $row["vchNome"];
						$email = $row["vchEmail"];
						$telefone = $row["vchTelefone"];
						$mensagem = $row["txtMensagem"];
		
		
		
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utc-8">
<title>Acesso Contato</title>

<style type="text/css">
	.elemento{
	font-family:verdane;
	border-color:red;
	color:blue;
	font-size:18;
	border-radius:10px;
	}
	#msg{
	height:140px; }
</style>

</head>

<body>
	<fieldset>
	<legend>Visualizar Contato</legend>
	<label>Data de Cadastro:</label><?php echo($data); ?><br/>	
	<label>Nome Completo:</label><?php echo($nome); ?><br/>	
	<label>E-mail:</label><?php echo($email); ?><br/>	
	<label>Telefone:</label><?php echo($telefone); ?><br/>	
	<label>Mensagem:</label><?php echo($mensagem); ?><br/>	
	<label>
	<a href="pgListaTabela.php">ListaDeContato</a>
	</label>
	</fieldset>	
</body>
</html>

<?php
				}
			}
			

		}
	
		if ($_GET['acao'] == "del"){
				
			if (!$mysqli->connect_errno) {
				
				//Deletado o contato definido pelo idContato enviado
				$sql = "DELETE FROM tbcontato WHERE idContato= ".$_GET['idContato'];
					
				$result = $mysqli->query($sql);
					
				echo ("Deletado com sucesso <br />");
				echo ("<a href='pgListaTabela.php'>ListaDeContato</a>");
			}
			
			
		}
		
		//Fecha conexão com base de dados
		$mysqli->close();

	}
?>