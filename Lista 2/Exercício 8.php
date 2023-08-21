<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Lista 2 - Exercício 5</title>
  </head>
  <body class="container mt-3">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <h1>
    <h3>Faça um programa em PHO para uma loja de tintas. O programa deverá pedir o tamanho em metros 
quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 3 metros 
quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00. Informe ao usuário a 
quantidades de latas de tinta a serem compradas e o preço total.</h3>
    <form action="Exercício 8_resp.php" method="POST">
    <br>
      <div class=container>  
        <div class="row">
            <div class="col">
                <label for="metros">Digite o valor a ser pintado em metros:</label>
                <input type="number" name="metros" id="metros" class="form-control">
            </div>
        </div>

        <br>

        <div class="row">
            <div  class="col"> 
                <button type="submit" class="btn btn-success">Submeter</button>
            </div>
        </div>
    </form>
  </body>
</html>