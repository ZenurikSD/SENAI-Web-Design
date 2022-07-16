<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Alisson Silva</title>
   <link rel="stylesheet" href="atividade.css">
</head>
<body>
   <?php
   $estado = $_POST["listaEstados"];

   switch ($estado){
      //região norte
      case "Acre";
      case "Amapá";
      case "Amazonas";
      case "Pará";
      case "Rondônia";
      case "Roraima": 
         echo "<p id='norte'>Você escolheu um estado da <b>região Norte</b></p>."; break;

      //região nordeste
      case "Acre";
      case "Amapá";
      case "Amazonas";
      case "Alagoas";
      case "Bahia";
      case "Ceará";
      case "Pará";
      case "Paraíba";
      case "Pernambuco";
      case "Piauí";
      case "Rio Grande do Norte";
      case "Maranhão";
      case "Sergipe": 
         echo "<p id='nordeste'>Você escolheu um estado da <b>região Nordeste</b></p>."; break;

      //região centro-oeste
      case "Distrito Federal";
      case "Mato Grosso";
      case "Goiás";
      case "Mato Grosso do Sul": 
         echo "<p id='centro'>Você escolheu um estado da <b>região Centro-Oeste</p>"; break;

      //região sudeste
      case "Espírito Santo";
      case "Minas Gerais";
      case "Rio de Janeiro";
      case "São Paulo": 
         echo "<p id='sudeste'>Você escolheu um estado da <b>região Sudeste</b>.</p>"; break;

      //região sul
      case "Paraná";
      case "Rio Grande do Sul";
      case "Santa Catarina": 
         echo "<p id='sul'>Você escolheu um estado da <b>região Sul</b>.</p>"; break;
   }
   ?>

</body>