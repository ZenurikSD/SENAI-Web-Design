<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de Strings</title>
</head>
<body>
    <?php
        /**Existem várias funções que
         * trabalham com strings, vejamos
         * algumas
         */

        //strlen() retorna o tamanho de uma string
        $nome = $_GET['nome'];
        echo "A variável $nome possui " . strlen($nome) . " caracteres<br><br>";

        //str_word_count() retorna o número de palavras de uma string
        $texto = $_GET['texto'];
        echo "A variável $texto possui " . str_word_count($texto) . " palvras<br><br>";

        //strrev() Retorna a string revertida
        $inverso = $_GET['inverso'];
        echo "A palavra $inverso quando revertida fica: " . strrev($inverso) . "!<br><br>";

        //strpos() Retorna a posição da minha primeira substring
        $posicao = $_GET['posicao'];
        echo $posicao . "<br><br>";
        echo "A palavra procurada está na posição: " . strpos($posicao, "teste") . " !<br><br>";

        //str_replace() Troca algum dado da string por outro
        $troca = $_GET['troca'];
        echo "O texto foi trocado para a palavra: " . str_replace("Rodrigues", "Silva", $troca) . " !<br><br>";

        //strtoupper() Deixa a string em maiúsculo
        $maius = $_GET['maius'];
        echo "A palavra $maius em maiúsculo, fica: " . strtoupper($maius) . " !<br><br>";

        //strtolower() Deixa a string em minúsculo
        $minus = $_GET['minus'];
        echo "A palavra $minus em minúsculo, fica: " . strtolower($minus) . " !<br><br>";

        //trim() Corta espaços em branco antes e depois das strings
        $corte = $_GET['corte'];
        echo $corte . "<br><br>";
        echo "O texto $corte sem espaços adicionais, fica: " . trim($corte) . " !<br><br>";

        //lcfirst() deixa a primeira letra da string minúscula
        $priminus = $_GET['priminus'];
        echo "O texto $priminus com a primeira letra minúscula, fica: " . lcfirst($priminus) . " !<br><br>";

        //ucfirst() deixa a primeira letra maiúscula
        $primaius = $_GET['primaius'];
        echo "O texto $primaius com a primeira letra maiúscula, fica: " . ucfirst($primaius) . " !<br><br>";

        //ucwords() deixa a primeira letra de cada palavra da string em maiúscula
        $palmaius = $_GET['palmaius'];
        echo "O texto $palmaius com as primeira letras em maiúsculo, fica: " . ucwords($palmaius) . " !<br><br>";

    ?>
    <a href="http://localhost/webdesigner/html%20e%20php/funcastr.html">Voltar</a>
</body>
</html>