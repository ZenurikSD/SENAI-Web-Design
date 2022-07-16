<?php
	/* 
		- $_POST: define os campos enviados pelo formulário  
		- Define variáveis com envio do formulário da página html
	*/
	$strNome= $_POST['nome'];
	$strEmail= $_POST['email'];
	$strTel = $_POST['tel'];
	$strTexto = $_POST['texto'];
	
	/* 
		Rotina que irá inserir os dados enviados para a tabela da base de dados
	*/
	
	// Alisson: Essa verificação não é necessária porquê nós já definimos o nome e email como campos obrigatórios. A não ser que algo muito errado aconteça, as variáveis SEMPRE vão estar definidas
	if (isset($strNome) && isset($strEmail)) {

		//estrutura de conexão com a base de dados em o banco de dados
		//127.0.0.1 - deve ser alterado para o ip do servidor da base de dados
		//root - deve ser alterado para o usuário de conexão a base de dados, o mesmo deve ter privilégios de acesso ao banco e as tabelas
		//'' - senha do usuário de acesso
		//dbsite -  banco de dados de conexão
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'dbsite-15-12-21');
		
		if ($mysqli->connect_errno) {
				echo("Não foi possível acessar o banco de dados");
		}
		// Alisson: O else aqui também não é necessário. Nós só precisamos de uma condição para quando a conexão falha.
		else{
			
			//Inserir na tabela os valores definidos
			$sql = "INSERT INTO tbcontatos(vchNome, vchEmail, vchTelefone, txtMensagem)";
			$sql .= " VALUES ('$strNome', '$strEmail', '$strTel','$strTexto')";	
			
			if ($mysqli->query($sql)) {
				?>
					<SCRIPT LANGUAGE="JavaScript">
						window.alert("Mensagem enviada com sucesso");
						window.location.href = "/../";
					</script>
				<?php
			}else{
				echo "Erro ao cadastrar contato.";
				echo "<br><a href='javascript:window.history.go(-1)'>";
				echo "Clique aqui para voltar.</a>";
			}
			
		}
		//Fecha conexão com base de dados
		$mysqli->close();
	}
	
?>