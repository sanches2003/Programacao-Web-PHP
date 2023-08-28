<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 2 - Lista 3</h1>
    <form action="Exercício 2_resp.php" method="POST">
    <div class="row">
            <?php for($i=1;$i<=5;$i++) { ?>
                <div class="col">
                    <label class="form-label" for="v<?=$i?>">Informe o valor <?=$i?>, sendo ele, positivo, negativo, par ou ímpar:</label>
                    <input type="number" id="v<?=$i?>" name="v<?=$i?>" class="form-control"/>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success">Verificar</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>