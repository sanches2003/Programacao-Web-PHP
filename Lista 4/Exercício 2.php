<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2 - Lista 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Faça um programa que leia o nome de 10 alunos de uma turma e que ao enviar 
esses nomes eles sejam apresentados em ordem alfabética
</h1>
    <form action="Exercício 2_resp.php" method="POST">
    <?php for($i=1;$i<=10;$i++){
        ?>
   <div class="row">
        <div class="col-4">
              <label for="nome<?=$i?>" class="form-label">Informe o <?=$i?>º nome:</label>
              <input type="nome" id="nome<?=$i?>" name="nome<?=$i?>" class="form-control"/>
        </div>
        <?php } ?>
        <div class="row mt-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>