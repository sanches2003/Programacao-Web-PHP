<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 5 - Lista 4</h1>
    <?php
    function verificarPrimo($valor,$vetor){
        $contador=0;
        for($i=1;$i<=sizeof($vetor); $i++){
            if($valor % $vetor[$i] == 0){
                $contador++;
            }
        }
        if (($contador == 1) || ($contador == 2)){
            return "Número primo!";
        } else {
            return "Não é um número primo!";
        }
    }
    //ler valores:
    for ($i=1;$i<=5;$i++){
        $vetor[$i] = $_POST["valor$i"];
    }

    for ($i=1; $i<=sizeof($vetor);$i++){
        echo "O valor" .$vetor[$i]."é".verificarPrimo($vetor[$i], $vetor). "<br/>";
    }
     ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>