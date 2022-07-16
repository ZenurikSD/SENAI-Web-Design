<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contato</title>
</head>
<body>
    <?php
     $nome = $_POST['nome'];
     $idade = $_POST['idade'];
     $email = $_POST['email'];
     $local = $_POST['local'];
     $data_e_hora = $_POST['data_e_hora'];
     $contato = fopen('contato.txt', 'x+' ) or exit('Arquivo não encotrado 404');
     fwrite($contato,"nome:" .$nome."\n");
     fwrite($contato,"idade:" .$idade."\n");
     fwrite($contato,"email:".$email."\n");
     fwrite($contato,"local:" .$local."\n");
     fwrite($contato,"data e hora:" .$data_e_hora."\n");
     echo fread($contato,filesize('contato.txt'));
     fclose($contato);
     echo('muito brigado por prencher o formulario,sua informações foram salvas salvas com sucesso.');
     ?><br>
     <a href="index.html">Voltar</a>
</body>
</html>