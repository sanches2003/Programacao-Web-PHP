<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2 - Lista 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    <?php 

    for($i=1;$i<=5;$i++){ //passando as informações pelo método POST, usamos o IF para percorrer as leituras, por isso tem que ser igual
        //ao outro.
    $vetor[$i] = $_POST["v$i"];
    }
    //criando variável:
    $cont_pares = 0; 
    $cont_impares = 0;
    $cont_negativos = 0;
    $cont_positivos = 0;
    foreach($vetor as $valor){ //colocamos as variaveis coletadas dentro de um array.
        if($valor%2 == 0)        //verificando se é divisivel por 2, se for é par, se não, é impar)
        $cont_pares++;
        else
        $cont_impares++;
        
        if($valor >= 0)
        $cont_positivos;
        else
        $cont_negativos;
    } 
    echo "<br/> Dos números digitados, possuímos $cont_positivos números positivos, $cont_negativos números negativos, 
    $cont_pares números pares e $cont_impares números ímpares.";

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>