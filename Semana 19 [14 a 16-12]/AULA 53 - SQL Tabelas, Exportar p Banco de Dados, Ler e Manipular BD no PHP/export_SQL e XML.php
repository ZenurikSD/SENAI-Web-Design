<!-- Importando os dados do formulário -->
<?php
   // O arquivo deve ser colocado em uma pasta dentro da "document root" para ser exibido. Por padrão ela fica em xampp/htdocs/

   // Para exibir uma data, use a função date() com o parâmetro 'd/m/y'

   echo date('d/m/y').' -- ';

   // Trazendo os dados do formulário
   $nome   = null; //$_POST['nome'];
   $email  = null; //$_POST['email'];
   $tel    = null; //$_POST['tel'];
   $end    = null; //$_POST['end'];
   $est    = null; //$_POST['est'];
?>

<!-- Salvando as informações em um banco de dados SQL. 
Vamos conectar ao banco de dados MySQL usando uma das extensões que o PHP disponibiliza, a 'mysqli'. Vou instanciar a classe dela em um objeto para:
   1. Acessar o database alvo (endereço, login, nome)
   2. Inserir os valores que queremos nele através do método query()
   3. Exibir as mensagens de erro dos arrays 'error, errno etc.' do objeto instanciado. -->

<!-- ----------- 1. CONEXÃO ------------- -->
<?php 
   
   //Variáveis
   $host   = 'localhost';       // Nome do host
   $user   = 'root';            // Usuário
   $senha  = '';                // Senha
   $schema = 'loja'; // schema=db escolhido

   //Conexão - nova instância(parâmetros)
   $mysqli = new mysqli($host, $user, $senha, $schema);

   //Verifique se a conexão foi bem-sucedida
   // ! é negação - se (NÃO for_nulo(mensagem de erro))
   if ($mysqli->connect_error){ 
      echo 'Conexão falhou. ';
      echo 'Nº do erro: '.$mysqli->connect_errno.' ';
      echo 'Descrição: '.$mysqli->connect_error.' ';
      exit();
   }

   //Sucesso:
   echo 'Conexão bem-sucedida.'; 
?>

<!-- ------ 2. CRIAÇÃO DE TABELAS ------- -->
<?php
   // Query #1: Tabela de Produtos
   $produtos_query = 
   'CREATE TABLE `Produtos` (
      `ID` int(10) UNSIGNED AUTO_INCREMENT NOT NULL, 
      `NOME` varchar(255) NOT NULL,
      `PREÇO` smallint(5) UNSIGNED NOT NULL,
      PRIMARY KEY (ID)
   ) CHARSET=utf8;';

   // Executar a Query #1:
   if (!$mysqli->query($produtos_query)) {
      echo "Erro de consulta #1 ".$mysqli->error;
      exit(); }

   // Caso não tenha problemas:
   echo "Tabela 'Produtos' criada com sucesso.<br>";


   // Query #2: Tabela de Pedidos
   $pedidos_query = 
   'CREATE TABLE `Pedidos` (
      `ID` int(10) UNSIGNED AUTO_INCREMENT NOT NULL, 
      `DATA` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
      `CLIENTE` varchar(255) NOT NULL,
      PRIMARY KEY (ID)
   ) CHARSET=utf8;';

   // Executar a Query #2:
   if (!$mysqli->query($pedidos_query)) {
      echo "Erro de consulta #2: ".$mysqli->error;
      exit(); }

   // Caso não tenha problemas:
   echo "Tabela 'Pedidos' criada com sucesso.<br>";


   // Query #3: Tabela relacional de Pedidos e Produtos:
   $pedidos_produtos_query = 
   'CREATE TABLE `Produtos e Pedidos` (
      `ID` int(10) UNSIGNED AUTO_INCREMENT NOT NULL, 
      `ID_produto` int(10) UNSIGNED NOT NULL,
      `ID_pedido`  int(10) UNSIGNED NOT NULL,
      PRIMARY KEY (ID)
   ) CHARSET=utf8;';
   
   // Executar a Query #3:
   if (!$mysqli->query($pedidos_produtos_query)) {
      echo "Erro de consulta #3: ".$mysqli->error;
      exit(); }

   // Caso não tenha problemas:
   echo "Tabela 'Produtos e Pedidos' criada com sucesso.<br>";
?>

<!-- ------- 3.INSERÇÃO DOS DADOS ------- -->
<?php
  // Importando os dados do formulário
  $produto = $_POST['produto'];
  $preco   = $_POST['preco'];
  $cliente = $_POST['cliente'];

  // Queries:
  $produtos_query = 
    "INSERT INTO `Produtos`(NOME, PREÇO) VALUES(
      '$produto', $preco);";

  $pedidos_query = 
  "INSERT INTO `Pedidos`(CLIENTE) VALUES(
    '$cliente');";

   $i = 1;
   $produtos_pedidos_query =
   "INSERT INTO `Produtos e Pedidos` 
   (ID_produto, ID_pedido) VALUES(
   $i, $i);";


   // Executar com verificação:
   if(!$mysqli->query($produtos_query)){
   echo "Erro: ".$mysqli->error; exit();}
   echo "Dados de produto adicionados à tabela. <br>";

   if(!$mysqli->query($pedidos_query)){
   echo "Erro: ".$mysqli->error; exit();}
   echo "Dados de pedido adicionados à tabela. <br>";

   if(!$mysqli->query($produtos_pedidos_query)){
   echo "Erro: ".$mysqli->error; exit();}
   echo "IDs integradas à tabela relacional. <br>";
?>



<!-- Salvando as informações em um arquivo XML -->
<?php 
   // Escrevendo os campos para as colunas
   $registros = 
   fopen('Tabela de registros.xml', 'a+') 
   or exit("Arquivo não pôde ser criado ou já existe.");

   // Verificação para criar a primeira linha:
   $tamanho = filesize('Tabela de registros.xml');

      if($tamanho <= 10){
         fwrite($registros, '<?xml version="1.0"?>'."\n");
      }

      // Adicionando registros: <abertura> registro </fechamento>
      // Verificação: Só escreve o campo se a variável não for nula
      if (!is_null($produto)){
         fwrite($registros, "
         <Pedido> 
            <Produto>$produto</Produto>
            <Preço>$preco</Preço>
            <Cliente>$cliente</Cliente>
         </Pedido>
         ");
         };

      if (!is_null($email)){
      fwrite($registros, "
      <Contato> 
         <Nome>$nome</Nome>
         <E-mail>$email</E-mail>
         <Telefone>$tel</Telefone>
         <Endereço>$end</Endereço>
         <Estado>$est</Estado>
      </Contato>
      ");
      };
      

   /* Sobre essa verificação: 
      Descobri que um tamanho de 0 bytes não funciona, precisa ser um pouquinho mais. E antes eu usava um if..else, mas a lógica não seria boa porquê caso o documento estivesse vazio (if true), ele não iria preencher os dados do primeiro usuário kkkkkkk.
      Outra; o fwrite() envia pro XML com a mesma formatação que eu faço aqui, como se fosse uma tag <pre> do HTML. Não preciso pedir para pular linha ou fazer identação.
   */
?>

<!-- Mensagem de retorno -->
<?php    
   echo "Obrigado por preencher. Seus dados foram salvos no banco de dados 'Loja' e em um documento XML.";
?>