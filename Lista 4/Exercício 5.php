<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5 - Lista 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício</h1>
    <form action="Exercício 5_resp.php" method="POST">
        <?php for($i=1;$i<=5;$i++){
        ?>
        <div class="row">
            <div class="col-4">
                <label for="valor<?=$i?>" class="form-label">Informe o valor <?=$i?></label>
                <input type="number" id="valor<?=$i?>" name="valor<?=$i?>" class="form-control"/>
        </div>
    <?php } ?>
    <div class="row">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>