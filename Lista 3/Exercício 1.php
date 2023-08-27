<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Lista 3 - Exercício 1</title>
  </head>
  <body class="container mt-3">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <form action="Exercício 1_resp.php" method="POST">
        <h4>Entre com os dados de 10 alunos de uma classe, recebendo as informações como
nome e uma nota do aluno. Armazene estes dados em um mapa ordenado. Ao
final do programa mostrar a média de nota da classe, e o nome do aluno que
obteve maior nota.
</h4>
            <?php for($i=1; $i<=3; $i++){?>           
            <div class="row">
                <div class="col">
                    <label for="aluno <?=$i?>">Informe o nome do aluno <?=$i?>: </label>
                    <input type="text" name="aluno<?=$i?>" id="aluno<?=$i?>" class="form-control"/>
                </div>
                <div class="col">
                    <label for="nota <?=$i?>" class="form-label">Informe a nota do aluno <?=$i?>:</label>
                    <input type="number" name="nota<?=$i?>" id="nota<?=$i?>" class="form-control"/>
                </div>
            </div>
            <?php } ?>
            <div class="row">
                <div class="col mt-2 mb-2">
                    <button type="submit" class="btn btn-info">Submeter</button>
                </div>
            </div>
        </form>
</body>
</html>