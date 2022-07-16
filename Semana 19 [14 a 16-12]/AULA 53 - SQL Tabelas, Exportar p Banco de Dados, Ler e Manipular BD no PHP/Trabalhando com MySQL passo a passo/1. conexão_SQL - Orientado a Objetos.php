<!-- Acompanhando esse tutorial: https://alexwebdevelop.com/php-with-mysql/. Ele mostra os dois estilos: estruturado e orientado a objetos. -->

<!-- Conexão ao DB - Modo Orientado a Objetos -->
<?php 
   //Variáveis
   $host   = 'localhost';       // Nome do host
   $user   = 'root';            // Usuário
   $senha  = '';                // Senha
   $schema = 'Loja'; // schema=db escolhido

   //Conexão - nova instância(parâmetros)
   $mysqli = new mysqli($host, $user, $senha, $schema);

   //Verifique se a conexão foi bem-sucedida
   // ! é negação - se (NÃO for_nulo(mensagem de erro))
   if (!is_null($mysqli->connect_error)){ 
      echo 'Conexão falhou. ';
      echo 'Nº do erro: '.$mysqli->connect_errno().' ';
      echo 'Descrição: '.$mysqli->connect_error().' ';
      exit();
   }

   //Sucesso:
   echo 'Conexão bem-sucedida.';   

   // Nesse exemplo eu acesso os métodos do objeto instanciado.
?>