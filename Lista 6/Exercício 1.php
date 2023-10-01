<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 1 - Lista 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Informe as durações das voltas das corridas.</h1>
    <form action="Exercício 1_resp.php" method="POST">
    <?php for($i=1;$i<=3;$i++){ ?>
        <div class="row">
            <div class="col">
                <label for="volta<?=$i?>" class="form-label">Informe a duração da <?=$i?>º volta:</label>
                <input type="volta" id="volta<?=$i?>" name="volta<?=$i?>" class="form-control"/>
            </div>
        </div>  
    <?php } ?> 
    <button type="submit" class="btn btn-info mt-3">Submeter</button>  
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>