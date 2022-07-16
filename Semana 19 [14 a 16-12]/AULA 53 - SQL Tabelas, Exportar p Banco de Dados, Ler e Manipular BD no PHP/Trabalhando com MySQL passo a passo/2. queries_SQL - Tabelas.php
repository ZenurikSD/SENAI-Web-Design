<!-- Acompanhando esse tutorial: https://alexwebdevelop.com/php-with-mysql/. "SQL Queries Explained" -->

<!--"Toda operação de um banco de dados é feita através de queries SQL (consulta, pedir por informação)."

Aqui ele começa a falar de "Declarações Preparadas", onde você primeiro passa ao SQL o comando sem valores, usando (?) como placeholder, pedindo para ele "preparar", e depois anexa o valor nessa interrogação. Pelo jeito é uma medida de segurança para evitar ataques de injeção de código. Eu falo de outra medida no arquivo 3. -->


<!-- Ilustrando a configuração das tabelas: -->
<?php
   
   "CREATE DATABASE 'pastaLoja' ";
   "CREATE TABLE 'Produtos' ";
   "COLS: ID_produto (PRIMARY, AUTO-INCREMENT),
          NOME_produto, 
          PREÇO_produto";
   "CREATE TABLE 'Pedidos'; ";
   "COLS: ID_pedido (PRIMARY, AUTO-INCREMENT),
          DATA_pedido,
          CLIENTE_pedido";
   // Cada linha conecta um pedido específico com um produto específico, identificados pelas suas IDs.
   "CREATE TABLE 'pedidos_produtos'; ";
   "COLS: ID (PRIMARY, AUTO-INCREMENT),
          ID_produto,
          ID_pedido"; 
   
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

   // 'unsigned' não aceita números negativos. 
   // Não é necessário fazer outras queries alterando a tabela para adicionar 'auto_increment' e 'primary key'. O tutorial faz isso separadadmente, provavelmente para isolar algum erro que possa surgir ao tentar atribuir esses valores.
   // Eu poderia fazer todas as tabelas em um pedido só para ser eficiente, mas eu gosto da separação.

   // Executar a Query #1:
   // Se a consulta tiver algum erro (saída FALSE), inverte(!) a saída para que esse if TRUE seja executado:
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



   // Query #3: Tabela relacional de Pedidos e Produtos
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


   /* É... Isso aqui ficaria mais complicado do que eu estou disposto a fazer agora. 

   Por causa do tutorial, eu pensava que o 'mysqli' guardava métodos que eu poderia acessar, tipo $mysqli->error(), mas na verdade ele guarda UM ARRAY, então eu não devo usar os parênteses. Tava quebrando a cabeça pra entender porquê estava falhando quando chegava na condição de erro. Só consegui descobrir por causa do "print readable": print_r. 

   E a propósito, ele estava falhando porquê depois que executa o código de criar as tabelas, no próximo envio do formulário ele tenta executar de novo, e dá erro dizendo que a tabela já existe. Eu poderia adicionar uma condição para pular o código quando ja tem uma tabela, mas isso dá muito trabalho e já tá ficando bem longe do meu escopo aqui. 

   Por esse motivo, a exportação só funciona corretamente a primeira vez, quando cria as tabelas. Se quiser rodar de novo precisa apagar todas. 
   É uma limitação chata, mas tudo funciona corretamente, é o que importa.
   */
?>