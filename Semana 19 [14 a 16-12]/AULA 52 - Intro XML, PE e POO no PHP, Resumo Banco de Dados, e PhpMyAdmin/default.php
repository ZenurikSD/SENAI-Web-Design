<?php
   // O arquivo deve ser colocado em uma pasta dentro da "document root" para ser exibido. Por padrão ela fica em xampp/htdocs/

   // Para exibir uma data, use a função date() com o parâmetro 'd/m/y'

   echo date('d/m/y').' -- ';

   // Trazendo os dados do formulário
   $nome   = $_POST['nome'];
   $email  = $_POST['email'];
   $tel    = $_POST['tel'];
   $end    = $_POST['end'];
   $est = $_POST['estado'];

   // Salvando as informações em um arquivo txt
   // Escrevendo os campos para as colunas
   $registros = 
   fopen('Tabela de registros.xml', 'a+') 
   or exit("Arquivo não pôde ser criado ou já existe.");

   // Verificação para criar a primeira linha:
   $tamanho = filesize('Tabela de registros.xml');

      if($tamanho <= 2){
         fwrite($registros, '<?xml version="1.0"?>'."\n");
      }
      // Adicionando registros: <abertura> registro </fechamento>
      fwrite($registros, "
      <Contato> 
         <Nome>$nome</Nome>
         <E-mail>$email</E-mail>
         <Telefone>$tel</Telefone>
         <Endereço>$end</Endereço>
         <Estado>$est</Estado>
      </Contato>
      ");

   /* Sobre essa verificação: 
      Descobri que um tamanho de 0 bytes não funciona, precisa ser um pouquinho mais. E antes eu usava um if..else, mas a lógica não seria boa porquê caso o documento estivesse vazio (if true), ele não iria preencher os dados do primeiro usuário kkkkkkk.
      Outra; o fwrite() envia pro XML com a mesma formatação que eu faço aqui, como se fosse uma tag <pre> do HTML. Não preciso pedir para pular linha ou fazer identação.
   */

   // Retornar mensagem
   echo "Obrigado por preencher. Seus dados foram salvos em um documento XML.";
?>