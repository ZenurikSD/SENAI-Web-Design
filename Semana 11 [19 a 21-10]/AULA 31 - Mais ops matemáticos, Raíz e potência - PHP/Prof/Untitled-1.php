<?php
    //Para o comentário de 1 linha

    /*Para o comentário
    de várias linhas!!!! */
    echo "Olá, Mundo!!!!<hr>";

    /**A declarção de variáveis é feita pelo símbolo
     * de cifrão $
     */
    //O PHP é case sensitive
    $nome = "Teste";
    echo "Traga a minha variável nome <strong>$nome</strong><hr>";
    print ("Traga a minha variável nome <strong>$nome</strong><hr>");

    /**Operadores matemáticos */
    //O operador de soma +
    $num1 = 5;
    $num2 = 6;
    $res = $num1 + $num2;
    echo "A soma de $num1 com $num2 é: $res<hr>";
    //O operador de subtração -
    $num3 = 6;
    $num4 = 9;
    $subs = $num3 - $num4;
    echo "A subtração de $num3 e $num4 é: $subs<hr>";
    //O operador de multiplicação *
    $num5 = 8;
    $num6 = 5;
    $mult = $num5 * $num6;
    echo "O produto de $num5 por $num6 é: $mult<hr>";
    //O operador de divisão /
    $num7 = 9;
    $num8 = 17;
    $divi = number_format($num7 / $num8,2,",",".");
    echo "A divisão de $num7 por $num8 é: $divi<hr>";
    //O operador de módulo % (retorna o resto de uma divisão)
    $num9 = 43;
    $num10 = 11;
    $modu = $num9 % $num10;
    echo "O resto da divisão de $num9 por $num10 é: $modu<hr>";
    //O operador de potenciação **
    $num11 = 8;
    $num12 = 3;
    $pot = $num11**$num12;
    echo "O $num11 elevado à $num12 potência é: $pot<hr>";
    //Também podemos fazer raízes
    $raiz = $num11**(1 / $num12);
    echo "A raíz de índice $num12 de $num11 é: $raiz<hr>";
?>