<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
    
</head>
<body>
    <?php
        /*No php podemos criar funções que receberão, ou não,
        argumentos e retornará tais argumentos */
        //SINTAXE: function nomeFunção (args) {comando}
        //Função sem argumento definido
        function mensagem(){
            echo "Olá, Mundo Cruel!!!!!";
        }
        mensagem();//Chamado da função

        //Função com argumento definido
        function soma($a, $b){
            $r = $a + $b;
            echo "O resultado de $a mais $b é $r";
        }
        soma(7, 6);//Valores que irão para as variáveis

        //Função com retorno
        function subtracao($c, $d){
            $s = $c - $d;
            return $s;//Guarda na Função a variável $s
        }

        $x = 8;
        $y = -5;
        $res = subtracao($x, $y);
        echo "A subtração de $x e $y é: $res";

        $w = $_GET['n1'];
        $z = $_GET['n2'];
        function mult($w, $z){
            $k = $w * $z;
            return $k;
        }
        $k = mult($w, $z);
        echo "O produto $w e $z é igual a $k";
    ?>
    <a href="funcao.html">Voltar</a>
</body>
</html>