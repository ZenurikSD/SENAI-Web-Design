<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Arquivos</title>
</head>
<body>
    <!--A ideia é manipular arquivos .txt pelo php-->

    <?php
        //readfile() é a função que lê o arquivo .txt
        echo readfile("dados.txt") . '<hr>';
    ?>
    
    <!--Precisamos seguir a seguinte sequência ao
        manipularmos arquivos
        1 - Abrir o arquivo
        2 - Fazer as alterações necessárias
        3 - Fechar o arquivo-->
    <?php
        //fopen() abre o arquivo usando o modo escolhido
        $dados = fopen('dados.txt', 'r') or
            exit('Arquivo não encontrado'); //exit() retorna uma mensagem caso não seja possível localizar o arquivo
        //fread() lê o arquivo selecionado
        echo fread($dados, filesize('dados.txt')) . '<hr>';//filesize() pega o tamanho do arquivo
        //fclose() fecha o arquivo
        fclose($dados);
    ?>
    <?php
        //modo r abre um arquivo somente leitura
        $dados1 = fopen('dados.txt', 'r') or
            die('Arquivo não encontrado');//die() mesma sintaxe e significado de exit()
        //fgets() lê a primeira linha do arquivo
        echo fgets($dados1) . '<hr>';
        fclose($dados1)
    ?>
    <?php
        //modo w abre um arquivo somente escrita SOBRESCRITA
        $dados2 = fopen('dados.txt', 'w') or
            die('Arquivo não encontrado');
        $texto = 'Arquivo modificado!!!!\n';
        //fwrite() função que escreve no arquivo respeitando o modo selecionado
        fwrite($dados2, $texto);
        fclose($dados2);
    ?>
    <?php
        //modo a abre um arquivo somente escrita sem SOBRESCRITA
        $dados3 = fopen('dados.txt', 'a') or
            die('Arquivo não encontrado');
        $texto1 = 'Arquivo acrescentado!!!!\n';
        fwrite($dados3, $texto1);
        fclose($dados3);
    ?>
    <?php
        //modo x CRIA um arquivo somente escrita
        /*$dados4 = fopen('dados1.txt', 'x') or
            exit('Arquivo não encontrado');
        $texto2 = 'Novo arquivo do tipo txt<hr>';
        fwrite($dados4, $texto2);
        fclose($dados4);*/
    ?>
    <?php
        //modo r+ Abre um arquivo para leitura e escrita colocando o ponteiro no começo do arquivo
        $dados5 = fopen('dados1.txt', 'r+') or
            exit('Arquivo não encontrado');
        echo fread($dados5, filesize('dados1.txt'));
        $texto3 = 'Modificando pelo r+';
        fwrite($dados5, $texto3);
        echo fread($dados5, filesize('dados1.txt'));
        fclose($dados5);
    ?>
    <?php
        //modo w+ abre um arquivo no modo leitura e escrita SOBRESCREVENDO o arquivo anterior
        $dados6 = fopen('dados1.txt', 'w+') or
            exit('Arquivo não encontrado');
        $texto4 = 'Sobrescrevendo usando o modo w+';
        fwrite($dados6, $texto4);
        echo fread($dados6, filesize('dados1.txt')) . '<hr>';
        fclose($dados6);
    ?>
</body>
</html>