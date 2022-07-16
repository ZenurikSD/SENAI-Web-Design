<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em Arquivos</title>
</head>
<body>
    <?php
        //isset() verifica se a variável é diferente de NULL
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $nome_idade = fopen('formArq.txt', 'x+') or
            exit('Arquivo não encontrado 404');
        fwrite($nome_idade, $nome);
        fwrite($nome_idade, $idade);
        echo fread($nome_idade, filesize('formArq.txt'));
        fclose($nome_idade);
    ?>
    <a href="formArq.html">Voltar</a>
</body>
</html>