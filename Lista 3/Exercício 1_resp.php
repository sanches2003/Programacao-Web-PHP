<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
         if ($_POST){
            for($i=1; $i<=3; $i++){
                $vetor[$_POST["aluno$i"]] = $_POST["nota$i"]; //concatenando
            }
            foreach($vetor as $chave => $valor){
                echo "<br> Nome do aluno: $chave - Nota: $valor";

                $somanotas =+ $valor;
                $media = $somanotas / $valor++; 
                
                if ($maiorValor === null || $valor > $maiorValor) {
                    $maiorValor = $valor;
                }
            }
            foreach($vetor as $chave => $valor){
        echo "<br>Média: $media";
        echo "<br>A maior nota foi: $maiorValor. Aluno: $chave";
            }
    }   
        ?>
</body>
</container>
</html>