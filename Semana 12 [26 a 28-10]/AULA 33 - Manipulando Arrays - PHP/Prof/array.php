<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
</head>
<body>
    <?php
        $carros = array("fusca", "brasília", "gol");
        echo "O meu primeiro carro é o: " . ucfirst($carros[0]) . "!<br>";
        echo "O meu segundo carro é a: " . ucfirst($carros[1]) . "!<br>";
        echo "O meu terceiro carro é o: " . ucfirst($carros[2]) . "!<br"; 
    ?>
    <hr><hr>
    <?php
        $numeros = array(1, 2, 3);
        echo "Meu primeiro número é: " . $numeros[0] . "!<br>";
        echo "Meu segundo número é: " . $numeros[1] . "!<br>";
        echo "Meu terceiro número é: " . $numeros[2]; "!<br>";
    ?>
    <hr>
    <?php
        $motos[0] = "cg";
        $motos[1] = "ybr";
        $motos[2] = "vespa";

        print_r($motos);
    ?>
    <hr>
    <?php
        $frutas = array(0 => "laranja", 1 => "maça", 2 => "pera");
        echo "Minha primeira fruta é: " . ucfirst($frutas[0]) . "!<br>";
        echo "Minha segunda fruta é: " . ucfirst($frutas[1]) . "!<br>";
        echo "Minha terceira fruta é: " . ucfirst($frutas[2]) . "!<br>";
        print_r($frutas);
    ?>
    <hr>
    <?php
       $livros = array(1 => "PHP", 75 => "HTML 4.0", "ultimo" => "SQL");
       echo "Meu primeiro livro é: " . $livros[1] . "!<br>";
       echo "Meu segundo livro é: " . $livros[75] . "!<br>";
       echo "Meu terceiro livro é: " . $livros["ultimo"] . "!<br>";
       print_r($livros) . "<br>";
       $livros[] = "SÓ JAVASCRIPT";
       print_r($livros) . "<br>";
       $livros["proximo"] = "SQL SERVER";
       print_r($livros) . "<br>";
    ?>
    <hr>
    <?php
        $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, magni sunt quasi magnam perferendis sequi vero unde velit odio animi recusandae quo neque similique fugit veritatis illum voluptatibus soluta voluptatem!";
        $vlorem = explode(" ", $lorem);
        print_r($vlorem);
        echo(count($vlorem)) . "<br>";
        $slorem = implode(" ", $vlorem);
        print_r($slorem);
    ?>
    <hr>
    <?php
        $cervejas = array(
            array('glacial', 45, 17),
            array('gutts', 87, 65),
            array('polar', 15, 3)
        );
        echo "O nome da minha primeira cerveja é: " . $cervejas[0][0] . "!
        e ela possui um estoque de: " . $cervejas[0][1] . " unidades! 
        e foram vendidas " . $cervejas[0][2] . ' unidades!<br>';
    ?>
    <hr>
    <?php
        $sorvetes = array(
            array("sabor" => "morango", "estoque" => 15, "vendidos" => 3),
            array("sabor" => "uva", "estoque" => 20, "vendidos" => 15),
            array("sabor" => "limão", "estoque" => 17, "vendidos" => 11)
        );
        echo "O nome do sabor do meu segundo sorvete é: " . $sorvetes[1]['sabor'] . '!<br>';
    ?>
    <hr>
    <?php
        $alfabeto = array('a', 'r', 't', 'b', 'c');
        print_r($alfabeto);
        echo '<br>';
        array_pop($alfabeto);
        print_r($alfabeto);
        echo '<br>';
        array_push($alfabeto, 'j');
        print_r($alfabeto);
        echo '<br>';
    ?>
</body>
</html>