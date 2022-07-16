<!-- Acompanhando esse tutorial: 
https://alexwebdevelop.com/php-with-mysql/. "SQL Queries Explained" -->

<!-- Lá ele fala sobre a segurança dos dados. Queries são perigosas e um usuário mal intencionado pode injetar código através do formulário usando caracteres que o SQL vai reconhecer como um comando, não apenas texto. É preciso "escapar" esses caracteres. Não vou fazer isso aqui já que isso é só um arquivo pessoal.-->


<!-- ------- 3.INSERÇÃO DOS DADOS ------- -->
<?php
  // Eu estou assumindo que o objeto mysqli já está instanciado, pois eu abri no arquivo anterior.

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

  $i = 0 + $i++;
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

<!-- Por agora é isso. Vou deixar a parte de modificar para depois. Já serve para o que eu preciso agora. -->