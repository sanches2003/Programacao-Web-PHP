<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Lista 2 - Exercício 6</title>
  </head>
  <body class="container mt-3">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <h1>
    <h3>Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos 
seus valores. Caso os valores sejam iguais, informar o usuário e imprimir o valor em tela apenas uma 
vez.</h3>
    <form action="Exercício 6_resp.php" method="POST">
    <br>
      <div class=container>  
        <div class="row">
            <div class="col">
                <label for="a">Digite o valor A:</label>
                <input type="number" name="a" id="a" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="b">Digite o valor B:</label>
                <input type="number" name="b" id="b" class="form-control">
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