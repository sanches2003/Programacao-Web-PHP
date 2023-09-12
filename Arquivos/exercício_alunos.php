<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manipulação de arquivos - Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
<body class="container mt-4">
    <form action="exercício_alunos_resp.php" method="POST">
    <?php for($i=1; $i<=5; $i++) {?>
        <div class="row">
            <div class="col">
                <label for="nome<?=$i?>">Informe o nome do aluno <?=$i?>: </label>
                <input type="text" name="nome<?=$i?>" id="nome<?=$i?>" class="form-control"/>
            </div>
    <?php }?>

    <div class="row mt-4">
        <div class="col">
            <button type ="submit" class="btn btn-primary">
                Submeter
            </button>
        </div>
    </div>
    </form>
    </body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>