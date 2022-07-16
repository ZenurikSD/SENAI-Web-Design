<!-- Acompanhando esse tutorial: https://alexwebdevelop.com/php-with-mysql/. Ele mostra os dois estilos: estruturado e orientado a objetos. -->

<!-- Conexão ao DB - Modo Estruturado -->
<?php 
   //Variáveis
   $host   = 'localhost';       // Nome do host
   $user   = 'root';            // Usuário
   $senha  = '';                // Senha
   $schema = 'dbsite-15-12-21'; // schema=db escolhido

   //Conexão - método(parâmetros)
   $mysqli = mysqli_connect($host, $user, $senha, $schema);

   //Verifique se a conexão foi bem-sucedida
   // ! é negação - se (NÃO conectar)
   if (!$mysqli){
      echo 'Conexão falhou. ';
      echo 'Nº do erro: '.mysqli_connect_errno().' ';
      echo 'Descrição: '.mysqli_connect_error().' ';
      exit();
   }

   //Sucesso:
   echo 'Conexão bem-sucedida.';

   // Nesse exemplo eu chamo cada método individualmente, isolado.
?>